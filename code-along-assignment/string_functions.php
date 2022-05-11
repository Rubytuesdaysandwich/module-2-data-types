<!DOCTYPE html>
<html lang="en">
  <head>
    <title>string functions</title>
  </head>
  <body>
      <?php
      
      $first = "The quick brown fox";
      $second = " jumped ove the lazy dog.";

      $third = $first;
      $third .=$second;
      echo $third;
     
      ?>

      <br/>
      Lowercase: <?php echo strtolower($third);?><br/>
      uppercase: <?php echo strtoupper($third);?><br/>
      uppercase first: <?php echo ucfirst($third);?><br/>
      uppercase words: <?php echo ucwords($third);?><br/>
      
  </body>
</html>
