<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    
    <title>@yield('title')</title>
</head>
<body>
    @yield('Department.navbar')
    <div class="w-auto p-4">
        @yield('content')
    </div>
</div>
</body>
</html>