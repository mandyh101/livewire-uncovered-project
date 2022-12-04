@extends('layouts.app')

@section('content')
        <h1>Welcome to my livewire projects</h1>
        {{-- TODO write the nav class --}}
        <nav class="topnav">
          <a class="active" href="#home">Home</a>
          <a href="#counter">Counter</a>
          <a href="#contact-form">Contact form</a>
        </nav>
      </header>
      
      <livewire:counter />
      
      <livewire:contact-form />

      @endsection
