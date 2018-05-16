<?php $this->load->view('header'); ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img alt="brand" src="<?php echo base_url(); ?>/img/fireflycoin.png" />Firefly Coin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
          <i class="fa fa-times"></i>
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

<header class="masthead mobile-panel">
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
                    <label class="has-float-label">
                      <input id="user_email" name="user_email" type="email" placeholder="email@example.com" required/>
                      <span>Email Address</span>
                    </label>
                    <label class="has-float-label">
                      <input type="password"  id="user_password" name="user_password" placeholder="••••••••" pattern=".{8,30}" required/>
                      <span>Password</span>
                    </label>

                    <input class="btn btn-outline btn-xl text-center" type="submit" value="login" name="login" >
                  </form>
                  <center>Not registered?<br><a href="<?php echo base_url('user/register'); ?>">Register here</a></center>
              </div>
          </div>
        </div>
      </div>
    </header>
<?php $this->load->view('footer'); ?>
