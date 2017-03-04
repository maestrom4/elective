<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

  public function index()
  {
    $this->data['subview']="/admin/dashboard/index";
    $this->load->view('admin/_layout_main',$this->data);
  }
  public function  modal(){
    $this->load->view('admin/_layout_modal',$this->data);
  }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */
