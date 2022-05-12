<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Constants</title>
  </head>
  <body>
<?php
    $max_width = 980;
    
    define("MAX_WIDTH",980);
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

<!--note to self: by using constants we speed up the running time of our scripts because the cpu knows what it is going to be. -->

  </body>
</html>
