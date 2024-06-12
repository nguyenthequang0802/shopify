<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body{
            margin: 0!important;
            padding: 0!important;
        }
    </style>
</head>
<body>
    <header class="w-full h-auto bg-[#990d23] shadow-xl py-4">
        <div class="container mx-auto flex justify-center">
            <a href="/">
                <img src="https://winecellar.vn/wp-content/uploads/2022/09/W-Bronze-logo-New-1.png" height="150px" width="150px">
            </a>
        </div>
    </header>
    <div class="container flex justify-center mx-auto mt-12 relative">
        @yield('content')
    </div>

</body>
</html>
