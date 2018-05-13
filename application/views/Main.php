<?php $this->load->view('header'); ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img alt="brand" src="<?php echo base_url(); ?>/img/fireflycoin.png" />Firefly Coin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<header class="masthead">
      <div class="container">
        <div class="row">
            <div class="header-content container-one">
              <h1 class="mb-5">Firefly brings blockchain to the masses. Simple, Easy, day to day micro payments at your finger tips!</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger text-center">Go to Airdrop</a>
            </div>
            <div id="DateCountdown" data-date="2018-06-25 00:00:00" style="width:80%;">
          </div>
        </div>
      </div>
    </header>



<section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Unlimited Features, Seamless Experience!</h2>
          <p class="text-muted">Check out what firefly app lets you to do.</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-energy text-primary"></i>
                    <h3>Fast Payments</h3>
                    <p class="text-muted">Confirm payments in less than 15 seconds. Rated at 10k tps.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-wallet text-primary"></i>
                    <h3>Safe and Secure</h3>
                    <p class="text-muted">Coins stored in mobile wallets are safe and immune to attacks.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-user text-primary"></i>
                    <h3>Unique ID</h3>
                    <p class="text-muted">Unique ID lets you to choose a readable name for your public key.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-organization text-primary"></i>
                    <h3>Smart Contracts</h3>
                    <p class="text-muted">Create smart contract yourself for recurring and split payments.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="download bg-primary text-center" id="download">
          <div class="container">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <h2 class="section-heading">Discover all the buzz about Firefly yourself!</h2>
                <p>Our new app will be  available on Play store and App store soon!</p>
                <div class="badges">
                  <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                  <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
</section>
<section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Start using crypto for daily payments.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Start Free!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

<section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

<footer>
      <div class="container">
        <p>&copy; Firefly Coin &copy; 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
<?php $this->load->view('footer'); ?>
