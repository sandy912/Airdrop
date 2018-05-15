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
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
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

<header class="masthead">
      <div class="container">
        <div class="row">
          <div class="register-panel">
              <div class="panel-heading">
                  <h3 class="panel-title"><center>Login</center></h3>
              </div>
              <?php
            $success_msg= $this->session->flashdata('success_msg');
            $error_msg= $this->session->flashdata('error_msg');

                if($success_msg){
                  ?>
                  <div class="alert alert-success">
                    <?php echo $success_msg; ?>
                  </div>
                <?php
                }
                if($error_msg){
                  ?>
                  <div class="alert alert-danger">
                    <?php echo $error_msg; ?>
                  </div>
                  <?php
                }
                ?>

              <div class="panel-body">
                  <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                         <div class="js-float-label-wrapper">
                           <label for="user_email">Email Address</label>
                              <input name="user_email" type="email" data-validation="email">
                          </div>
                          <div class="js-float-label-wrapper">
                            <label for="user_password">Password</label>
                              <input name="user_password" type="password">
                          </div>

                          <input class="btn btn-outline btn-xl text-center" type="submit" value="login" name="login" >
                  </form>
                  <center><b>Not registered ?</b> <br><a href="<?php echo base_url('user/register'); ?>">Register here</a></center><!--for centered text-->

              </div>
          </div>
        </div>
      </div>
    </header>
<?php $this->load->view('footer'); ?>
