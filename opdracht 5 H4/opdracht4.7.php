<?php
$spaargeld = $_POST['spaargeld'];
$telefoonPrijs = 1000;
$tekort = $telefoonPrijs - $spaargeld;

if ($tekort > 250) {
    echo "Je hebt een tekort van €$tekort. Het is beter om een baantje te zoeken.";
} elseif ($tekort > 0) {
    echo "Je hebt een tekort van €$tekort. Je bent er bijna!";
} else {
    $over = abs($tekort);
    echo "Je hebt genoeg geld! Je hebt €$over over voor een hoesje.";
}
?>
