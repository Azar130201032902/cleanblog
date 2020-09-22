<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/

// ROUTE AJAX ------------------------------------------------------------------

  // CHARGEMENTS DES POSTS SUIVANTS
  // PATTERN: /?older-posts
  // CRTL: /
  // ACTION: /
    if(isset($_GET['ajax']) and $_GET['ajax'] ==='older-posts'):
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\ajaxOlderAction($connexion, $_GET['offset']);

// ROUTE STANDARD --------------------------------------------------------------

  // PAGE CONTACT
  // PATTERN: /contact
  // CRTL: /
  // ACTION: /
    elseif(isset($_GET['about'])):
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
