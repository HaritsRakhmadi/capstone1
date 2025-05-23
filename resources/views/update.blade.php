<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Update Profile</title>
  <style>
    body {
      background-color: #fdfdfd;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .form-box {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      margin-top: 0;
      color: rgba(3,60,135,255);
    }

    p {
      color: #555;
    }

    label {
      display: block;
      margin-top: 20px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      margin-top: 30px;
      width: 100%;
      padding: 12px;
      background-color: rgba(3,60,135,255);
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #003f91;
    }
  </style>
</head>
<body>
  <form class="form-box" method="POST" action="{{ route('userupdate') }}">
    @csrf

    <h2>Update Profile</h2>
    <p>Update your information below.</p>

    <label for="name">Full Name</label>
    <input type="text" name="name" placeholder="Enter your full name">

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Enter your email">

    <label for="password">New Password</label>
    <input type="password" name="password" placeholder="Enter a new password">

    <label for="phonenumber">Phone Number</label>
    <input type="text" name="phonenumber" placeholder="Enter your phone number">

    <button type="submit">Update Profile</button>
  </form>
</body>
</html>
