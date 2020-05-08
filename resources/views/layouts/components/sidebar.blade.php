<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-primary" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
      </div>
      <div class="sidebar-header">
      <br/>
        <div id="close-sidebar" style="float:right">
          <i class="fas fa-times"></i>
        </div>
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="{{ url('img/user.jpg')}}"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>{{ ucfirst(Auth()->user()->name) }}</strong>
          </span>
          <span class="user-role">Owner of vehicle (0)</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
                <a role="button" href="/pricing/verification/availability" class="btn btn-info"><i class="fa fa-plus" style="font-size:8px"></i><i class="fas fa-car-side"></i> Add a new vehicle?</a>

        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Current Vehicle</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <h6 class="sub-menu-sidebar">Vehicle State  <span style="float:right" class="badge badge-pill badge-success">Real Time</span></h6>
                <li>
                  <a href="#">Speed (Km/h) : <b>50</b>
                  </a>
                </li>
                <li>
                  <a href="#">Geo Fence (m): <b>40</b></a>
                </li>
                <li>
                  <a href="#">Device battery (%): <b>40</b></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fab fa-mastodon"></i>
              <span>Vehicle Manager</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Renault Clio

                  </a>
                </li>
                <li>
                  <a href="#">Toyota Avensis</a>
                </li>
                <li>
                  <a href="#">Mercedes ML450</a>
                </li>
                <li>
                  <a href="#">More...</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="">
            <a href="/pricing">
              <i class="far fa-gem"></i>
              <span>Pricing Table</span>
            </a>
          </li>
          <li>
            <a href="home/history">
              <i class="fa fa-chart-line"></i>
              <span>Tracking History</span>
            </a>
          </li>  
          <li>
            <a href="/home/transactions">
              <i class="fa fa-dollar-sign"></i>
              <span>Transactions</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="/support">
              <i class="fas fa-headset"></i>
              <span>Live Support</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="/settings">
              <i class="fa fa-user"></i>
              <span>Account informations</span>
            </a>
          </li>
          <li>
            <a href="/support#about">
              <i class="fa fa-building"></i>
              <span>About Us</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell white"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="home/transactions">
        <i class="fa fa-envelope white"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog white"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off white"></i>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
      </form>
    </div>
  </nav>
  <!-- page-content" -->
</div>