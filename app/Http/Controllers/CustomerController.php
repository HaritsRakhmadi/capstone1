<?php
    namespace App\Http\Controllers;


    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use App\Models\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Http;

    
    class CustomerController extends Controller
    {
        public function __construct()
        {
            /** @var \App\Http\Controllers\Controller $this */
            $this -> middleware('auth') -> only(['profile','update', 'userupdate', 'booking']);
        }

        public function index(){
            return view('home');
        }

        public function register(){
            return view('register');
        }

        public function login(){
            return view('login');
        }

        public function profile(){
            $events = [];
            return view('profile');
        }

        
        public function update(){
            return view('update');
        }

        public function booking(){
            return view('booking');
        }

        public function mybookings(){
            return view('mybookings');
        }

        public function store(Request $request){
            
            $request -> validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:2',
                'phonenumber' => 'required|digits_between:2,15'
            ]);
            
            User::create([
                'name' => $request -> name,
                'email' => $request -> email,
                'password' => Hash::make($request->password),
                'phonenumber' => $request -> phonenumber
            ]);
            return redirect()-> route('login')-> with('Success', 'Account Created Successfully!');
        }

        public function userlogin(Request $request){
            

            if(Auth::attempt(['email' => $request -> email,'password' => $request -> password])){
                $request -> session() -> put('user_name', Auth::user() -> name);
                $request -> session() -> put('user_id', Auth::user() -> id);
                $request -> session() -> put('user_email', Auth::user() -> email);
                $request -> session() -> put('user_phonenumber', Auth::user() -> phonenumber);
                
                return redirect()-> route('profile');

            }

            return back() ->with('Error', 'Invalid Email or Password');
        }

        public function userlogout(Request $request){
            Auth::logout();
            $request -> session() -> invalidate();
            $request -> session() -> regenerateToken();

            return redirect() -> route('login');
        }

        public function userupdate(Request $request){
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> password = Hash::make($request -> password);
            $user -> phonenumber = $request -> phonenumber;
            $user -> save();

            $request -> session() -> put('user_name', Auth::user() -> name);
            $request -> session() -> put('user_id', Auth::user() -> id);
            $request -> session() -> put('user_email', Auth::user() -> email);
            $request -> session() -> put('user_phonenumber', Auth::user() -> phonenumber);
            
            return redirect()-> route('profile');
        }

        public function fetchCalendlyData(){
           
            $CalendlyAPIToken = 'eyJraWQiOiIxY2UxZTEzNjE3ZGNmNzY2YjNjZWJjY2Y4ZGM1YmFmYThhNjVlNjg0MDIzZjdjMzJiZTgzNDliMjM4MDEzNWI0IiwidHlwIjoiUEFUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNzQ5MTE5Njc2LCJqdGkiOiJlMTBiYTQwMS0wMGE1LTRiMjctOWMwZC1kNTViMzUxOTM2OTAiLCJ1c2VyX3V1aWQiOiI3NjRhNTkyYS1lMzljLTQ5MWUtYjZhNS0yMzgwMjlhMWE1ZmIifQ.M4TDMiRoDHnyy-xMr17K2QmsRAAVDOcJLLHvwQR1VKDCo0Yi3qS3gVF1y9zfX0LfhcjZExqrzekfa2Hy2JNvdw';
            $response = Http::withToken($CalendlyAPIToken) -> get('https://api.calendly.com/scheduled_events/764a592a-e39c-491e-b6a5-238029a1a5fb');
            dd($response);
            if ($response -> successful()){
                $data = $response -> json();
                $events =  $data['collection']??[];
            } else{
                $events = [];
            }

            return view('mybookings', compact('events'));
        }
}
