<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
// session_start();
class Admin_Controller extends MY_Controller {

  function __construct(){
    parent::__construct();
    $this->data['meta_title']="Admin Page";

    $this->load->model('user_m');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->library('bcrypt');

    //login check ni
    // $exception_uris=array('admin/user/login','admin/user/logout');
    // if(in_array(uri_string(),$exception_uris)==FALSE){
    //   if($this->user_m->logged_in()==FALSE){
    //     redirect("/admin/user/login");
    //   }
    // }

  }


}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */


