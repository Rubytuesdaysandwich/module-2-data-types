<!DOCTYPE html>
<html lang="en">
  <head>
    <title>floating point numbers</title>
  </head>
  <body>
<?php echo $float =3.14;//3.14 to browser assign to $float?><br/>
<?php echo $float + 7;//add 7 to 3.14?><br/>
<?php echo 4/3;//divide 4 and 3 = 1.333?><br/>
<?php echo 4/0;//returns errors cannot divide by 0?><br/>
<br/>
Round:<?php echo round($float, 1);//round to the nearest tenths?><br/>
Ceiling:<?php echo Ceil($float);//rounding up?><br/>
Floor:<?php echo floor($float);//rounding down?><br/>
<br/>
<?php $integer = 3?>

<?php echo "Is {$integer} integer?" . is_int($integer);//returns weather or not the value is true or not?><br/>
<?php echo "Is {$float} integer?" . is_int($float);//returns weather or not the value is true or not?><br/>
<br/>
<?php echo "Is {$integer} float?" . is_float($integer);//returns weather or not the value is true or not?><br/>
<?php echo "Is {$float} float?" . is_float($float);//returns weather or not the value is true or not?><br/>
<br/>
<?php echo "Is {$integer} numeric?" . is_numeric($integer);//returns weather or not the value is true or not?><br/>
<?php echo "Is {$float} numeric?" . is_numeric($float);//returns weather or not the value is true or not?><br/>
<br/>
  </body>
</html>
