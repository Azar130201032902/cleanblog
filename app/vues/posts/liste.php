<?php
/*
  ./app/vues/template/posts/liste.php

  Variable disponible:
        - $posts = ARRAY(ARRAY(id, titre, sousTitre, datePublication, texte, user, image, created_at, update_at))
 */
?>

<?php foreach ($posts as $post): ?>
  <div class="post-preview">
    <a href="posts/<?php echo $post['id']; ?>/<?php echo \slugify($post['titre']); ?>.html">
      <h2 class="post-title">
        <?php echo $post['titre']; ?>
      </h2>
      <h3 class="post-subtitle">
        <?php echo $post['sousTitre']; ?>
      </h3>
    </a>
    <p class="post-meta">Posted On <?php echo date_format(date_create($post['datePublication']), "F j, Y"); ?></p>
    <hr>
  </div>
<?php endforeach; ?>
