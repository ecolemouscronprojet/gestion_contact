<?php
$verifications = [
    'nom' => 'Le nom est obligatoire',
    'prenom' => 'Le prénom est obligatoire',
    'date_de_naissance' => 'La date de naissance est obligatoire',
    'civilite' => 'La civilité est obligatoire',
];

foreach ($verifications as $key => $errorMessage) {
    if (isset($_POST[$key]) === false || empty($_POST[$key])) {
        echo $errorMessage . '<br>';
    }
}

$file = 'contact.txt';

$person = implode(';', $_POST)."\n";

file_put_contents($file, $person, FILE_APPEND | LOCK_EX);