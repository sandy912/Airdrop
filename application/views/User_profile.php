<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">
          <tr>
            <th colspan="2"><h4 class="text-center">User Info</h3></th>
          </tr>
          <tr>
            <td>Name</td>
            <td><?php echo $this->session->userdata('user_name'); ?></td>
          </tr>
          <tr>
            <td>Email Address</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          <tr>
            <td>ERC-20 Wallet Address</td>
            <td><?php echo $this->session->userdata('user_wallet');  ?></td>
          </tr>
          <tr>
            <td>Refferal Link</td>
            <td><?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?></td>
          </tr>
          <tr>
            <td>Reffered Users</td>
            <td><?php echo $this->session->userdata('myrefferals'); ?></td>
          </tr>
          <tr>
            <td>Earned coins</td>
            <td><?php echo ($this->session->userdata('myrefferals')* 10 ) ?> </td>
          </tr>

        </table>


    </div>
  </div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>
