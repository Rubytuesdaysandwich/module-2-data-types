<!DOCTYPE html>
<html lang="en">
  <head>
    <title>string functions</title>
  </head>
  <body>
      <?php
      
      $first = "The quick brown fox";
      $second = " jumped over the lazy dog.";

      $third = $first;
      $third .=$second;
      echo $third;
     
      ?>

      <br/>
      Lowercase: <?php echo strtolower($third);?><br/>
      uppercase: <?php echo strtoupper($third);?><br/>
      uppercase first: <?php echo ucfirst($third);?><br/>
      uppercase words: <?php echo ucwords($third);?><br/>
      <br/>
      Length: <?php echo strlen($third);?><br/>
      Trim:<?php echo "A" . trim("B C D") . "E";?><br/>
      Find:<?php echo strstr($third, "brown");?><br/>
      Replace by string:<?php echo str_replace("quick","super-fast",$third);?><br/>
      <br/>
      Repeat:<?php echo str_repeat($third, 2);?><br/>
      Make string:<?php echo substr($third, 5, 10);?><br/>
      Find position:<?php echo strpos($third, "brown");    ;?><br/>
      Find character:<?php echo strchr($third, "z");   ;?><br/>
  </body>
</html>
