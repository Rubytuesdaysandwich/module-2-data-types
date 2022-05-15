<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Data-types part 4</title>
  </head>
  <body>

    <?php $around = "around";?>
    <?php $goesaround = 'what goes ' . "{$around}"?>
    <?php $comesaround = 'comes ' . $around?>
    <?php $phrase = $goesaround . " " . $comesaround . '.';?>
    <?php echo $phrase;?>

  </body>
</html>
