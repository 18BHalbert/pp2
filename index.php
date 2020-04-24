<!--
Benjamin Halbert
01/17/20
https://github.com/18BHalbert/pp2
-->
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
echo("PHP Array Practice.");

$numbers = array(7,9,8,9,8,8,6);
printArr($numbers);

function printArr($numbers){
    foreach($numbers as $n){
        echo($n . "<br>");
    }
}

?>

</body>
</html>