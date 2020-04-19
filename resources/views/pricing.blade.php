<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/pricing-table.css') }}">
</head>
    <body>
        @include('layouts.components.navbar')

        @include('layouts.components.sidebar')
        <main class="page-content">
        <div class="container-fluid">
         <div class="demo">
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <h3 class="title white">Beginner</h3>
                                </div>
                                <ul class="pricing-content">
                                    <li class="purple"><i class="fa fa-car fapp"></i> Maximum vehicle</li>
                                    <li class="purple"><i class="fas fa-microchip fapp"></i> Monitoring of the vehicle</li>
                                    <li class="purple disable"><i class="fas fa-crosshairs fapp"></i> Tracking of the vehicle</li>
                                    <li class="purple disable"><i class="fas fa-draw-polygon fapp"></i> Restrict area function</li>
                                    <li class="purple disable"><i class="fas fa-headset fapp"></i> Full assistance</li>
                                </ul>
                                <div class="price-value">
                                    <span class="price-title">Price <b>From</b></span>
                                    <span class="price-amount"> <h4>FREE</h4> <span class="duration">1<sup>st</sup> month</span></span>
                                </div>
                                <div class="pricingTable-signup">
                                    <a href="#">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <h3 class="title white">STANDARD</h3>
                                </div>
                                <ul class="pricing-content">
                                    <li class="green"><i class="fa fa-car fapp"></i> Maximum vehicle</li>
                                    <li class="green"><i class="fas fa-microchip fapp"></i> Monitoring of the vehicle</li>
                                    <li class="green"><i class="fas fa-crosshairs fapp"></i> Tracking of the vehicle</li>
                                    <li class="green disable"><i class="fas fa-draw-polygon fapp"></i> Restrict area function</li>
                                    <li class="green disable"><i class="fas fa-headset fapp"></i> Full assistance</li>
                                </ul>
                                <div class="price-value">
                                    <span class="price-title">Price <b>From</b></span>
                                    <span class="price-amount"><h5>5.000<small style="font-size:10px">XAF</small></h5><span class="duration">monthly</span></span>
                                </div>
                                <div class="pricingTable-signup">
                                    <a href="#">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable pink">
                                <div class="pricingTable-header">
                                    <h3 class="title white">PREMIUM</h3>
                                </div>
                                <ul class="pricing-content">
                                    <li class="premium"><i class="fa fa-car fapp"></i> Maximum vehicle</li>
                                    <li class="premium"><i class="fas fa-microchip fapp"></i> Monitoring of the vehicle</li>
                                    <li class="premium"><i class="fas fa-crosshairs fapp"></i> Tracking of the vehicle</li>
                                    <li class="premium"><i class="fas fa-draw-polygon fapp"></i> Restrict area function</li>
                                    <li class="premium"><i class="fas fa-headset fapp"></i> Full assistance</li>
                                </ul>
                                <div class="price-value">
                                    <span class="price-title">Price <b>From</b></span>
                                    <span class="price-amount"> <h5>8.000<small style="font-size:10px">XAF</small></h5><span class="duration">monthly</span></span>
                                </div>
                                <div class="pricingTable-signup">
                                    <a href="#">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>  
</main>
<a href="/home" class="float" target="_blank">
<i class="fas fa-route my-float"></i>
</a>
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
                $("#pricing").addClass('active');
                $(".page-wrapper").removeClass("toggled");
            });
        </script>
    </body>
</html>