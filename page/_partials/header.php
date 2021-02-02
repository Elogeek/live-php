<?php
$root = "/".basename($_SERVER['DOCUMENT_ROOT']);
$root = str_replace("//", "/", $root);
include $_SERVER['DOCUMENT_ROOT'].'/lib/func_error.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= $root ?>/assets/css/light.css">
    <link rel="stylesheet" href="<?= $root ?>/assets/css/style.css">
</head>
<body>
<?php
if(isset($_GET["e"])){
    displayMessage($_GET["e"], ERROR);
}
elseif(isset($_GET["s"])){
    displayMessage($_GET["s"]);
}
?>