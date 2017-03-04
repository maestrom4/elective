<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    // $this->load->config('site_name');
    $this->data['meta_title']=config_item('site_name');

  }

}

/* End of file Frontend_Controller.php */
/* Location: ./application/libraries/Frontend_Controller.php */

