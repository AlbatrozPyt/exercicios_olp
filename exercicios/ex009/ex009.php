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
    $total = 0;

    for ($i = 0; $i < count($data_json); $i++) {
        $total += $data_json[$i];
    }
    
    
    echo $total / count($data_json);
    ?>
</body>

</html>