<?php
$leeftijd = $_POST['leeftijd'];
$heeftStempas = filter_var($_POST['stempas'], FILTER_VALIDATE_BOOLEAN);

if ($leeftijd >= 16) {
    echo "Je mag een scooter rijbewijs halen.<br>";
} else {
    echo "Je bent nog te jong om een scooter rijbewijs te halen.<br>";
}

if ($leeftijd >= 18) {
    if ($heeftStempas) {
        echo "Je mag stemmen.";
    } else {
        echo "Je mag niet stemmen, want je hebt geen stempas ontvangen.";
    }
} else {
    echo "Je bent nog te jong om te stemmen.";
}
?>
