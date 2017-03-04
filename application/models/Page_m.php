<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_m extends MY_Model {
  protected $_table_name='pages';
  protected $_primary_key='id';
  protected $_primary_filter='intval';
  protected $_order_by='order';
  public $rules=array();
  protected $_timestamp=FALSE;


}

/* End of file page_m.php */
/* Location: ./application/models/page_m.php */
