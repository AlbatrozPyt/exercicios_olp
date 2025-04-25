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

    foreach ($data_json as $key => $value) {
        if (isset($array["$value"])) {
            $array["$value"] += 1;
        } else {
            $array["$value"] = 1;
        }
    }

    foreach ($array as $key => $value) {
        if ($value == 1) {
            echo $key;
        }
    }
    ?>
</body>

</html>