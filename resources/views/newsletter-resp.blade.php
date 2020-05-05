<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GPS-Cameroon</title>
        @include('layouts.components.header')

    </head>
<body class="body">

@include('layouts.auth.login-style')
    <div class="container" style="position:absolute;top:30%;left:10%;z-index:10;">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
     @include('layouts.components.footer-scripts')
  </body>
</html>