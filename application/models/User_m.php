<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends MY_Model {

  protected $_table_name = 'users';
  protected $_order_by = 'email';
  public $rules = array(
    'email' => array(
        'field'=>'email',
        'label'=>'Email',
        'rules'=>'required|trim|valid_email'
    ),
    'password'=>array(
        'field'=>'password',
        'label'=>'Password',
        'rules'=>'required|trim|min_length[6]'
    )

  );
  public $rules_admin = array(

    'email' => array(
        'field'=>'email',
        'label'=>'Email',
        'rules'=>'trim|required|valid_email|callback__unique_email|xss_clean'
    ),
    'password'=>array(
        'field'=>'password',
        'label'=>'Password',
        'rules'=>'trim|required'
    ),
    'passconf'=>array(
        'field'=>'passconf',
        'label'=>'Confirm password',
        'rules'=>'trim|matches[password]|required'
    ),

  );
  public function __construct(){
    parent::__construct();
  }
  public function login(){
    // $user = $this->get_by(array(
    //         'email'=>'maestro.m4@gmail.com'
    // ),TRUE);
    // var_dump($user);
    $user=$this->get_by(array('email'=>$this->input->post('email')));
    var_dump($user);
    $a=$this->bcrypt->hash_password($this->input->post('password').config_item('encryption_key'));
    $a=$this->input->post('password').config_item('encryption_key');
    if($this->bcrypt->check_password($a,$user->password))
    {
      if(count($user)){
      $data = array(
          'name'=>$user->name,//$user->name,
          'email'=>$user->email,
          'id'=>$user->id,//$user->id,
          'loggedin'=>TRUE,
      );
      $this->session->set_userdata($data);
      }
      return TRUE;
    }
  }
  public function logout(){
    $this->session->sess_destroy();
  }
  public function logged_in(){
    return (bool)$this->session->userdata('loggedin');
  }
  // public function hash($a){
  //   return $this->bcrypt->hash_password($a.config_item('encryption_key'));
  //   // return hash('sha512',$a.config_item('encryption_key'));
  // }


}

/* End of file User_m.php */
/* Location: ./application/models/User_m.php */
