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
        $array = [];
        $string = "PNEUMONOULTRAMICROSCOPICSILICOVOLCANOCONIOSIS";

        for ($i = strlen($string) - 1; $i > -1; $i--) {
            echo $string[$i];
        }
    ?>
</body>
</html>