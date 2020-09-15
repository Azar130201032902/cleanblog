<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/

  // PAGE CONTACT
  // PATTERN: /contact
  // CRTL: /
  // ACTION: /
    if(isset($_GET['about'])):
      GLOBAL $content, $title;
      $title = "About";
      ob_start();
        include_once '../app/vues/about/index.php';
      $content = ob_get_clean();

  // PAGE CONTACT
  // PATTERN: /contact
  // CRTL: /
  // ACTION: /
    elseif(isset($_GET['contact'])):
      GLOBAL $content, $title;
      $title = "Contact";
      ob_start();
        include_once '../app/vues/contact/index.php';
      $content = ob_get_clean();

  // DETAIL D'UN POST
  // PATTERN: /
  // CRTL: postsControleur
  // ACTION: index
    elseif(isset($_GET['postId'])):
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
