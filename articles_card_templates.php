<div class="card text-center">
    <h5 class="card-title"><?php echo htmlspecialchars($donnees['titre']); ?></h5>
    <p class="card-text"><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
     <a class="btn btn-primary btn-sm" href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a>
  </div>
  <div class="card-footer text-muted" >
    <?php echo $donnees['date_creation_fr']; ?>
</div>