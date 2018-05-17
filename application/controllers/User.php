<?php

class User extends CI_Controller {

public function __construct(){

    parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('user_model');
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->helper('cookie');

}

public function index() {
  $this->load->view("main");
}

public function register($secret = null){
  // $cookieData = get_cookie("refferal");
  if ($secret != null) {
    $cookie= array(
         'name'   => 'refferal',
         'value'  => $secret,
         'expire' => '604800'
     );
     $this->input->set_cookie($cookie);
     $this->load->view("register");

  }
  else {
     if(!($this->session->userdata('user_secret'))) {
       $this->load->view('register');
     }
     else {
       redirect('user/profile');
     }
  }

}

public function register_user(){
      $cookieData = get_cookie("refferal");
      if ($cookieData == null) {
        $cookieData = 000;
      }
      $user=array(
        'user_id'=>$this->input->post('user_id'),
        'user_name'=>$this->input->post('user_name'),
        'user_email'=>$this->input->post('user_email'),
        'user_facebook'=>$this->input->post('user_facebook'),
        'user_twitter'=>$this->input->post('user_twitter'),
        'user_password'=>md5($this->input->post('user_password')),
        'reffered_by'=> $cookieData
        );
      //  print_r($user);

      $email_check=$this->user_model->email_check($user['user_email']);

      //$wallet_check=$this->user_model->wallet_check($user['user_wallet']);

      if($email_check){
        $this->user_model->register_user($user);

        //$query = $this->db->query('SELECT `user_secret` FROM `user` WHERE `user_email` = ".$user['user_email']."');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$user['user_email']);

        if($query=$this->db->get()){
            $value = $query->row_array();
        }
        //else{
      //    return false;
      //  }
        $this->session->set_userdata('user_email',$user['user_email']);
        $this->session->set_userdata('user_secret', $value['user_secret']);
        redirect('user/profile');
      }
      else{
        $this->session->set_flashdata('error_msg', 'Email already exists, Please login');
        redirect('user');
      }

    //  if($wallet_check){
    //    $this->user_model->register_user($user);
     //   $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
    //    redirect('user/login');
    //  }
    //  else{
    //    $this->session->set_flashdata('error_msg', 'Error: ERC-20 wallet address already exists.');
   //     redirect('user');
     // }
}

public function login(){
  if(!($this->session->userdata('user_secret'))) {
    $this->load->view('login');
  }
  else {
    redirect('user/profile');
  }
}

function login_user(){
  $user_login=array(
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))
  );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_secret',$data['user_secret']);

      }
      else{
        $this->session->set_flashdata('error_msg', 'Incorrect Email or Password');
        $this->load->view("login");
      }
}


function profile(){
  $temp = $this->db->where('reffered_by', $this->session->userdata('user_secret'))->count_all_results('user');
  $this->session->set_userdata('myrefferals',$temp);
  $this->load->view('user_profile');
}

public function user_logout(){
  $this->session->sess_destroy();
  redirect('user/login', 'refresh');
}

}
?>
