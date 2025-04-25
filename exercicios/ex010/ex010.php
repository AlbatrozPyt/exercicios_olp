<?php
$data = file_get_contents("data.json");
$data_json = json_decode($data, true);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = [];

    for ($i = count($data_json) - 1; $i > -1; $i--) {
        array_push($array, $data_json[$i]);
    }

    $newArray = [];

    foreach ($array as $key => $value) {
        $newString = "";
        $string = $value;

        for ($i = strlen($string) - 1; $i > -1; $i--) {
            $newString .= $string[$i];
        }

        $newArray[] = '['.$key.''.$newString.'';
        echo '['.$key.']' . ':' . '"'. $newString. '"'.', ';
    }

    ?>
</body>

</html>