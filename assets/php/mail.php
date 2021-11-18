
    <?php
    $retour = mail('jeremy.balsemin@wanadoo.fr', 'Envoi depuis le formulaire de Contact', 
    $_POST['message'], 'From : webmaster@monsite.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>