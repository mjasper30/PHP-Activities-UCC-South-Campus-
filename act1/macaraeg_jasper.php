<?php
    $name = "Jasper Macaraeg";
    $address = "130 J.Ramos St.Caloocan City";
    $contact_number = "09213279723";
    $age = 20;

    $pogi = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macaraeg Jasper</title>
</head>
<body>
    <?php
        echo "Name: " .$name ."<br>";
        echo "Name: $name <br>";
        echo 'Name: $name <br>';
        echo "Address: " .$address ."<br>";
        echo "Contact Number: " .$contact_number ."<br>";
        echo "Age: " .$age ."<br>";
    ?>
</body>
</html>
