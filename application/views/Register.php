<?php $this->load->view('header'); ?>
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success box">
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
                                  <label for="user_id">Telegram Username</label>
                                  <input id="user_id" name="user_id" type="text" required>
                              </div>
                              <div>
                                You must follow <a href="https:\\t.me\BlocksToken">Blocks Token</a> on Telegram and stay untill airdrop to receive tokens.<br />
                              </div>

                              <div class="js-float-label-wrapper">
                                  <label for="user_email">Email Address</label>
                                  <input id="user_email" name="user_email" type="email" required title="Invalid Email">
                              </div>

                              <div class="js-float-label-wrapper">
                                  <label for="user_wallet">ERC-20 Wallet Address</label>
                                  <input id="user_wallet" name="user_wallet" type="text" required pattern="^0x[a-fA-F0-9]{40}$" title="Invalid ERC-20 Address">
                              </div>
                              <div class="js-float-label-wrapper">
                                  <label for="user_password">Password</label>
                                  <input id="user_password" name="user_password" type="password" pattern=".{8,30}" required title="Password too short">
                              </div>

                              <input class="btn-lg btn-block" type="submit" value="Register" name="register" >
                      </form>
                      <center><b>Already registered ?</b> <br><a href="<?php echo base_url('user/login'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php $this->load->view('footer'); ?>
