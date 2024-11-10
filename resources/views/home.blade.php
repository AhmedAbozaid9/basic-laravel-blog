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
@auth
    <form action="/logout" method="post" class="flex">
        @csrf
        <button
            class="ml-auto bg-pink-400 text-white font-semibold px-4 py-2 rounded-md active:bg-white active:text-black text-sm">
            Logout
        </button>
    </form>
    <p>you're logged in buddy</p>
@else
    <form action="/register" method="post" class=" flex flex-col gap-5 border rounded-md mx-auto max-w-[600px] p-4">
        @csrf
        <h2 class="font-semibold text-xl">Register</h2>
        <input name="name" required type="text" placeholder="name" class="p-3 rounded-sm border">
        <input name="email" required type="email" placeholder="email" class="p-3 rounded-sm border">
        <input name="password" required type="password" placeholder="password" class="p-3 rounded-sm border">
        <button type="submit"
                class="bg-pink-400 text-white font-semibold p-3 rounded-sm active:bg-white active:text-black">Sign up
        </button>
        <div class="flex items-center justify-center gap-5">
            already a user ? <a href="/login" class="text-pink-400">Login</a>
        </div>
    </form>
@endauth
</body>
</html>
