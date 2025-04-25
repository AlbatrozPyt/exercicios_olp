<?php
$data = file_get_contents("data.json");
$data_json = json_decode($data, true);
?>

<?php
$maior = 0;

foreach ($data_json as $key => $value) {
    if ($maior < $value) {
        $maior = $value;
    }
}

echo "maior -> $maior";
?>