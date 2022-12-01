<?php
$textCensurato = '';

$testo = $_GET['text'];
$parola = $_GET['parola'];
$array_testo = explode('', $testo);
for ($i = 0; $i < count($array_testo); $i++) {
    if ($array_testo[$i] == $parola) {
        $array_testo[$i] = '*****';
    }
}
$textCensurato = implode(' ', $array_testo);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php var_dump($textCensurato) ?>
    </h1>
</body>

</html>