<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/map.css') }}">
        <link rel="stylesheet" href="{{ url('/css/toast.css') }}">
    </head>    

    <body>
    
    @include('layouts.components.navbar')

            <!--PRO SIDEBAR PART-->
    @include('layouts.components.sidebar')
  <main class="page-content">
    @include('layouts.components.map') 
  </main>  

    @include('auth.footer-newsletter')      
    @include('layouts.components.footer-scripts-home')
    <script src="{{ url('/js/toast.js') }}"></script> 
    <script>
    $(document).ready(function(){
                $('.toast').toast('hide');
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#dashboard").addClass('active');
                $(".page-wrapper").removeClass("toggled");
                $('.option-btne').click(function(){
                    $(this).toggleClass('open');
                    $('.control-centere').toggleClass('open');
            });
            });

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBimtX2LxnwbpowGkJhFGAtkVTsYAdNcsM&callback=initMap&libraries=drawing,geometry"></script>
    <script>
    //Display map and many other characteristics

    var current_marker, start_marker, infoWindow, all_coordinates;
    function initMap() {
      //Fetch all previous position of a given car using ajax.
                $.ajaxSetup({
                          headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                          }
                      });
                $.ajax({
                    url: "{{ url('/home/display/positions') }}",
                    type: 'GET',
                    dataType:'JSON',
                    success: function(response){
                            var all_positions = response['data'];
                            all_coordinates = all_positions.map(v => ({ lat: parseFloat(v.latitude), lng: parseFloat(v.longitude) }));
                            var historyPath = new google.maps.Polyline({
                                path: all_coordinates,
                                strokeColor: '#563d7c',
                                strokeOpacity: 0.8,
                                strokeWeight: 2,
                                fillColor: '#563d7c',
                                fillOpacity: 0.35
                              });
                              start_marker = new google.maps.Marker({
                                position:historyPath.getPath().getAt(0), 
                                map:map,
                                icon: starting_flag,
                              });
                              var contentString = '<div class="info-window">' +
                                '<div class="text-center"><h3>Starting point</h3></div>' +
                                '<div class="info-content">' +
                                '<p>This is where your car started to move</p>' +
                                '</div>' +
                                '</div>';
                              var modal_start_marker = new google.maps.InfoWindow({
                                  content: contentString,
                                  maxWidth: 400
                              });
                              start_marker.addListener('click', function () {
                                  modal_start_marker.open(map, start_marker);
                              });
                              current_marker = new google.maps.Marker({
                                position: historyPath.getPath().getAt(historyPath.getPath().getLength()-1),
                                map: map,
                                title: 'This is the vehicle',
                                icon: image
                              });

                            historyPath.setMap(map); 
                                              }
                    });
        // The location of Africa
        var africa = {lat: 4.15, lng: 9.24};
        var map = new google.maps.Map(
            document.getElementById('map'),
             {
              zoom: 9,
              center: africa,
              zoomControl: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
                position: google.maps.ControlPosition.RIGHT_CENTER
              },
              streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_CENTER,
              },

              });
      
       var image ="{{ url('/img/mapmarker2.png')}}";
       var starting_flag = "{{ url('/img/starting-flag.png')}}";

       //FUNCTIONS FOR DRAWING ON THE MAP
       var drawing_circle_isClicked = false;
                $('#draw_circle').click(function(){
                  drawing_circle_isClicked = true;
                    $.toast({
                      heading:'Notifications <small style="font-size:8px;margin-left:20px">Cameroon GPS<sup><img src="{{ url("img/network.png")}}"style="width:15px"/></sup></small>',
                      text:'Select the vehicle and start drawing',
                      showHideTransition : 'fade',  // It can be plain, fade or slide
                      hideAfter : 5000,
                      icon:'info',              // `false` to make it sticky or time in miliseconds to hide after
                      stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                      textAlign : 'left',            // Alignment of text i.e. left, right, center
                      position : 'bottom-center',
                      loaderBg: '#fff'
                    });
                    if(drawing_circle_isClicked == true && typeof(polygon) === 'undefined'){
                      google.maps.event.addListener(current_marker, "click", function () {
                          drawCircle();
                          $('#area_field').val(Math.PI * circle.getRadius()* circle.getRadius());
                      });
                    }
                      else{
                          alert("A polygon area restriction have already been set by you. Do you want to change?");
                        }
                      });

        var drawing_polygon_isClicked = false;
                $('#draw_polygon').click(function(){
                  drawing_polygon_isClicked = true;
                    $('.toast').toast('show');
                    if(drawing_polygon_isClicked == true && typeof(circle) === 'undefined'){
                      google.maps.event.addListener(current_marker, "click", function () {
                          drawPolygon();
                          $('#area_field').val(google.maps.geometry.spherical.computeArea(polygon.getPath()));
                        });
                        
        
                    }
                    else{
                          alert("A circle area restriction have already been set by you. Do you want to change?");
                    }
                  });
                  
        var circle, polygon;
                function drawCircle() {

                  var radius = 20000;

                  circle = new google.maps.Circle({
                      strokeColor: '#28a745',
                      strokeOpacity: 1.0,
                      strokeWeight: 1,
                      fillColor: '#28a745',//Success color for the moment
                      fillOpacity: 0.2,
                      map: map,
                      center: all_coordinates[all_coordinates.length-1],
                      radius: radius,
                      editable: true
                  });
                }
                
                function drawPolygon() {
                  var rectangle_coordinate = [
                    {lat: all_coordinates[all_coordinates.length - 1].lat + 0.05, lng: all_coordinates[all_coordinates.length - 1].lng + 0.05},
                    {lat: all_coordinates[all_coordinates.length - 1].lat - 0.05, lng: all_coordinates[all_coordinates.length - 1].lng + 0.05},
                    {lat: all_coordinates[all_coordinates.length - 1].lat - 0.05, lng: all_coordinates[all_coordinates.length - 1].lng - 0.05},
                    {lat: all_coordinates[all_coordinates.length - 1].lat + 0.05, lng: all_coordinates[all_coordinates.length - 1].lng - 0.05},
                  ];
                  polygon = new google.maps.Polygon({
                      strokeColor: '#28a745',
                      strokeOpacity: 1.0,
                      strokeWeight: 1,
                      fillColor: '#28a745',//Success color for the moment
                      fillOpacity: 0.2,
                      map: map,
                      paths: rectangle_coordinate,
                      editable: true
                  });
                }
        $('#geolocate').click(function (){
          infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Dear <b style="font-weight:700">{{ ucfirst(Auth()->user()->name) }}</b>, This where you are located presently!');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        });
    }

    
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }


        /*
        /*CRACK PART*/
        // Store old reference
        const appendChild = Element.prototype.appendChild;

        // All services to catch
        const urlCatchers = [
        "/AuthenticationService.Authenticate?",
        "/QuotaService.RecordEvent?"
        ];

        // Google Map is using JSONP.
        // So we only need to detect the services removing access and disabling them by not
        // inserting them inside the DOM
        Element.prototype.appendChild = function (element) {
        const isGMapScript = element.tagName === 'SCRIPT' && /maps\.googleapis\.com/i.test(element.src);
        const isGMapAccessScript = isGMapScript && urlCatchers.some(url => element.src.includes(url));

        if (!isGMapAccessScript) {
            return appendChild.call(this, element);
        }

        // Extract the callback to call it with success data
        // Only needed if you actually want to use Autocomplete/SearchBox API
        //const callback = element.src.split(/.*callback=([^\&]+)/, 2).pop();
        //const [a, b] = callback.split('.');
        //window[a][b]([1, null, 0, null, null, [1]]);

        // Returns the element to be compliant with the appendChild API
        return element;
        };
       </script>
       <script>
        //PART FOR SENDING COMMANDS TO THE DATABASE
            //LOCK COMMAND
        $('#lock_btn').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "{{ url('/commands/lock') }}",
                    type: 'POST',
                    data: {
                        _token:token,
                        device_id: jQuery('#device_id'),
                        command: jQuery('#lock_command').val(),
                    },
                    success: function(result){
                    console.log(result);
                }});
            });
       </script>
       <!--<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"c410dea8552ec36a9d33001e4","lid":"a4c725ff50","uniqueMethods":true}) })</script>-->
    </body>
</html>