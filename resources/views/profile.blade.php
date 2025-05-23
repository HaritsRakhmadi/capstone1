<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <form method="post" action="{{route('userlogout')}}" >
        @csrf
        <button type="submit">Log Out</button>
    </form>

    <a href="update">Update Profile</a>

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
    <h4>Name: {{session('user_phonenumber')}}</h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>