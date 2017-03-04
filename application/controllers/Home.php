<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

  public function __construct(){
    parent::__construct();
    // echo "nice";
  }
  public function index(){

    $this->load->view('main/home',$this->data);
    // var_dump($_SERVER);
    // var_dump(ENVIRONMENT);
  }

}

/* End of file Mainpage.php */
/* Location: ./application/controllers/Mainpage.php */
// var_dump($_SERVER);

