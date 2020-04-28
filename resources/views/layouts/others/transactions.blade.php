<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
    </head>    

    <body>
    
    @include('layouts.components.navbar')

            <!--PRO SIDEBAR PART-->
    @include('layouts.components.sidebar')
  <main class="page-content"></main>

  @include('auth.footer-newsletter')      
    @include('layouts.components.footer-scripts-home')
    <script>
    $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#setting").addClass('active');
                $(".page-wrapper").removeClass("toggled");
            });
    </script>
    </body>
</html>