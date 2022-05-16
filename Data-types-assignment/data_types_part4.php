<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Data-types part 4</title>
  </head>
  <body>
  <ul>
        <h1 class="php-header">PHP DATA TYPES</h1>
        <li>
        <a href="basic.html">Home</a>
        </li>
        <li>
          <a href="data_types_part1.php">part1</a>
        </li>
        <li>
          <a href="data_types_part2.php">part2</a>
        </li>
        <li>
          <a href="data_types_part3.php">part3</a>
        </li>
        <li>
          <a href="#">part4</a>
        </li>
        
      </ul>

    <?php $around = "around";//assign around to $around?>
    <?php $goesaround = 'what goes ' . "{$around}";//$goesaround being tied to what goes and concatenating to around?>
    <?php $comesaround = 'comes ' . $around;//$comesaround being tied to comes and $around concatenating ?>
    <?php $phrase = $goesaround . " " . $comesaround . '.';//concatenating goesaround and comesaround to form what goes around comes around.?>
    <?php echo $phrase;//echoing the phrase what goes around comes around to the browser?>

  </body>
</html>
