<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$email = $_GET['mail'] ?? '';

$name_controllo = false;
$email_controllo = false;
$age_controllo = false;

if (isset($_GET['name']) && strlen($name) > 3) {
    $name_controllo = true;
}

if (isset($_GET['mail']) && strpos($email,  '.') && strpos($email, '@')) {
    $email_controllo = true;
}
if (isset($_GET['age']) && is_numeric($age)) {

    $age_controllo = true;
}

if ($name_controllo === true && $email_controllo === true && $age_controllo === true) {
    echo "ACCESSO AUTORIZZATO";
} else {
    echo "ACCESSO NEGATO";
}
?>