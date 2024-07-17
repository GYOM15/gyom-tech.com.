<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            width: 100%;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #f8f9fa;
        }
        .btn-home {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar shadow navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}} ">
                <img src="/storage/images/header-logo.png" alt="Home" width="150" height="50" class=" d-inline-block align-top">
            </a>
        </div>
    </nav>
    <div class="content">
        <div class="container">
            <h1 class="display-1">404</h1>
            <p class="lead display-5">{{__('errors.page_not_found')}}</p>
            <a href="{{route('home')}}" class="btn btn-primary btn-home">{{__('errors.back_to_home')}}</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
