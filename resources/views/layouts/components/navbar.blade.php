<nav class="navbar navbar-expand-lg navbar-mainbg bg-primary nav-style fixed-top">
        <a class="navbar-brand navbar-logo" href="#"><h6> Cameroon GPS</h6></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li id="dashboard" class="nav-item active">
                    <a class="nav-link" href="/home"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li id="manager" class="nav-item">
                    <a class="nav-link" href="/vehicle-manager"><i class="fab fa-mastodon"></i>Vehicle Manager</a>
                </li>
                <li id="pricing" class="nav-item">
                    <a class="nav-link" href="/pricing"><i class="far fa-clone"></i>Pricing</a>
                </li>
                <li id="more" class="nav-item">
                    <a class="nav-link" href="/support"><i class="fas fa-headset"></i>Support</a>
                </li>
                <li id="setting" class="nav-item">
                    <a class="nav-link" href="/setting"><i class="fa fa-cog"></i>Settings</a>
                </li>
                <li class="nav-item" style="width:100px;">
                    
                </li>
               <div class="user-menu-infos">
                   
                  <a href="javascript:void(0);" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                    <div class="profile">
                        <img class="profile-picture" src="{{ url('img/user.jpg')}}" />
                        <b style="padding-left:7px; color:white">{{ ucfirst(Auth()->user()->name) }}</b>
                    </div>
                  </a>  
                </div>
            </ul>

    </nav>