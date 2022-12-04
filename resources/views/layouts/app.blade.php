<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my livewire projects</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <link href="https://fonts.bunny.net/css?family=abeezee:400" rel="stylesheet" />
    <script src="/app.js"></script>
    <livewire:styles />
</head>

<body>
    <main class="container mx-auto">
        @yield('content')
    </main>

    <livewire:scripts />
</body>

</html>

