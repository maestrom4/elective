<?php
function btn_edit($uri){
  return anchor($uri,'<i class="glyphicon glyphicon-edit"></i>');
}

function btn_delete($uri){
  return anchor($uri,'<i class="glyphicon glyphicon-remove"</i>',array('onclick'=>"return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"));

}

