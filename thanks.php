
<?php

if ($_POST) {

    $errors = array();

    if (empty($_POST['Nom'])) {
        $errors['Nom_1'] = 'Votre Nom est obligatoire.';
    } elseif (!preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST["Nom"])) {
        $errors['Nom_2'] = 'Seuls les lettres et espaces sont acceptés';
    }

    if (empty($_POST['Prenom'])) {
        $errors['Prenom_1'] = 'Votre Prénom est obligatoire.';
    } elseif (!preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST['Prenom'])) {
        $errors['Prenom_2'] = 'Seuls les lettres et espaces sont acceptés';
    }

    if (empty($_POST['Courriel'])) {
        $errors['Courriel_1'] = 'Votre email est obligatoire.';
    } elseif (!filter_var($_POST['Courriel'], FILTER_VALIDATE_EMAIL)) { 
        $errors['Courriel_2'] = 'Le format mail est incorrect'; 
    }

    if (empty($_POST['Téléphone'])) {
        $errors['Téléphone_1'] = 'Votre téléphone est obligatoire.';
    } 

    if (empty($_POST['message'])) {
        $errors['sujet_1'] = 'Le message est obligatoire.';
    } 
}
?>

