<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GPS-Cameroon</title>
        @include('layouts.components.header')
        <link rel="stylesheet" href="{{ url('/css/vehicle-registration.css') }}">
        <style>
.modal-color{
    background-color:#563d7c;
    color:white;
}
        </style>
    </head>
    <body class="background-register-car">
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
            <div class="btn btn-primary" id="plan-section">BEGINNER PLAN</div>
                <h2><strong>ADD A NEW CAR</strong></h2>
                <p>Fill this form it is almost finished :)</p>
                <div class="alert alert-success" style="display:none"></div>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <div id="msform" novalidate="">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Vehicle Parameters</strong></li>
                                <li id="personal"><strong>Device Parameters</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                                <li id="gift"><strong>Claim your Gift</strong></li>
                            </ul> <!-- fieldsets -->
                            <form method="POST" id="vehicle_upload" enctype = "multipart/form-data">
                                <div class="form-card">
                                    <h2 class="fs-title">Vehicle Information</h2><br/>
                                    {{ csrf_field()}} 
                                    <span id="default-upload" class="btn btn-default"><i class="fa fa-upload"></i> Upload Image</span>
                                    <hr/>
                                   <div class="wrapper"> 
                                    <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="input-group image-preview">
                                        <span class="input-group-btn" style="width:100%">
                                            <div class="btn btn-info image-preview-input" style="border-top-left-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
                                                <span class="fa fa-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" class="image-upload" required id="vehicle_image" accept="image/png, image/jpeg" name="vehicle_image"/>
                                            </div>
                                            <button type="button" class="btn btn-danger image-preview-clear" style="display:none;">
                                                <span class="fa fa-trash"></span> Clear
                                            </button>
                                            <div class="btn btn-primary" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-right-radius:0px;float:right">
                                                <span class="fa fa-check"></span>
                                                <span class="">Detect</span>
                                            </div>
                                        </span>
                                    </div>
                                    </div>
                                </div>
                                <br/>
                                    <div class="form-group">  
                                        <input id="brandname" name="brandname" class="form-control @error('brandname') is-invalid @enderror" type="text" placeholder="Brand name of the vehicle. e.g Toyota, Renault, Suziki,..." value="{{ old('brandname') }}" required/>
                                        @error('brandname')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">  
                                        <input id="version" required class="form-control @error('version') is-invalid @enderror" type="text" name="version" placeholder="Version or model of your vehicle. e.g: Toyota Avensis 2002" value="{{ old('version') }}"/>
                                        @error('version')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">  
                                        <input id="matriculationNbr" required class="form-control @error('matriculationNbr') is-invalid @enderror" type="text" name="matriculationNbr" placeholder="Enter your matriculation number." value="{{ old('matriculationNbr') }}"/>
                                        @error('matriculationNbr')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">    
                                        <input id="color" required class="form-control @error('color') is-invalid @enderror" type="text" name="color" placeholder="Which color your vehicle have?" value="{{ old('color') }}"/>
                                        @error('color')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>    
                                    <div id="progression" class="progress" style="display:none">
                                        <div id="progressive" class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                        <div class="percent">0%</div>
                                    </div><br/>
                                    <div class="alert" id="message_upload" style="display:none"></div><br/>
                                </div> 
                              <button type="submit" name="next" class="nexter action-button btn btn-primary" id="add-trial">Next Step <i class="fa fa-arrow-right"></i></button>
                            </form>
                            <form>
                                <div class="form-card">
                                    <h2 class="fs-title">Device Information</h2><span>Take your device and fill all the corresponding fields here...<br/></span> 
                                    <input id="deviceID" type="text" name="deviceId" placeholder="Device ID: (Notice: read behind your device)" />
                                     <input id="subscribedPlan" type="text" name="subscribedPlan" value="BEGINNER" />
                                      <input id="owner" type="text" name="owner" placeholder="This is car is owned by... (eg:a company, a particular)" />
                                       <input id="speed" type="text" name="addedvia" placeholder="A Contact phone number just in case..." />
                                </div> 
                                    <button type="button" name="previous" class="previous action-button-previous"><i class="fa fa-arrow-left"></i> Previous Step </button>
                                    <button type="submit" name="next" id="validate_device" class="action-button">Next Step <i class="fa fa-arrow-right"></i></button>
                                </form>
                                <form>
                                <div class="form-card">
                                    <h2 class="fs-title">Registration is a success!</h2>
                                    <p>You successfully added the vehicle:</p>

                                </div> <button name="make_payment" class="action-button" ><i class="fa fa-gift"> Special Gift</i></button>
                                <button type="button" >Shortcut</button>
                                </form>
                                <form>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Invite Your Friends!</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="text-center">
                                            <p>Invite a friend and claim <b >+1</b> hour bonus per friend:</p>
                                        </div><br/>
                                        <input type="email" name="invite" placeholder="Enter The Email address of your friend"/><button class="btn btn-outline-primary">Invite Now!</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade " id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body modal-color">
        <div class="text-center text-light">
            <div class="spinner-border" role="status" style="width: 4rem; height: 4rem;">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
            <h4 align="center">Verifying Informations...</h4><br/><br/>
        </div>
        </div>
    </div>
