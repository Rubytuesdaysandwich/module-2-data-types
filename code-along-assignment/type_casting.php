<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Type Juggling and Type Casting</title>
  </head>
  <body>
<?php?>
Type Juggling<br/>
<?php $count = "2";?>
Type: <?php echo gettype($count);?><br/>

<?php $count += 3; ?>
Type:<?php echo gettype($count);?><br/>

<?php $cats = "I have" . $count . "cats.";?>
cats:<?php echo gettype($cats);?><br/>

  </body>
</html>
