
<form method="post" action="1_withconstruct.php">
    <input type="text" placeholder="Podaj strone A" name="sideA"><br>
    <input type="text" placeholder="Podaj strone B" name="sideB"><br>
    <input type="submit" name="button" value="Zatwierdż">
</form>

<?php
if(isset($_POST['button'])){
    $error=0;
   foreach ($_POST as $key => $value){
       if($key == 'button'){
           continue;
       }
       if (empty($value)){
           $error=1;
           continue;
       } else {
           $_POST[$key]  = preg_replace('/,/','.',$value);
       }

       if (!is_numeric($_POST[$key] )) {
           $error=2;
       }
   }
   if($error==1){
       echo 'Wypelnij wszytkie pola';
       exit();
   }
    if($error==2){
        echo 'To nie jest liczba!';
        exit();
    }
   require_once './class/RectangleC.php';
   $rectangle = new Rectangle($_POST['sideA'],$_POST['sideB']);
   echo 'Pole prostokontu o bokach: '. $rectangle->getSideA() . ' i ' . $rectangle->getSideB() . ' wynosi ' .$rectangle->area() . 'cm<sup>2</sup> i obwód wynosi ' . $rectangle->square() . 'cm';


}
?>
