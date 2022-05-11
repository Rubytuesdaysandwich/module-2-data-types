<!DOCTYPE html>
<html lang="en">
  <head>
    <title>strings</title>
  </head>
  <body>
    <?php
    echo"Hello world<br/>";
    echo'Hello world<br/>';

    $greeting ="Hello";
    $target = "World";
    $phrase = $greeting . " " . $target;
    echo $phrase;
    ?>
    <br/>
    <?php
    
    echo "$phrase Again<br/>";
    echo '$phrase Again<br/>';
    echo "{$phrase}Again<br/>";
    
    ?>




  </body>
</html>
