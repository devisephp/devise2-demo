<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />

    <title>Welcome to Devise Cruises</title>

    <script>
      <?= Devise::data($page) ?>
    </script>
  </head>
  <body>
    <div id="app">
      <devise>
        <div slot="on-top">
          {{-- This appears above the Devise content --}}
        </div>
        <footer slot="on-bottom">
          {{-- This appears below the Devise content --}}
        </footer>
      </devise>
    </div>

    <script src="{{mix('/manifest.js')}}"></script>
    <script src="{{mix('/js/vendor.js')}}"></script>
    <script src="{{mix('/js/app.js')}}"></script>

  </body>
</html>
