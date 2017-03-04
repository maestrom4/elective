<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
  protected $_table_name='';
  protected $_primary_key='id';
  protected $_primary_filter='intval';
  protected $order_by='';
  public $rules=array();

  protected $_timestamps=FALSE;
  public $data2=array();

  function __construct(){
    parent::__construct();
  }
  public function array_from_post($fields){
    $data = array();
    foreach($fields as $field){
      $data[$field]=$this->input->post($field);
    }
    return $data;
  }
  public function get($id=NULL, $single=FALSE){
    if($id!=NULL){
      $filter=$this->_primary_filter;
      $id = $filter($id);
      $this->db->where($this->_primary_key,$id);
      $method = 'row';
    }
    elseif($single==TRUE){
      $method = 'row';

    }else {
      $method='result';
    }
    if(!count($this->db->order_by($this->_order_by))) {
      $this->db->order_by($this->_order_by);
    }

    return $this->db->get($this->_table_name)->$method();
  }
  public function get_by($where,$single=FALSE){
    $this->db->where($where);
    return $this->get(NULL,$single);
  }
  public function save($data,$id=NULL){
    //set timestamps
    if($this->_timestamps==TRUE){
      $now = date('Y-m-d H:i:s');
      $id || $data['created'] = $now;
      $date['modified'] = $now;
    }
    //Insert
    if($id===NULL){

      !isset($data[$this->_primary_key]) || $data[$this->_primary_key]=NULL;
      $this->db->set($data);
      $this->db->insert($this->_table_name);
      $this->db->insert_id($data);
    }else {
      echo "passby";
      $filter = $this->_primary_filter;
      $filter = $filter($id);
      $this->db->set($data);
      $this->db->where($this->_primary_key,$id);
      $this->db->update($this->_table_name);
    }
  }
  public function delete($id){
    $filter=$this->_primary_filter;
    $id=$filter($id);
    if(!$id){
      return FALSE;
    }
    $this->db->where($this->_primary_key,$id);
    $this->db->limit(1);
    $this->db->delete($this->_table_name);
  }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */
