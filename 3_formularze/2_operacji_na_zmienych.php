<?php
echo PHP_VERSION,'<br>'; //8.0.11
//echo phpinfo(); //php config

//** potęga / 2**10 -> 2 в степени 10
echo 2**10;

//systemy liczbowe
//binarne 2, oktalny 8, decymalny 10, heksadecymalny 16

$dec = 12;
echo "<hr>$dec<br>";

$bin = 0b1101;
echo "<hr>$bin<br>"; //1*2^0 + 0*2^1 + 1*2^3 + 1*2^4 = 1 + 0 + 4 + 8 = 13(10)

$oct = 010;
echo "<hr>$oct<br>"; //8 => 10(8) => 0*8^0 + 1*8^1 = 0 + 8 = 8(8)

$hex = 0x31;
echo "<hr>$hex<br>"; //49 => 31(16) => 1*16^0 + 3*16^1 = 1 + 48 = 49(16)

$hex = 0x2A;
echo "<hr>$hex<hr>"; //42 => 2A(16) => A*16^0 + 2*16^1 = 10 + 32 = 42(16)

//porównanie a identyczność
$x=10;
$y=10.0;

if ($x==$y) {
  echo "Równe";
} else {
  echo "Różne";
}


if ($x===$y) {
  echo "<hr>Identyczne";
} else {
  echo "nie identyczne";
}
echo "<br>";
echo gettype($x); //integer
echo "<br>";
echo gettype($y); //double

/*
postinkrementacja $i++
preinkrementacja ++$//
postdekrementacja $i--
predekrementacja --$i
*/
echo "<hr>";
$x=1;
echo $x++, "<br>"; //1
echo $x, "<br>"; //2
echo ++$x, "<br>"; //3
echo ++$x, "<br>"; //4
echo $x, "<br>"; // 4
echo --$x, "<br>"; // 3
$y = $x++;
echo $x, "<br>"; // 4
echo $y, "<br>"; // 3
$x=++$x;
echo $x, "<br>"; // 5
$x=$y++;
echo $x, "<br>"; // 3
echo $y, "<br>"; // 4
$x=$x++;
echo $x, "<hr>"; // 3

/*
$x=$x++; в таком случае х не увеличиваеться 
*/

$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++; // y = 4, x = 4
echo $y; //4
$y=++$x; // 6
$x=$x++; // 6
echo $x; // 6
echo --$y; //5

 ?>
