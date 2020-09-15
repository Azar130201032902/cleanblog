<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/

  // DETAIL D'UN POST
  // PATTERN: /
  // CRTL: postsControleur
  // ACTION: index
    if(isset($_GET['postId'])):
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);

  // ROUTE PAR DEFAUT
  // PATTERN: /
  // CRTL: postsControleur
  // ACTION: index
    else:
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\indexAction($connexion);
    endif;
