
<?php
require 'thanks.php';
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
    <form action="form.php" method="POST">
    <div>
        <label for="Nom">Nom</label>
        <input type="text" id="Nom" name="Nom">
        <p><?php 
        if (isset($errors['Nom_1'])) {
            echo $errors['Nom_1'];
        }

        if (isset($errors['Nom_1'])) {
            echo $errors['Nom_2'];
        }
        ?></p>
    </div>
    <div>
        <label for="Prenom" >Prenom</label>
        <input type="text" id="Prenom" name="Prenom">
        <p><?php 
        if (isset($errors['Prenom_1'])) {
            echo $errors['Prenom_1'];
        }

        if (isset($errors['Nom_1'])) {
            echo $errors['Prenom_2'];
        }
        ?></p>

    </div>
    <div>
        <label for="Courriel">Courriel</label>
        <input type="email" id="Courriel" name="Courriel">
        <p>
            <?php 
        if (isset($errors['Courriel_1'])) {
            echo $errors['Courriel_1'];
        }

        if (isset($errors['Courriel_1'])) {
            echo $errors['Courriel_2'];
        }
        ?></p>
    </div>
    <div>
        <label for="Téléphone"> Téléphone</label>
        <input type="text" id="Téléphone" name="Téléphone">
        <p><?php 
        if (isset($errors['Téléphone_1'])) {
            echo $errors['Téléphone_1'];
        }

        if (isset($errors['Téléphone_1'])) {
            echo $errors['Téléphone_2'];
        }
        ?></p>
    </div>
    
<div>
<nom>sujet</nom>

    <select name="sujet" id="sujet">
   <libellé>Quelle est votre sport préféré ?</libellé>
   <option valeur="foot">foot-ball</option>
   <option valeur="basket">Basket-ball</option>
   <option valeur="tennis">Tennis</option>
   <option valeur="other">Autre</option>
   </select>

</div>
<div>
        <label for="message" >Message</label>
        <textarea name="message" id="message"></textarea>
        <p><?php 
        if (isset($errors['message_1'])) {
            echo $errors['message_1'];
        }

        if (isset($errors['message_1'])) {
            echo $errors['message_2'];
        }
        ?></p>
</div>
    <div class="button">
    <button type="submit">Envoyez votre message</button>
    </div>
    </form>
    
   
</body>

</html>