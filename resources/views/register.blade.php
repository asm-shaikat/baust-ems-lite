<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form action="{{  url('/register') }}" method="post" enctype="multipart/form">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>