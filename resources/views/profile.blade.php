<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('userlogout')}}">
        @csrf
        <Button>Log Out</Button>
    </form>
    <h2>Welcome to Profile Page, {{session('user_name')}}</h2>
</body>
</html>