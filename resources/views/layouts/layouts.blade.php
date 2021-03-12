<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <header>
        <ul class="menu">
            <a href="/"><li>Home</li></a>
            <a href="/charList"><li>Characters</li></a>
            <a href="/addCharacter"><li>Add a character</li></a>
        </ul>   
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
