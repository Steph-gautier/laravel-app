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
                  <form method="post" action="{{url('newsletter')}}">
                  <div class="input-group">
                      <input type="email" name="email" class="form-control in-custom" placeholder="Your email address please..." aria-label="Your email address please..." >
                      <div class="input-group-append">
                          <button class="btn btn-outline-primary btn-news" type="submit" id="button-addon2"><i class="fa fa-envelope"></i>  Subscribe</button>
                      </div>
                  </div>
                  </form>
        </div>
      <div class="col-lg-3 mix">
        Powered by : <img src="{{ url('/img/enfin.png')}}" style="width:120px"/>
      </div>
  </div>
</footer> 