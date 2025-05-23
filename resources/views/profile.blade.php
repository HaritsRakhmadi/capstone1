<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Profile</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 40px;
      color: #333;
    }

    h2 {
      color: rgba(3,60,135,255);
      margin-bottom: 20px;
    }

    h4 {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .btn-logout {
      background-color: rgba(3,60,135,255);
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      margin-bottom: 20px;
    }

    .btn-logout:hover {
      background-color: rgba(248,202,31,255);
      color: rgba(3,60,135,255);
    }

    .link-update {
      display: inline-block;
      margin-bottom: 20px;
      color: rgba(3,60,135,255);
      font-weight: 500;
      text-decoration: underline;
    }

    .dropdown {
      margin-bottom: 30px;
    }

    .dropdown-toggle {
      background-color: rgba(3,60,135,255);
      border-color: rgba(3,60,135,255);
    }

    .dropdown-toggle:hover {
      background-color: rgba(248,202,31,255);
      color: rgba(3,60,135,255);
      border-color: rgba(248,202,31,255);
    }

    .dropdown-menu a {
      font-size: 0.95rem;
    }
  </style>
</head>

<body>
  <form method="post" action="{{route('userlogout')}}">
    @csrf
    <button type="submit" class="btn btn-logout">Log Out</button>
  </form>

  <a href="update" class="link-update">Update Profile</a>

  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Articles
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="article1">Article 1: Cara Perawatan Rambut</a></li>
      <li><a class="dropdown-item" href="article2">Article 2: Cara Styling Rambut</a></li>
    </ul>
  </div>

  <h2>Welcome to Profile Page!</h2>
  <h4>Name: {{session('user_name')}}</h4>
  <h4>ID: {{session('user_id')}}</h4>
  <h4>Email: {{session('user_email')}}</h4>
  <h4>Phone Number: {{session('user_phonenumber')}}</h4>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
