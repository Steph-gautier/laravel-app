
            <div id="map"></div>
            <div class="toast" style="position: absolute; top: 60%; right: 0; z-index:1000" role="alert" data-autohide="false"  aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="{{ url('img/network.png')}}" style="width:14px"/>
                    <strong class="mr-auto">WE-CameroonGPS</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Please select a vehicle and start drawing
                </div>
            </div>
            <div class="">
                <nav class="menu">
                        <input class="menu-toggler" type="checkbox">
                        <label for="menu-toggler"></label>  
                        <div class="fake-toggler"></div>
                        <!--<button class="btn btn-primary switch-vehicle"> </button>-->
                <ul>
                    <li class="menu-item">
                    <a class="fas fa-crosshairs geolo" id="geolocate" data-placement ="bottom" data-toggle = "tooltip" title = "Check your location" href="#"></a>
                    </li>
                    <li class="menu-item lock">
                    <a class="fas fa-lock lock" id="lock_btn" data-placement ="bottom" data-toggle = "tooltip" title = "Lock a specific vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class="fa fa-power-off stop" id="stop_btn" data-placement ="bottom" data-toggle = "tooltip" title = "Stop a specific vehicle" href="#"></a>
                    <input type="hidden" id="lock_command" value="WE_LOCK"/><input type="hidden" id="device_id" value="1"/>
                    </li>
                    <li class="menu-item">
                    <a class="fa fa-map-marker check" data-placement ="bottom" data-toggle = "tooltip" title = "Check position of a given vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class ="far fa-dot-circle restrict" id="draw_circle" data-placement ="bottom" data-toggle = "tooltip" title = "Draw a circle and restrict a specific vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class="fas fa-draw-polygon plan" id="draw_polygon" data-placement ="bottom" data-toggle = "tooltip" title = "Draw a polygon and restrict a specific vehicle" href="#"></a>
                    </li>
                </ul>
                </nav>
            </div>
            
            <div class="control-centere">
                <ul class="right-sidebare">
                    <li class="history"><i class="fa fa-forward"></i></li>
                    <li class="history"><i class="fa fa-download"></i></li>
                </ul>
                <div class="option-btne"></div>
                <ul class="left-sidebare">
                    <li class="history"><i class="fa fa-stop"></i></li>
                    <li class="history"><i class="fa fa-backward"></i></li>
                </ul>
            </div>

            <div id="shape_drawing" class="row drawing-properties">
                <div class="col-lg-4 offset-4 card">
                    <div class="card-body text-center">
                    <h6>Drawing Informations</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="btn btn-secondary input-group-text"><i class="fa fa-adjust"></i></span>
                            </div>
                            <input type="text" id="area_field" class="form-control" placeholder="Area" aria-label="Area" aria-describedby="basic-addon1">
                            </div>
                        </div>
                </div>
            </div>