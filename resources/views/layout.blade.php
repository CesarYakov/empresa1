<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .nav-item a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
        }
        .nav-item a:hover {
            background-color: #007bff;
            color: white;
        }
        .nav-item.active a {
            background-color: #007bff;
            color: white;
        }
    </style>

</head>
<body>
    @include('partials.nav')
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>