<?php
//$linkPhoto = "https://www.w3schools.com/images/";
function returnImage3($link, $alt='',$height='100',$width='100')
{
  $patch = $GLOBALS['linkPhoto'].$link;
  print "<img src=\"$patch\" alt=\"$alt\" width=\"$width\" height=\"$height\">";
}

 ?>
