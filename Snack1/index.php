<?php
    $partite = [
        //Partita 1
        [
            [
                "nome"      => "Olimpia Milano",
                "casa"      => true,
                "punteggio" => 55,
            ],
            [
                "nome"      => "Napoli",
                "casa"      => false,
                "punteggio" => 78,
            ],
        ],
        //Partita 2
        [
            [
                "nome"      => "Roma",
                "casa"      => true,
                "punteggio" => 101,
            ],
            [
                "nome"      => "Torino",
                "casa"      => false,
                "punteggio" => 89,
            ],
        ],
        //Partita 3
        [
            [
                "nome"      => "Pescara",
                "casa"      => true,
                "punteggio" => 45,
            ],
            [
                "nome"      => "Bologna",
                "casa"      => false,
                "punteggio" => 97,
            ],
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <?php
        $partiteLength = count($partite);
        for($i = 0; $i < $partiteLength; $i++){
            $partita = $partite[$i];
            echo "<div>{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}<div/>";
        } 
    ?>
</body>
</html>