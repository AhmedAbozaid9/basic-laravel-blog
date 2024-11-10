<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>btats home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-6 mx-auto max-w-7xl relative">

<form action="/login" method="post" class=" flex flex-col gap-5 border rounded-md mx-auto max-w-[600px] p-4">
    @csrf
    <h2 class="font-semibold text-xl">Login</h2>
    <input name="email" required type="email" placeholder="email" class="p-3 rounded-sm border">
    <input name="password" required type="password" placeholder="password" class="p-3 rounded-sm border">
    <button type="submit"
            class="bg-pink-400 text-white font-semibold p-3 rounded-sm active:bg-white active:text-black">Sign up
    </button>
    <div class="flex items-center justify-center gap-5">
        are you a new user ? <a href="/" class="text-pink-400">Sign up</a>
    </div>
</form>
</body>
</html>
