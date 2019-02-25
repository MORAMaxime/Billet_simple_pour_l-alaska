<?php
// On récupère les 4 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 4');

while ($donnees = $req->fetch())
{
    include'articles_card_template.php';
?>

<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>