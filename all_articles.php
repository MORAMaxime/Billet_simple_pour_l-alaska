<?php
    
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation_fr FROM billets ORDER BY date_creation DESC');

while ($donnees = $req->fetch())
{
    include'articles_card_template.php';
  
} // Fin de la boucle des billets

$req->closeCursor();

?>