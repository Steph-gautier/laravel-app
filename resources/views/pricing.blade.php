<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/pricing-table.css') }}">
        <style>
        .transition {
        position:absolute;
        top:0;
        height:100%;
        width:1%;
        background:#563d7c;
        transform: skewX(0deg) translateX(-50px);
        transition:2s all ease-in-out;
        -webkit-transition:2s all ease-in-out;
        }

.content {
  position:relative;
  padding:200px 0 0 200px;
  color:#000;
  z-index:10;
  height:300px;
}

.anim-trans {
  animation: anim 4s ease-in-out;
  }

@keyframes anim{
     0% { }
     20%  { z-index:11;\transform: skewX(5deg) translateX(-100%); }
     40%   { transform: skewX(0deg) translateX(0);
 width:100%; z-index:11; box-shadow: 10px 10px 5px #eaeaea;}
     60%   { transform: skewX(3deg) translateX(0);
 width:100%;z-index:11; box-shadow: 10px 10px 5px #eaeaea;}
     80%   { transform: skewX(1deg) translateX(-100%);
 width:60%;z-index:11; box-shadow: 10px 10px 5px #eaeaea;}
     100%   { transform: skewX(-5deg) translateX(-50px);
 width:1%;z-index:1; box-shadow: none;}
}
        </style>
</head>
    <body>
        @include('layouts.components.navbar')
        <div class="transition"></div>
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
                                    <a href="#" class="cta">Sign Up</a>
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
                                    <a href="/pricing/std/add-vehicle">Sign Up</a>
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
                                    <a href="/pricing/premium/add-vehicle">Sign Up</a>
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
        @include('auth.footer-newsletter')  
        @include('layouts.components.footer-scripts-home')
        <script>
            $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#pricing").addClass('active');
                $(".page-wrapper").removeClass("toggled");
                $( ".cta" ).click(function() {
                    $( ".transition").toggleClass( "anim-trans" );
                    setTimeout(function(){
                        window.location.replace("/pricing/trial/add-vehicle");
                    },700);
                });
            });
        </script>
    </body>
</html>