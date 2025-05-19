<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BarbershopGloria.Com</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    }

    .navbar, .footer {
      background-color: rgba(3,60,135,255);
     
    }

    .navbar-brand, .nav-link, .footer-text {
      color: rgba(248,202,31,255) !important;
    }

    .section-heading {
      color:rgba(248,202,31,255); 
    }
    .btn-primary {
      background-color: rgba(3,60,135,255);
      border-color: rgba(3,60,135,255);
    }
    .main-section{
     background-color: rgba(137, 207, 240, 0.4);
    }

    .chartHarga{
      background-color:hsl(210, 22%, 94.5%);
    }
    
    .btn-primary:hover {
      background-color: rgba(248,202,31,255);
      border-color: rgba(248,202,31,255);
    }
    .custom-margin{
      margin-bottom: 30px;
    }

    .navbar-logo{
      height: 6rem;
      width: auto;
        
    }

    .hair-images{
      width: 50vw;
      height: auto;
      
    }

    .navbar {
    padding-top: 0.2rem !important;
    padding-bottom: 0.2rem !important;
    }

    hr {
      width: 300px;
      margin: 10px auto;
    }

    .dropdown-toggle::after {
    display: none !important; 
    }

    .yellow-icon{
      color: rgba(248,202,31,255);
      font-size: 2rem;
    }

    .icon-button{
      padding: 0;
      margin-top: 0;
      margin-right: 10px;
      align-self: flex-start;
    }

  </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="d-flex justify-content-between align-items-center w-100">
            <img src="images/logo.png" alt="Logo" class="navbar-logo" style="margin-left: 2.5rem;">
            <div class="dropdown icon-button" style="margin-right: 30px;">
                <button class="btn btn-link dropdown-toggle " id= "dropdownIconButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-box-arrow-in-right yellow-icon "></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="login">Login</a></li>
                <li><a class="dropdown-item" href="register">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
 <!-- isi -->
    <div class="container">
        
        <!-- bagian kiri -->
        <div class="left">
        <img src="barber.jpg" alt="Barber Pole">
        </div>

        <!-- bagian kanan -->
        <div class="right">
        <form class="form-box" method="POST" action="{{route('store')}}">
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

           

            <p class="terms">By creating an account, you agree to the <a href="#">Terms and Conditions</a>.</p>
        </form>
        </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>