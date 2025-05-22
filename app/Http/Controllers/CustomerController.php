<?php
    namespace app\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use App\Models\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;


    class CustomerController extends Controller
    {
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
            return view('profile');
        }

        public function article1(){
            return view('article1');
        }

        public function article2(){
            return view('article2');
        }
      
        public function store(Request $request){
            
            // $request -> validate([
            //     'username' => 'required|string|max:255',
            //     'email' => 'required|email|unique:users,email',
            //     'userpassword' => 'required|string|min:8',
            //     'phonenumber' => 'required|digits_between:10,15'
            // ]);
            
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
    }
