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

        @include('layouts.components.sidebar')
        <main class="page-content">
        <div class="container-fluid" style="margin-top:6%">
    
              <div class="row">
                      <div class="col-lg-3">
                        <h2 class="purple">Graphical datas </h2> 
                        
                      </div>
                      <div class="col-lg-5">
                          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
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
                              <div class="panel panel-default">
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
                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Remaining Time for your plan
                                              <img class="accordion-img" src="{{ url('/img/timer.png')}}" style="width:85px">
                                          </a>
                                      </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                      <div class="panel-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingFour">
                                      <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                              Current Variables about your vehicle
                                              <img class="accordion-img" src="{{ url('/img/car-variables.png')}}" style="width:120px;padding-left:35px">
                                          </a>
                                      </h4>
                                  </div>
                                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                      <div class="panel-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                      </div>
                                  </div>
                              </div>
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
                      <div class="stackedcards--animatable stackedcards-overlay top"><i class="fa fa-arrow-left fa-2x purple"></i></div>
                      <div class="stackedcards--animatable stackedcards-overlay right"><i class="fa fa-check inverse-success"></i></div>
                      <div class="stackedcards--animatable stackedcards-overlay left"><i class="fa fa-arrow-right fa-2x purple"></i></div>
                    </div>
                    <div class="global-actions">
                      <div class="left-action"><i class="fa fa-arrow-left fa-2x purple"></i></div>
                      <div class="top-action" style="background-color: #28a745;"><i class="fa fa-check inverse-success"></i></div>
                      <div class="right-action"><i class="fa fa-arrow-right fa-2x purple"></i></div>
                  </div>
              </div>
              </div>
              

<div class="final-state hidden"><h2>Got it! We received your preferences! <br/> To submit again, press F5.</h2></div>
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
                $("#manager").addClass('active');
                $(".page-wrapper").removeClass("toggled");
            });
        </script>
    </body>
</html>