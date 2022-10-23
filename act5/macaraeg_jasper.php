<?php
  if (isset($_GET["combobox"]))
  // echo $_GET["combobox"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COLOR NUMBER</title>
  </head>
  <body>
<style>
  table,td,tr{
    border: solid 5px black;
    padding: 10px
  }
  .color{
    background-color : blue;
    color : white;
  }
</style>
<h2>Macaraeg, Jasper D.</h2>
  <form method="get">
    <select  name="combobox">
      <?php
        for($i=1; $i<=100; $i++){
          echo "<option value='$i'>$i</option>";
          echo "</br>";
        }
      ?>
    <input type="submit" value="Submit">
    </select>
  </form>
  </body>
</html>

<?php
  $p='';
  echo "<table border \"4\" style='border-collapse: collapse' >";
	for ($row=1; $row <= 10; $row++) {
  	echo "</td> \n";
  	for ($column=1; $column <= 10; $column++) {
    	$p++;

      if (isset($_GET["combobox"])){
        if ($p== $_GET["combobox"]) {
          echo "<td class = 'color'>$p</td> \n";
        }else{
          echo "<td>$p</td> \n";
        }
      }else{
        echo "<td>$p</td> \n";
      }
    }
    	echo "</tr>";
  }
	echo "</table>";
?>
