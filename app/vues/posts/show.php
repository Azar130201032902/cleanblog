<?php
/*
  ./app/vues/template/posts/show.php

  Variable disponible:
        - $post = ARRAY(id, titre, sousTitre, datePublication, texte, nom, prenom)
 */
?>
<header class="masthead" style="background-image: url('img/<?php echo $post['image']; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $post['titre']; ?></h1>
          <h2 class="subheading"><?php echo $post['sousTitre']; ?></h2>
          <span class="meta">Posted on <?php echo date_format(date_create($post['datePublication']), "F j, Y"); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Textes -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- EDIT -->
        <div class="clearfix">
          <a class="btn btn-secondary" href="#">Edit Post &rarr;</a>
          <a class="btn btn-secondary" href="#">Delete Post &rarr;</a>
        </div>


        <!-- POST DETAILS -->
        <p><?php echo $post['texte']; ?></p>


        <p>Placeholder text by
          <a href="#"><?php echo $post['prenom']; ?> <?php echo $post['nom']; ?></a>.</p>
      </div>
    </div>
  </div>
</article>

<hr>
