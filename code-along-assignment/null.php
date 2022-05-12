<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NULL</title>
  </head>
  <body>
<?php
$var1 = null;
$var2 = "";

?>
var1 null? <?php echo is_null($var1);//defines whether something is null by returning t/f?><br/>
var2 null? <?php echo is_null($var2);//defines whether something is null by returning t/f?><br/>
var3 null? <?php echo is_null($var3);//defines whether something is null by returning t/f?><br/>
<br/>
var1 is set  <?php echo isset($var1);//determine if the variable is declared and different than null?><br/>
var2 is set  <?php echo isset($var2);//determine if the variable is declared and different than null?><br/>
var3 is set  <?php echo isset($var3);//determine if the variable is declared and different than null?><br/>
<br/>
<?php //empty:"", null,0,0.0,"0",false,array() ?>

<?php $var3 = "0"; //assigning $var3  to 0 which is counted as empty?>
Var1 empty? <?php echo empty($var1);//checks to see if items are empty?><br/>
Var2 empty? <?php echo empty($var2);//checks to see if items are empty?><br/>
Var3 empty? <?php echo empty($var3);//checks to see if items are empty?><br/>

<?php //note to self: empty and Null is one of the most common types of bugs in situations where you may need it to be empty for someone who does not have children for example?>
  </body>
</html>
