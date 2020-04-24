<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        @include('layouts.components.header')
        <link rel="stylesheet" href="{{ url('/css/vehicle-registration.css') }}">
        <style>
 
        </style>
    </head>
    <body>
    <div class="wave-container" style="position:absolute;z-index:0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4a346b" fill-opacity="1" d="M0,192L21.8,181.3C43.6,171,87,149,131,144C174.5,139,218,149,262,133.3C305.5,117,349,75,393,90.7C436.4,107,480,181,524,197.3C567.3,213,611,171,655,144C698.2,117,742,107,785,138.7C829.1,171,873,245,916,266.7C960,288,1004,256,1047,234.7C1090.9,213,1135,203,1178,197.3C1221.8,192,1265,192,1309,202.7C1352.7,213,1396,235,1418,245.3L1440,256L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
        </svg>
    </div>
        <!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>(Premium Plan) ADD A NEW CAR</strong></h2>
                <p>Fill this form it is almost finished :)</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Vehicle Parameters</strong></li>
                                <li id="personal"><strong>Device Parameters</strong></li>
                                <li id="payment"><strong>Payment Transaction</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Vehicle Information</h2><br/> <input type="text" name="brand" placeholder="Brand name of the vehicle. e.g Toyota, Renault, Suziki,..." /> <input type="text" name="uname" placeholder="Version or model of your vehicle. e.g: Toyota Avensis 2002" /> <input type="text" name="matriculatNbr" placeholder="Enter your matriculation number." /> <input type="text" name="color" placeholder="Which color your vehicle have?" />
                                </div> <input type="button" name="next" class="next action-button btn btn-primary" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Device Information</h2><span>Take your device and fill all the corresponding fields here...<br/></span> <input type="text" name="fname" placeholder="Device ID: (Notice: read behind your device)" /> <input type="text" name="pricing" value="STANDARD" /> <input type="text" name="phno" placeholder="This is car is owned by... (eg:a company, a particular)" /> <input type="text" name="phno_2" placeholder="A Contact phone number just in case..." />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Method</h2>
                                    <div class="radio-group">
                                       <div class='radio' data-value="mtn"><img src="{{ url('img/mtn.jpg')}}" width="100px" height="100px" style="border-radius: 10px;"></div>
                                        <div class='radio' data-value="orange"><img src="{{ url('img/orang.png')}}" width="100px" height="100px" style="border-radius: 10px;"></div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        @include('layouts.components.footer-scripts')
        <script src="{{ url('/js/vehicle-registration.js') }}"></script>
</body>   
</html> 