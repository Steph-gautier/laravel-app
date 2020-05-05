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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBimtX2LxnwbpowGkJhFGAtkVTsYAdNcsM&callback=initMap&libraries=drawing"></script>
    <script>
    var marker;
    function initMap() {
        // The location of Africa
        var africa = {lat: 7.3644, lng: 12.3436};
        var map = new google.maps.Map(
            document.getElementById('map'),
             {zoom: 4, center: africa});
      
       var image ="{{ url('/img/mapmarker2.png')}}";
       var drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.MARKER,
          drawingControl: false,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
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
        drawingManager.setMap(map);
      }
       /*marker = new google.maps.Marker(
          {
            position: africa,
            map: map,
            draggable:true,
            icon: image,
            title: "My vehicle",
            animation: google.maps.Animation.DROP
           }
           );

           marker.addListener('click', toggleBounce);

        }
        function toggleBounce() {
          if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
          } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
          }
        }*/


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