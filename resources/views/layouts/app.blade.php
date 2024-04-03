@php use Illuminate\Support\Facades\URL; @endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(resource_path('/css/app.css'))
</head>
<body class="font-fig antialiased">
    <div class="flex min-h-screen">
        <x-sidebar />
        <main class="p-16 w-full">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
