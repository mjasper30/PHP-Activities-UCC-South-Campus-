<?php
  define("numberOfRows", 11);
  define("star", "*");
  define("underscore", "_");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activity 3</title>
  </head>
  <body>
    <?php
      echo "Shape Drawing" . '</br>';
      echo "Macaraeg, Jasper D." . '</br>';

      for ($i=numberOfRows; $i >= 1 ; $i--) {
        for ($j=1; $j <= numberOfRows ; $j++) {
          if ($j<=$i) {
            echo star;
          } else {
            echo underscore;
          }
        }
        echo "</br>";
      }
    ?>
  </body>
</html>
