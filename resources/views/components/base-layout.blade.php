<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Title</title>
</head>
<body>
<x-header/>
<div class="flex items-center justify-center max-w-[100vw] py-12 px-4 tablet:px-12">
    <div class="max-w-[74rem] w-full">
        {{ $slot }}
    </div>
</div>
<div class="h-8 bg-light-grey">footer</div>
</body>
</html>
