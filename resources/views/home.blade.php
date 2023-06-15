<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>

</head>
<body>
<div class="p-5 mt-24 border-4 border-black-300">
<h1 class="text-8xl">Register

</h1>
<form action="/register" method="POST">
    @csrf
    <input type="text" name="" id="" placeholder="name">
    <input type="text" name="" id="" placeholder="email">
    <input type="password" name="" id="" placeholder="password">
    <button>Register</button>
</form>
</div>
</body>
</html>
