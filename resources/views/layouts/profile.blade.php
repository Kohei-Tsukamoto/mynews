<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
    
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" type="text/css" >
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/profile.css') }}">
  </head>
  <body>
    <div id ="app">
      <nav class="navber navber-expand-md navber-dark navber-leravel">
        <div class="container">
          <a class="navber-brand" href="{{ url('/') }}">
             {{ config('app.name','Laravel') }}
          </a>
          <buttun class="navber-toggler" type="button" data-toggler="collapse" data-target="#navbarSupportedContent" area-controls="navnarSupportedContent" area-expanded="false" area-label="Toggle navigation">
            <span class="navber-toggler-icon"></span>
          </buttun>
          
          <div class="collapse navber-collapse" id="navberSupportedContent">
            <ul class="navber-nav mr-auto">
              
              
            </ul>
            
            <ul class="navber-nav mr-auto">
              
            </ul>
          </div>
        </div>
      </nav>
      <main class="py-4">
      
      @yield('content') 
      </main>
    </div>
  </body>
</html>