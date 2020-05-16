
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
                    <a class="fas fa-lock lock" data-placement ="bottom" data-toggle = "tooltip" title = "Lock a specific vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class="fa fa-power-off stop" data-placement ="bottom" data-toggle = "tooltip" title = "Stop a specific vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class="fa fa-map-marker check" data-placement ="bottom" data-toggle = "tooltip" title = "Check position of a given vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class ="far fa-dot-circle restrict" id="draw_circle" data-placement ="bottom" data-toggle = "tooltip" title = "Draw a circle and restrict a specific vehicle" href="#"></a>
                    </li>
                    <li class="menu-item">
                    <a class="fas fa-draw-polygon plan" data-placement ="bottom" data-toggle = "tooltip" title = "Draw a polygon and restrict a specific vehicle" href="#"></a>
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