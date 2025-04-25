<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = [2, 5, 7, 10, 12, 17, 19, 39, 48, 49, 51, 55, 57, 58, 59, 66, 79, 81, 84, 89, 90, 92, 94, 95, 98];
    $alvo = 50;

    for ($l = 0; $l < count($array); $l++) {
        for ($c = 0; $c < count($array); $c++) {
            if ($array[$l] + $array[$c] == $alvo) {
                echo "[" . $l . ", " . $c . "]";
            }
        }
    }

    ?>
</body>

</html>