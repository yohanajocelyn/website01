<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="mydesign/newCss.css">
    <title>{{ $layoutTitle }}</title>

    <x-navigation></x-navigation>
    <x-header>{{ $layoutTitle }}</x-header>
</head>

<body>
    <div>
        {{ $slot }}
    </div>
</body>

</html>
