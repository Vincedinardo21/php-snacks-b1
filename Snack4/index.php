<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    <?php
    $myArray = [];
        for($i = 0; $i < 15; $i++){
            $randNum = rand(1, 100);
            if(!in_array($randNum, $myArray)){
                $myArray[] = $randNum;
                echo "<div>$randNum</div>";
            }        
        }
    ?>
</body>
</html>