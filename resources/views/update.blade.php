<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form-box" method="POST" action="{{route('userupdate')}}">
            @csrf

            <h2>Sign up</h2>
            <p>Fill in your data to create an account.</p>
            <label for="name">Full Name</label>
            <input type="text" placeholder="Enter your full name" name="name">

            <label for="email">Email</label>
            <input type="email" placeholder="Enter your email" name="email">

            <label for="password">Password</label>
            <input type="password" placeholder="Create a password" name="password">

            
            <label for="phonenumber">Phone Number</label>
            <input type="text" placeholder="Enter your phone number" name="phonenumber">
           

            <button type="submit">Create an account</button>

           
        </form>
</body>
</html>