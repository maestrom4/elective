<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration extends Admin_Controller {

  function __construct()
  {
    parent::__construct();
  }
  public function index(){
    $this->load->library('migration');
    if ($this->migration->current() === FALSE)
    {
      show_error($this->migration->error_string());
    }else {
      echo "migration work!";
    }
  }

}

/* End of file migration.php */
/* Location: ./application/controllers/admin/migration.php */
