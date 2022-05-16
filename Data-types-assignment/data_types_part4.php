<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Data-types part 4</title>
  </head>
  <body>
  <ul>
        <h1 class="php-header">PHP DATA TYPES</h1>
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

    <?php $around = "around";?>
    <?php $goesaround = 'what goes ' . "{$around}"?>
    <?php $comesaround = 'comes ' . $around?>
    <?php $phrase = $goesaround . " " . $comesaround . '.';?>
    <?php echo $phrase;?>

  </body>
</html>
