<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/map.css') }}">
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
    <script>
    $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#dashboard").addClass('active');
                $('.option-btne').click(function(){
                    $(this).toggleClass('open');
                    $('.control-centere').toggleClass('open');
            });

            });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBimtX2LxnwbpowGkJhFGAtkVTsYAdNcsM&callback=initMap&libraries=drawing,geometry"></script>
    <script>
    //Display map and many other characteristics

    var marker, infoWindow;
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
                            var all_coordinates = all_positions.map(v => ({ lat: parseFloat(v.latitude), lng: parseFloat(v.longitude) }));
                            console.log(all_coordinates);
                            var historyPath = new google.maps.Polyline({
                                path: all_coordinates,
                                strokeColor: '#563d7c',
                                strokeOpacity: 0.8,
                                strokeWeight: 2,
                                fillColor: '#563d7c',
                                fillOpacity: 0.35
                              });
                              var startMarker = new google.maps.Marker({
                                position:historyPath.getPath().getAt(0), 
                                map:map,

                              });
                              var current_marker = new google.maps.Marker({
                                position: historyPath.getPath().getAt(historyPath.getPath().getLength()-1),
                                map: map,
                                title: 'This is the vehicle',
                                icon: image
                              });

                            historyPath.setMap(map); 
                                              }
                    });
        // The location of Africa
        var africa = {lat: 7.36, lng: 12.34};
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
        
       var drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.MARKER,
          drawingControl: true,
          drawingControlOptions: {
            position: google.maps.ControlPosition.BOTTOM_CENTER,
            drawingModes: ['polyline','rectangle','circle', 'polygon']
          },
          markerOptions: {icon: image},
          circleOptions: {
            fillColor: '#563d7c',
            fillOpacity: 0.5,
            strokeWeight: 1,
            clickable: false,
            editable: true,
            zIndex: 1
          },
          polylineOptions: {
            fillColor: '#563d7c',
            fillOpacity: 0.5,
            strokeWeight: 2,
            clickable: false,
            editable: true,
            zIndex: 1
          },
          rectangleOptions: {
            fillColor: '#563d7c',
            fillOpacity: 0.5,
            strokeWeight: 1,
            clickable: false,
            editable: true,
            zIndex: 1
          },
          polygonOptions: {
            fillColor: '#563d7c',
            fillOpacity: 0.5,
            strokeWeight: 1,
            clickable: false,
            editable: true,
            zIndex: 1
          }
        });
        drawingManager.setMap(null);
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
    </body>
</html>