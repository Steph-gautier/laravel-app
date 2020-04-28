<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header-links-home')
        <link rel="stylesheet" href="{{ url('/css/setings.css') }}">
</head>
    <body>
        @include('layouts.components.navbar')

        @include('layouts.components.sidebar')


        <div class="container body1">
<div class="row">
        <div class="col-lg-8">
           <div class="card z-depth-3">
            <div class="card-body">
            <ul class="nav nav-pills nav-pills-primary nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Tracking History</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active show" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Genearal Informations</h6>
                            <p>
                                Email address
                            </p>
                            <h6>Owner of (00)Vehicles</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Current Pricing Plan</h6>
                            <a href="javascript:void();" class="badge badge-primary">STANDARD</a>
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
    			   <button type="button" class="close" data-dismiss="alert">×</button>
				    <div class="alert-icon">
					 <i class="icon-info"></i>
				    </div>
				    <div class="alert-message">
				      <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
				    </div>
                  </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                    <div class="text-center">
                        <button class="btn btn-success" style="text-align:center"><i class="fa fa-download"></i> Download PDF</button>
                    </div>             
                </div>
                <div class="tab-pane" id="edit">
                    <form>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Mark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Jhonsan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="mark@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Website</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="State">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="jhonsanmark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
      <div class="col-lg-4">
           <div class="profile-card-4 z-depth-3">
            <div class="card">
              <div class="card-body text-center bg-primary rounded-top">
               <div class="user-box">
                <img src="{{ url('img/user.jpg')}}" alt="user avatar">
              </div>
              <h5 class="mb-1 text-white">{{ ucfirst(Auth()->user()->name) }}</h5>
              <h6 class="text-light">UI/UX Engineer</h6>
             </div>
              <div class="card-body">
                <ul class="list-group shadow-none">
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-phone-square"></i>
                  </div>
                  <div class="list-details">
                    <span>+237 6******21</span>
                    <small>Mobile Number</small>
                 </div>
                    <div class="custom-control custom-switch">
                        <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="list-details">
                    <span>info@example.com</span>
                    <small>Email Address</small>
                  </div>
                  <div class="custom-control custom-switch">
                        <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-car"></i>
                  </div>
                  <div class="list-details">
                    <span>Number of vehicle</span>
                    <small><b>0 </b>registered</small>
                  </div>
                </li>
                </ul>
                <div class="row text-center mt-4">
                  <div class="col p-2">
                   <h4 class="mb-1 line-height-5">154</h4>
                    <small class="mb-0 font-weight-bold">Actions</small>
                   </div>
                    <div class="col p-2">
                      <h4 class="mb-1 line-height-5">7</h4>
                     <small class="mb-0 font-weight-bold">Transactions</small>
                    </div>
                    <div class="col p-2">
                     <h4 class="mb-1 line-height-5">16</h4>
                     <small class="mb-0 font-weight-bold">Messages</small>
                    </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
        
    </div>
</div>

        <a href="/home" class="float" target="_blank">
            <i class="fas fa-route my-float"></i>
        </a>
        @include('auth.footer-newsletter')  
        @include('layouts.components.footer-scripts-home')
        <script>
            $(document).ready(function(){
                $('#navbarSupportedContent ul li').removeClass("active");
                $("#setting").addClass('active');
                $(".page-wrapper").removeClass("toggled");
                $('body').conditionalFields('init');
            });
        </script>
    </body>
</html>