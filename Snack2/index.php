<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    $numberChars = strlen($name);
    $positionChioc = strpos($email, "@");
    if($numberChars > 3 || is_numeric($age) || $positionChioc !== false && strpos($email, ".", $positionChioc)){
        $result = "Accesso consentito";
    } else {
        $result = "Accesso NON consentito";
    }

    var_dump($numberChars);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <h2>Nome: <?= $name ?></h2>
    <h2>Email: <?= $email ?></h2>
    <h2>Età: <?= $age ?></h2>

    <h3><?= $result ?></h3>
</body>
</html>