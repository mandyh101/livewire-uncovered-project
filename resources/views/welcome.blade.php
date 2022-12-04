<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
        <link href="https://fonts.bunny.net/css?family=abeezee:400" rel="stylesheet" />
        <script src="/app.js"></script>

    </head>
    <body>

      <h1>My livewire counter app</h1>
      
      <livewire:counter />
      
      @livewireScripts
    </body>
</html>
