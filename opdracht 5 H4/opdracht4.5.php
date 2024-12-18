<?php
$getal = $_POST['getal'];

if ($getal % 2 == 0) {
    echo "Het getal $getal is even.";
} else {
    echo "Het getal $getal is oneven.";
}
?>
