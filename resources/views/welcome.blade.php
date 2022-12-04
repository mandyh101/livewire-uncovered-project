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
      <header>
        <h1>Welcome to my livewire projects</h1>
        {{-- TODO write the nav class --}}
        <nav class="topnav">
          <a class="active" href="#home">Home</a>
          <a href="#counter">Counter</a>
          <a href="#contact-form">Contact form</a>
        </nav>
      </header>
      
      <livewire:counter />
      
      @livewireScripts
    </body>
</html>