</div>



        <script src="{{ url('/js/popper.js') }}" ></script>
        @include('layouts.components.footer-scripts')
        <script src="{{ url('/js/vehicle-registration.js') }}"></script>
        <script src="{{ url('/js/forms/forms.js') }}"></script>
        <script>
        function initImageUpload(box) {
                let uploadField = box.querySelector('.image-upload');

                uploadField.addEventListener('change', getFile);

                function getFile(e){
                    let file = e.currentTarget.files[0];
                    checkType(file);
                }
                
                function previewImage(file){
                    let thumb = box.querySelector('.js--image-preview'),
                        reader = new FileReader();

                    reader.onload = function() {
                    thumb.style.backgroundImage = 'url(' + reader.result + ')';
                    $(".image-preview-clear").show();
                    
                    }
                    reader.readAsDataURL(file);
                    thumb.className += ' js--no-default';
                    $('.image-preview-clear').click(function(){
                        thumb.style.backgroundImage = 'url()';
                        $(".image-preview-clear").hide();
                    }); 
                }

                function checkType(file){
                    let imageType = /image.*/;
                    if (!file.type.match(imageType)) {
                    throw 'Wrong file name';
                    } else if (!file){
                    throw 'Wrong file extension';
                    } else {
                    previewImage(file);
                    }
                }
                
                }


                // initialize box-scope
                var boxes = document.querySelectorAll('.box');

                for (let i = 0; i < boxes.length; i++) {
                let box = boxes[i];
                initDropEffect(box);
                initImageUpload(box);
                }


                /// drop-effect
                function initDropEffect(box){
                let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
                
                // get clickable area for drop effect
                area = box.querySelector('.js--image-preview');
                area.addEventListener('click', fireRipple);
                
                function fireRipple(e){
                    area = e.currentTarget
                    // create drop
                    if(!drop){
                    drop = document.createElement('span');
                    drop.className = 'drop';
                    this.appendChild(drop);
                    }
                    // reset animate class
                    drop.className = 'drop';
                    
                    // calculate dimensions of area (longest side)
                    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
                    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
                    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

                    // set drop dimensions to fill area
                    drop.style.width = maxDistance + 'px';
                    drop.style.height = maxDistance + 'px';
                    
                    // calculate dimensions of drop
                    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
                    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
                    
                    // calculate relative coordinates of click
                    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
                    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
                    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
                    
                    // position drop and animate
                    drop.style.top = y + 'px';
                    drop.style.left = x + 'px';
                    drop.className += ' animate';
                    e.stopPropagation();
                    
                }
}
        jQuery(document).ready(function(){
            $('#default-upload').click(function() {
                $('#vehicle_image').click();
            });
            //VALIDATE FIRST STEP
            jQuery('#vehicle_upload').on('submit',function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var token = $("input[name='_token']").val();
                var form_data = new FormData(this);
                $.ajax({
                    url: "{{ url('/add-trial') }}",
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    cache: false,
                    type: 'POST',
                    data: form_data,
                    xhr: function(){
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt){
                            if(evt.lengthComputable){
                                var percentComplete = ((evt.loaded / evt.total) * 100);
                                $('#progressive').width(percentComplete + '%');
                                $('.percent').html(percentComplete + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    error: function(){
                        console.log("File upload failed, please try again");
                    },
                    beforeSend: function(){
                        $('#progression').css('display', 'block');
                        $('#progressive').width('0%');
                        //console.log(form_data.get('brandname'));
                    },
                    success: function(data){
                            $('#message_upload').css('display', 'block');
                            $('#message_upload').html(data.message);
                            $('#message_upload').addClass(data.class_name);
                            $('#status_upload').css('display', 'block');
                            $('#status_upload').html(data.status);
                            if(data.class_name == 'alert-success'){
                                $('#add-trial').addClass('next');
                                $('.next').click();
                            }
                            
                        },
                    });
            });
            //VALIDATE SECOND STEP
            jQuery('#validate_device').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "{{ url('/device-infos') }}",
                    type: 'POST',
                    data: {
                        _token:token,
                        deviceID: jQuery('#deviceID').val(),
                        speed: jQuery('#speed').val(),
                    },
                    success: function(result){
                    console.log(result);
                    },
                });
            });
        });
    </script>    
</body>   
</html> 