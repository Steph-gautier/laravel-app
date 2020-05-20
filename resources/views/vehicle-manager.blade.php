<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/vehicle-dashboard/kendo.default-v2.min.css') }}">
        <link rel="stylesheet" href="{{ url('/css/vehicle-dashboard/style-for-it.css') }}">
        <link rel="stylesheet" href="{{ url('/css/countdown/flipdown/flipdown.css') }}">
        <link rel="stylesheet" href="{{ url('/css/countdown/main.css') }}">
        <link rel="stylesheet" href="{{ url('/css/stacked-cards.css') }}">
<style>

</style>
</head>
    <body>
        @include('layouts.components.navbar')

        @include('layouts.components.sidebar')
        <main class="page-content">
        <div class="container-fluid" style="margin-top:6%">
    
              <div class="row states">
                      <div class="col-lg-3">
                        <h2 class="purple">Vehicle Dashboard </h2> 
                        <div class="battery onscreen">
    <div class="bubbles battery-bubbles">
        <span>&nbsp;</span>
    </div>
    <div class="liquid liquid-bg-color">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="5px" viewBox="0 0 300 5" enable-background="new 0 0 300 5" xml:space="preserve">
            <path fill="#00fa57" class="wave" d="M300,300V2.5c0,0-0.6-0.1-1.1-0.1c0,0-25.5-2.3-40.5-2.4c-15,0-40.6,2.4-40.6,2.4
            c-12.3,1.1-30.3,1.8-31.9,1.9c-2-0.1-19.7-0.8-32-1.9c0,0-25.8-2.3-40.8-2.4c-15,0-40.8,2.4-40.8,2.4c-12.3,1.1-30.4,1.8-32,1.9
            c-2-0.1-20-0.8-32.2-1.9c0,0-3.1-0.3-8.1-0.7V300H300z" />
        </svg>
    </div><!-- .liquid -->
</div>
<div class="battery-text onscreen">
    <span class="percentage"></span><small class="units"></small>
</div>
</div>
                      <div class="col-lg-5">                          
                          <div id="gauge-container" class="hidden-on-narrow">
                              <div id="rpm"></div>
                              <div id="kmh"></div>
                              <div id="fuel"></div>
                          </div>
                        <div class="text-center" style="padding-left:10%">
                           <div id="flipdown" class="flipdown"></div>
                        </div>
                      </div>
                  </div>
                  <div class="stage">
                <h3><div class="title">Select your current vehicle</div></h3>
                    <div id="stacked-cards-block" class="stackedcards stackedcards--animatable init">
                      <div class="stackedcards-container">
                        <div class="card">
                          <div id="card-color" class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle1.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                              <h1>Renault Electric </h1>
                              <h3 class="status-green">is moving..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Current Parameters</div>
                            <div class="popular-destinations-images">
                              <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle2.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                            <h1>Renault Electric </h1>
                              <h3 class="status-green">is moving..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Current Parameters</div>
                            <div class="popular-destinations-images">
                            <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle3.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                            <h1>Renault Electric </h1>
                              <h3 class="status-red">is static..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Current Parameters</div>
                            <div class="popular-destinations-images">
                            <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle4.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                            <h1>Renault Electric </h1>
                              <h3 class="status-green">is moving..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Current Parameters</div>
                            <div class="popular-destinations-images">
                            <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle2.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                            <h1>Renault Electric </h1>
                              <h3 class="status-red">is static..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Current Parameters</div>
                            <div class="popular-destinations-images">
                            <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle6.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                            <h1>Renault Electric </h1>
                              <h3 class="status-green">is moving..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Current Parameters</div>
                            <div class="popular-destinations-images">
                            <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <div class="card-image"><img src="{{ url('/img/vehicles/vehicle4.jpg')}}" width="100%" height="100%"/></div>
                            <div class="card-titles">
                            <h1>Renault Electric </h1>
                              <h3 class="status-green">is moving..</h3>
                            </div>  
                          </div>
                          <div class="card-footer">
                            <div class="popular-destinations-text">Popular <br/> Destinations</div>
                            <div class="popular-destinations-images">
                            <div class="parameters"><div class="circle"><i class="fas fa-tachometer-alt"></i></div><small>18 Km/h</small></div>
                              <div class="parameters"> <div class="circle"><i class="fas fa-route"></i></div><small style="padding-left:8px">75 Km</small></div>
                              <div class="parameters"><div class="circle"><i class="fas fa-user-lock"></i></div><small>Unlocked</small></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="stackedcards--animatable stackedcards-overlay top"><i class="fa fa-check fa-2x purple"></i></div>
                      <div class="stackedcards--animatable stackedcards-overlay right"><i class="fa fa-arrow-right inverse-success"></i></div>
                      <div class="stackedcards--animatable stackedcards-overlay left"><i class="fa fa-arrow-left fa-2x purple"></i></div>
                    </div>
                    <div class="global-actions">
                      <button class="btn left-action"><i class="fa fa-arrow-left fa-2x purple"></i></button>
                      <button class="btn top-action" style="background-color: #28a745;"><i class="fa fa-check inverse-success"></i></button>
                      <button class="btn right-action"><i class="fa fa-arrow-right fa-2x purple"></i></button>
                  </div>
              </div>
              </div>
              

<!--<div class="final-state hidden"><h2>Got it! We received your preferences! <br/> To submit again, press F5.</h2></div>-->
    <div class="row">
    <div class="panel-group container-fluid" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default col-lg-4">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                      <h4 class="panel-title">
                                          <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              General Informations
                                              <img class="accordion-img" src="{{ url('/img/computer.png')}}" style="width:100px">
                                          </a>
                                      </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default col-lg-4">
                                  <div class="panel-heading" role="tab" id="headingTwo">
                                      <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Monitoring Operations
                                              <img class="accordion-img" src="{{ url('/img/autonomous.png')}}" style="width:100px">
                                          </a>
                                      </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="panel-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default col-lg-4">
                                  <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Remaining Time for your plan
                                              <img class="accordion-img" src="{{ url('/img/timer.png')}}" style="width:85px">
                                          </a>
                                      </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="plan-des">
                                              <h3>Standard Plan</h3>
                                              <button class="btn btn-outline-warning">Upgrade</button> 
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
<script src="{{ url('/js/stacked-cards.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#manager").addClass('active');
                $(".page-wrapper").removeClass("toggled");
            });
        </script>
        <script src="{{ url('/js/vehicle-dashboard/kendo.all.min.js') }}"></script>
        <script src="{{ url('/js/vehicle-dashboard/script-for-it.js') }}"></script>
        <script src="{{ url('/js/countdown/flipdown/flipdown.js') }}"></script>
        <script src="{{ url('/js/countdown/main.js') }}"></script>

    </body>
</html>