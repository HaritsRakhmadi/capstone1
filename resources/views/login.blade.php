<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BarbershopGloria.Com</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="login.css" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f8f9fa;
    }

    .navbar {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
      background-color: rgba(3, 60, 135, 255);
    }

    .navbar-brand,
    .nav-link,
    .footer-text {
      color: rgba(248, 202, 31, 255) !important;
    }

    .btn-primary {
      background-color: rgba(3, 60, 135, 255);
      border-color: rgba(3, 60, 135, 255);
    }

    .btn-primary:hover {
      background-color: rgba(248, 202, 31, 255);
      border-color: rgba(248, 202, 31, 255);
    }

    .navbar-logo {
      height: 6rem;
      width: auto;
    }

    .dropdown-toggle::after {
      display: none !important;
    }

    .yellow-icon {
      color: rgba(248, 202, 31, 255);
      font-size: 2rem;
    }

    .icon-button {
      padding: 0;
      margin-top: 0;
      margin-right: 10px;
      align-self: flex-start;
    }

    /* Form Section Styles */
    .auth-section {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
    }

    .form-container {
      width: 100%;
      max-width: 420px;
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-box h2 {
      margin-bottom: 15px;
      color: rgba(3, 60, 135, 255);
    }

    .form-box p {
      font-size: 0.95rem;
      margin-bottom: 25px;
      color: #333;
    }

    .form-box label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #333;
    }

    .form-box input {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 0.95rem;
    }

    .form-box button {
      width: 100%;
      background-color: rgba(3, 60, 135, 255);
      border: none;
      padding: 12px;
      border-radius: 6px;
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-box button:hover {
      background-color: rgba(248, 202, 31, 255);
      color: rgba(3, 60, 135, 255);
    }

    .form-box .terms {
      margin-top: 15px;
      font-size: 0.85rem;
      color: #666;
    }

    .form-box .terms a {
      color: rgba(3, 60, 135, 255);
      text-decoration: underline;
    }

    .right {
      display: none;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="d-flex justify-content-between align-items-center w-100">
      <img src="images/logo.png" alt="Logo" class="navbar-logo" style="margin-left: 2.5rem;" />

      <div class="dropdown icon-button" style="margin-right: 30px;">
        <button class="btn btn-link dropdown-toggle" id="dropdownIconButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-box-arrow-in-right yellow-icon"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="login">Login</a></li>
          <li><a class="dropdown-item" href="register">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Form Section -->
  <div class="auth-section">
    <div class="form-container">
      <form class="form-box" method="post" action="{{route('userlogin')}}">
        @csrf

        <h2>Sign up</h2>
        <p>Login to your account.</p>

        @if(session()->has('Success'))
          <p>{{session()->get('Success')}}</p>
        @endif

        <label for="email">Email</label>
        <input type="email" placeholder="Enter your email" name="email" />

        <label for="password">Password</label>
        <input type="password" placeholder="Insert your password" name="password" />

        <button type="submit">Submit</button>

        <p class="terms">
          By creating an account, you agree to the
          <a href="#">Terms and Conditions</a>.
        </p>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>