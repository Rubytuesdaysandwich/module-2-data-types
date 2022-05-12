<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Type Juggling and Type Casting</title>
  </head>
  <body>
<?php?>
Type Juggling<br/>
<?php $count = "2 cats";?>
Type: <?php echo gettype($count);//gets the type weather it is a integer, string,boolean.?><br/>

<?php $count +=3; ?>
Type:<?php echo gettype($count);//gets the type weather it is a integer, string,boolean.?><br/>

<?php $cats = "I have" . $count . "cats.";//php assumes it should be a string it is be concatenated into a string.?>
cats:<?php echo gettype($cats);//gets the type weather it is a integer, string,boolean.?><br/>
<br/>
Type casting<br/>
<?php settype($count,"integer");//changes the variable in place sets the type of variable?>
count: <?php echo gettype($count);//gets the type weather it is a integer, string,boolean.?><br/>

<?php $count2 = (string) $count;//conversion of type happens during the assignment is not permanent ?>
count: <?php echo gettype($count);//gets the type weather it is a integer, string,boolean.?><br/>
count2: <?php echo gettype($count2);//gets the type weather it is a integer, string,boolean.?><br/>
<br/>

<?php $test1=3;//assigning variables test1 to 3?>
<?php $test2=3;//assigning variables test2 to 3?>
<?php (string) $test2;?>
Test1:<?php echo gettype($test1);//gets the type weather it is a integer, string,boolean.?><br/>
Test2:<?php echo gettype($test2);//gets the type weather it is a integer, string,boolean.?><br/>


  </body>
</html>
