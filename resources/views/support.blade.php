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
            <div class="col-lg-5 col-xs-12">
                <img class="support-img" src="{{ url('/img/livesupport.png') }}"/>
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
            $.ajax({
                    url: "{{ url('/support/get-message') }}",
                    type: 'GET',
                    dataType:'JSON',
                    success: function(response){
                        all_datas = response['data'];
                        all_messages = all_datas.map(v => ({ msg: v.message}));
                        for (var i=0; i<all_messages.length + 1; i++){
                            $("#chat_converse").append("<span class='chat_msg_item chat_msg_item_user'>" + all_messages[i].msg + "</span><span class='status'>20m ago</span>");
                        }
                    }
            });

            $("#chatSend").keyup(function(event){
                if(event.keyCode == 13){
                    $("#fabv1_send").click();
                }
            });
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
                    success: function(data){
                        $('#chatSend').val('');
                        setTimeout(function() {
                            $.ajax({
                                url: "{{ url('/support/get-message') }}",
                                type: 'GET',
                                dataType:'JSON',
                                success: function(response){
                                    all_data = response['data'];
                                    all_message = all_data.map(v => ({ message: v.message}));
                                    last_entry = all_message.length - 1;
                                    $('#chat_converse').append("<span class='chat_msg_item chat_msg_item_user'>" + all_message[last_entry].message + "</span><span class='status'>20m ago</span>");
                                    }
                    });
                        }, 1000);
                    }
                });
            });
        });

        </script>
    </body>
</html>