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

  <footer class="footer-all">
  <svg style="z-index:0;position:absolute;height:400px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#563d7c" fill-opacity="1" d="M0,0L30,32C60,64,120,128,180,170.7C240,213,300,235,360,208C420,181,480,107,540,117.3C600,128,660,224,720,250.7C780,277,840,235,900,218.7C960,203,1020,213,1080,234.7C1140,256,1200,288,1260,293.3C1320,299,1380,277,1410,266.7L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
  </svg>

  <div class="row footer-core">
      <div class="col-lg-3" style="text-align:center">
        <img src="{{ url('/img/business.png')}}" class="img-footer">
        <p style="color:white;font-size:11px">Grow quickly your company by installing our device</p>
        <button class="btn btn-info">Contact us</button>
      </div>
      <div class="col-lg-6" id="sub-btn" style="text-align:center">
                  <h4>Keep me updated!</h4>
                  <div class="input-group">
                      <input type="text" class="form-control in-custom" placeholder="Your email address please..." aria-label="Your email address please..." >
                      <div class="input-group-append">
                          <button class="btn btn-outline-primary btn-news" type="button" id="button-addon2"><i class="fa fa-envelope"></i>  Subscribe</button>
                      </div>
                  </div>
        </div>
      <div class="col-lg-3 mix">
        Powered by : <img src="{{ url('/img/enfin.png')}}" style="width:120px"/>
      </div>
  </div>
</footer>       
    @include('layouts.components.footer-scripts-home')
    <script>
    $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#dashboard").addClass('active');
            });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBimtX2LxnwbpowGkJhFGAtkVTsYAdNcsM&callback=initMap"></script>
    <script>
            function initMap() {
        // The location of Africa
        var africa = {lat: 17.244, lng: 22.036};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: africa});

        var marker = new google.maps.Marker({position: africa, map: map});

        }
        var infoWindow;
        function geolocalize(){
        infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
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