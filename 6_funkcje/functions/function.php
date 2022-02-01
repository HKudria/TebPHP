<?php
  function show(){
    return "test";
  }

  function validateDate($data, $len){
    return substr(ucfirst(strtolower(trim($data))),0,$len);
  //  return $data . " It's work";
  }
 ?>
