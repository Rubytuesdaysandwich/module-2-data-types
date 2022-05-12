<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booleans</title>
  </head>
  <body>
<?php
// a programming type that accepts true or false
$result1=true;//result1 set to true
$result2=false;//result2 set to false
?>


Result1:<?php echo $result1;//echo variables?><br/>
Result2:<?php echo $result2;//echo variables?><br/>

result2 is boolean? <?php echo is_bool($result2);//checks if it is a boolean?>
<br/>

<?php
$number =3.14;
if( is_float($number)){    
    echo"it is a float.";
}
//condition statement checking if $number is a float number returns "it is a float if true"
?>



  </body>
</html>
