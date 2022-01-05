<?php
function validate_form($array){
  $errors = array();
  if(empty(trim($array['name']))){
    $errors[] = 'Please enter a name';
    }
  return $errors;
}

// public function select($options, $attributes = array()) {
//    $multiple = $attributes['multiple'] ?? false;
//    return $this->start('select', $attributes, $multiple) .
//           $this->options($attributes['name'] ?? null, $options) .
//           $this->end('select');
// }


 ?>
