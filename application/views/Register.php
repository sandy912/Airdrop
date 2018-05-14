<?php $this->load->view('header'); ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img alt="brand" src="<?php echo base_url(); ?>/img/fireflycoin.png" />Firefly Coin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/Airdrop/#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#buynow">Buy Now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<header class="masthead mobile-panel">
      <div class="container">
        <div class="row">
              <div class="register-panel">
                  <div class="panel-heading">
                      <h3 class="panel-title"><center>Register</center></h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                            <div class="js-float-label-wrapper">
                                <label for="user_name">Name</label>
                                <input id="user_name" name="user_name" type="text" required>
                            </div>
                            <div class="js-float-label-wrapper">
                                <label for="user_email">Email Address</label>
                                <input id="user_email" name="user_email" type="email" required title="Invalid Email">
                            </div>
                              <div class="js-float-label-wrapper">
                                  <label for="user_id">Telegram Username</label>
                                  <input id="user_id" name="user_id" type="text" required>
                              </div>
                              <div>
                                You must follow <a href="https:\\t.me\BlocksToken">Blocks Token</a> on Telegram and stay untill airdrop to receive coins.<br />
                              </div>

                              <div class="js-float-label-wrapper">
                                  <label for="user_twitter">Twitter Username</label>
                                  <input id="user_twitter" name="user_id" type="text" required>
                              </div>
                              <div>
                                You must follow <a href="#">Blocks Token</a> on Twitter and retweet pinned post to receive +100 coins.<br />
                              </div>
                              <div class="js-float-label-wrapper">
                                  <label for="user_facebook">Facebook profile url</label>
                                  <input id="user_facebook" name="user_id" type="text" required>
                              </div>
                              <div>
                                You must Like <a href="#">Blocks Token</a> Page on Facebook and share latest post receive +100 coins.<br />
                              </div>

                              <div class="js-float-label-wrapper">
                                  <label for="user_password">Password</label>
                                  <input id="user_password" name="user_password" type="password" pattern=".{8,30}" required title="Password too short">
                              </div>

                              <input class="btn btn-outline btn-xl text-center" type="submit" value="Register" name="register" >
                      </form>
                      <center><b>Already registered ?</b> <br><a href="<?php echo base_url('user/login'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
        </div>
      </div>
    </header>
<?php $this->load->view('footer'); ?>
