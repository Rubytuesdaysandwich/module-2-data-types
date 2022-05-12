<!DOCTYPE html>
<html lang="en">
  <head>
    <title>integers</title>
  </head>
  <body>
<?php
$var1 =3;//assigning var1 to 3
$var2 =4;//assigning var2 to 4

?>
Basic Math: <?php echo((1 + 2 + $var1) * $var2) / 2 - 5;//should equal 7 ?>
<br/>
Absolute value:<?php echo abs(0 - 300); //retrieves the absolute value. the absolute value of |-300| is 300?><br/>
Exponential:<?php echo pow(2,8);//finds the exponent of 2,8 or how many times they can multiply till they find the same number which here is 256 ?><br/>
Square Root:<?php echo sqrt(100);//find the square root of 100 which is 10 ?><br/>
Modulo:<?php echo fmod(20,7);//finds the mode which is 6?><br/>
Random:<?php echo rand(); //gives the user a random number?><br/>
Random(min,max):<?php echo rand(1,10);//gives a random number between 1 and 10?><br/>
<br/>
+= :<?php $var2 += 4; echo $var2;//solves for in place addition short version for concat?><br/>
-= :<?php $var2 -= 4; echo $var2;//solves for in place subtraction short version for concat?><br/>
*= :<?php $var2 *= 3; echo $var2;//solves for in place multiplication short version for concat?><br/>
/= :<?php $var2 /= 4; echo $var2;//solves for in place divide short version for concat?><br/>
<br/>
Increment: <?php $var2++;echo $var2;//going up one per loop incrementing by 1 ?><br/>
Decrement: <?php $var2--;echo $var2;//going down per loop?><br/>
<br/>
<?php
echo 1 + "1";//Note you should not really on php to convert strings to integers. It is messy use proper syntax.


?>




  </body>
</html>
