<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = [18, 59, 77, 86, 92, 102, 129, 208, 237, 244, 255, 260, 303, 309, 317, 331, 428, 433, 474, 510, 576, 615, 638, 665, 692, 700, 701, 708, 711, 719, 723, 725, 745, 776, 789, 803, 807, 814, 820, 827, 843, 884, 903, 913, 926, 936, 943, 958, 988, 996];

    $alvo = 630;

    foreach ($array as $key => $value) {
        if ($alvo == $value) {
            echo $key;
        }
    }

    $stop = false;

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($alvo > $array[$i] && $alvo < $array[$j]) {
                echo $j;
                $stop = true;
                break;
            }
        }

        if ($stop) {
            break;
        }
    }
    ?>
</body>

</html>