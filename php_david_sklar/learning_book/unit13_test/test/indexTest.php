<?php
use PHPUnit\Framework\TestCase;

class indexTest extends TestCase {
  function testMyFirs(){
    $this-> assertEquals(2, 1 + 1);
  }

  public function testNameNoValid() {
    include 'index.php';

    $submitted = array('age' => '6.7',
                       'price' => '100',
                       'name' => '');
    $errors = validate_form($submitted);
    $this->assertContains('Please enter a name', $errors);
    $this->assertCount(1, $errors);

}
}


 ?>
