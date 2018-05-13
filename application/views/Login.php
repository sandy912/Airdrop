<?php $this->load->view('header'); ?>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
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

                            <input class="btn-lg btn-block" type="submit" value="login" name="login" >
                    </form>
                    <center><b>Not registered ?</b> <br><a href="<?php echo base_url('user/register'); ?>">Register here</a></center><!--for centered text-->

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
