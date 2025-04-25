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
    <h1>teste</h1>

    <?php
    $maior = 0;
    $soma = 0;

    for ($l = 0; $l < count($data_json); $l++) {
        for ($c = 0; $c < count($data_json[$l]); $c++) {
            $soma += $data_json[$l][$c];
        }

        if ($maior < $soma) {
            $maior = $soma;
        }

        $soma = 0;
    }

    echo $maior;
    ?>
</body>

</html>