<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield("title")</title>
</head>
<body>
    @include ('layout.navBar')
    <div class="mx-auto">
        <br><br><br>
        @yield('main_content')
    </div>
    <div class="mt-5 p-4 bg-light text-black text-center">
        <p>
            &copy; Copyright
            <span class="color-a">Property Company</span> All Rights Reserved.
        </p>
    </div>
</body>
</html>