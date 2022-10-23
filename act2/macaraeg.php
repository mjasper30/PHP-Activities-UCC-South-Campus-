<?php
  $str = "The quick brown fox jumps over the lazy dog. 0123456789@_-#";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo strtoupper(substr($str,14,1)) .
      substr($str,36,1) .
      substr($str,22,1) .
      substr($str, 2,1) . ": " .
      strtoupper(substr($str, 20,1)) .
      substr($str, 36,1) .
      substr($str, 24,1) .
      substr($str, 23,1) .
      substr($str, 28,1) .
      substr($str, 11,1) .
      substr($str, 3,1) .
      strtoupper(substr($str, 22,1)) .
      substr($str, 36,1) .
      substr($str, 7,1) .
      substr($str, 36,1) .
      substr($str, 11,1) .
      substr($str, 36,1) .
      substr($str, 28,1) .
      substr($str, 42,1);
      echo "<br>";
      echo strtoupper(substr($str,36,1)) .
      substr($str, 40,1) .
      substr($str, 40,1) .
      substr($str, 11,1) .
      substr($str, 2,1) .
      substr($str, 24,1) .
      substr($str, 24,1) . ": " .
      substr($str, 46,1) .
      substr($str, 48,1) .
      substr($str, 45,1) .
      substr($str, 3,1) .
      strtoupper(substr($str, 20,1)) .
      substr($str, 44,1) .
      strtoupper(substr($str, 11,1)) .
      substr($str, 36,1) .
      substr($str, 22,1) .
      substr($str, 12,1) .
      substr($str, 24,1) .
      substr($str, 3,1) .
      strtoupper(substr($str, 24,1)) .
      substr($str, 31,1) .
      substr($str, 44,1) .
      strtoupper(substr($str, 7,1)) .
      substr($str, 36,1) .
      substr($str, 35,1) .
      substr($str, 26,1) .
      substr($str, 26,1) .
      substr($str, 7,1) .
      substr($str, 36,1) .
      substr($str, 14,1) .
      substr($str, 3,1) .
      strtoupper(substr($str,7,1)) .
      substr($str, 6,1) .
      substr($str, 31,1) .
      substr($str, 38,1);
      echo "<br>";
      echo strtoupper(substr($str, 7,1)) .
      substr($str,12,1) .
      substr($str,14,1) .
      substr($str,31,1) .
      substr($str,36,1) .
      substr($str,7,1) .
      substr($str,31,1) . ": " .
      substr($str,45,1) .
      substr($str,54,1) .
      substr($str,47,1) .
      substr($str,46,1) .
      substr($str,48,1) .
      substr($str,47,1) .
      substr($str,52,1) .
      substr($str,54,1) .
      substr($str,52,1) .
      substr($str,47,1) .
      substr($str,48,1);
      echo "<br>";
      echo strtoupper(substr($str,2,1)) .
      substr($str,22,1) .
      substr($str,36,1) .
      substr($str,6,1) .
      substr($str,35,1) . ": " .
      substr($str,20,1) .
      substr($str,36,1) .
      substr($str,24,1) .
      substr($str,23,1) .
      substr($str,28,1) .
      substr($str,11,1) .
      substr($str,43,1) .
      substr($str,22,1) .
      substr($str,36,1) .
      substr($str,7,1) .
      substr($str,36,1) .
      substr($str,11,1) .
      substr($str,36,1) .
      substr($str,28,1).
      substr($str,42,1) .
      substr($str,55,1) .
      substr($str, 42,1) .
      substr($str, 22,1) .
      substr($str, 36,1) .
      substr($str, 6,1) .
      substr($str, 35,1) .
      substr($str, 43,1) .
      substr($str, 7,1) .
      substr($str, 12,1) .
      substr($str, 22,1);
      ?>
  </body>
</html>

<!--
0 = 45
1 = 46
2 = 47
3 = 48
4 = 49
5 = 50
6 = 51
7 = 52
8 = 53
9 = 54
-->
