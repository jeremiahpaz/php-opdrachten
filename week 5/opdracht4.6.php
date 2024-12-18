<?php
$huidigUur = date("H");
$temperatuur = $_POST['temperatuur'];
$luchtvochtigheid = $_POST['luchtvochtigheid'];

if ($huidigUur >= 17 || ($temperatuur < 20 && $luchtvochtigheid < 85)) {
    echo "De airco is uit.";
} else {
    echo "De airco is aan.";
}
?>
