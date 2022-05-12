<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Constants</title>
  </head>
  <body>
<?php
    $max_width = 980;//this is a normal variable
    
    define("MAX_WIDTH",980);//defining a constant to a value
   echo MAX_WIDTH;
?>
<br/>
<?php//cant change the value of constants
//MAX_WIDTH = MAX_WIDTH + 1
// echo MAX_WIDTH;
?>

<?php //can't even redefine it
define("MAX_WIDTH",981);
echo MAX_WIDTH;
?>

<!--note to self: by using constants we speed up the running time of our scripts because the cpu knows what it is going to be. a good use of a 
constant may be a route path to an images folder does not need changed -->

  </body>
</html>
