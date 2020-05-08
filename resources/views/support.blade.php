<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/live-chat.css') }}">
        
</head>
    <body>
        @include('layouts.components.navbar')

        @include('layouts.components.sidebar')
        <div class="row">
            <div class="col-lg-5 offset-5">
                <img src="{{ url('/img/livesupport.png') }}"/>
            </div>
        </div>
     <div class="fabsv1">
        @include('layouts.components.live-chatbox')
        <input type="hidden" id="user_id" value="{{ ucfirst(Auth()->user()->id) }}"/>
        <a id="prime" class="float1" target="_blank">
            <i class="prime fas fa-headset my-float1" style="color:#563d7c"></i>
        </a>
    </div>
        <a href="/home" class="float" target="_blank">
            <i class="fas fa-route my-float"></i>
        </a>
        @include('auth.footer-newsletter')  
        @include('layouts.components.footer-scripts-home')
        <script src="{{ url('/js/live-chat.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#more").addClass('active');
            });
        </script>
        <script>
            jQuery(document).ready(function(){
            //VALIDATE FIRST STEP
            jQuery('#fabv1_send').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "{{ url('/support/sending-message') }}",
                    type: 'POST',
                    data: {
                        _token:token,
                        user_id: $('#user_id').val(),
                        message: jQuery('#chatSend').val(),
                    },
                    success: function(result){
                            
                        }
                    });
            });
        });
        </script>
    </body>
</html>