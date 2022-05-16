<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
<?php
$numbers = array(4,8,15,16,23,42);//array containing numbers
echo $numbers[0];//arrays start at 0
?>
<?php $mixed = array(6, "fox", "dog", array("x","y","z"));//mixed array with integers and strings?><br/>
<?php echo $mixed[2];//echo array position 2?><br/>
<?php //echo $mixed[3];?><br/>
<?php //echo $mixed; ?><br/>

<?php echo $mixed[3][1];?><br/>

<?php $mixed[2] = "cat";//set position 2 to cat?>
<?php $mixed[4] = "mouse";//put item into the fourth array position?>
<?php $mixed[] = "horse";//sets horse to the 5th array position or last position?>

<pre>
<?php echo print_r($mixed);//prints out array in table form so we can see them?>
</pre>


<?php
//php 5.4 added the short array syntax
$array = [1,2,3];
?>

  </body>
</html>
