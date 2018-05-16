<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login');
}

 ?>
<?php $this->load->view('header'); ?>

<header class="masthead mobile-panel">
  <div class="container">
    <div class="row">
      <div class="register-panel">
        <p class="text-center">Firefly Coin - Simple, Easy, day to day micro payments. And helps you to Create your own smart contracts.</p>
        <center>
          Share the following link with your friends, each successful registration will get you 1000 FFC.
        </center>
        <br>           
        <p id="reflink"><?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?><button onclick="copyToClipboard('#reflink')">Copy</button></p>

          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <span>Share on social media:</span>
            <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a>-->
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_telegram"></a>
          </div>
          <script>
          var a2a_config = a2a_config || {};
          a2a_config.linkname = "Firefly Coin - Simple, Easy, day to day micro payments. Lets you to Create your own smart contracts. Signup for Airdrop and get 1000 FFC";
          a2a_config.linkurl = "<?php echo base_url('user/register/'); echo $this->session->userdata('user_secret'); ?>";
          </script>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->

          <div class="outer-box">
                <div class="box">
                  <p>Invited</p>
                  <span><?php echo $this->session->userdata('myrefferals'); ?></span>
                </div>
                <div class="box">
                  <p>Earned FFC</p>
                  <span><?php echo (($this->session->userdata('myrefferals')*1000)+1000); ?></span>
                </div>
          </div>

      </div>
    </div>
  </div>
</header>
<style>
    #reflink {
      padding: 10px;
      position: relative;
      border: 1px solid rgba(255,255,255,0.8);
    }
    #reflink button {
      position: absolute;
      top: 0;
      right: 0;
      background: #f1ac00;
      border: 1px solid #fff;
      border-left: 2px solid #fff;
      color: #fff;
      padding: 9px 15px;
    }
    .a2a_kit span {
      float: left;
    }
    .a2a_default_style a {
      padding: 0 7px;
    }
    .outer-box {
      padding-top: 35px;
      text-align: center;
    }
    .box {
      width: 100px;
      height: 100px;
      border: 2px solid rgba(255,255,255,0.6);
      display: inline-block;
      margin-right: 40px;
    }
    .box p{
      font-size: 16px;
      padding-top: 10px;
      text-align: center;
      margin-bottom: 10px;
    }
    .box span {
      display: block;
      text-align: center;
      font-weight: bolder;
      font-size: 20px;
    }
</style>
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
<?php $this->load->view('footer'); ?>
<!--<a href="?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>-->

