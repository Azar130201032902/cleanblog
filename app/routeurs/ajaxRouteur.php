<?php
/*
  ./app/routeurs/ajaxRouteur.php
  ROUTEUR DES ROUTES AJAX
*/
use App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';

  switch($_GET['ajax']):

    // UPDATE DU CHAMP 'field' DU POST ID
    // PATTERN: /?older-posts
    // CRTL: postsControleur
    // ACTION: ajaxUpdateFieldAction
    case 'updateField':
      PostsControleur\ajaxUpdateFieldAction($connexion, $_GET['id'], $_GET['field'], $_GET['value']);
    break;

    // CHARGEMENTS DES POSTS SUIVANTS
    // PATTERN: /?older-posts
    // CRTL: postsControleur
    // ACTION: ajaxOlderAction
    case 'older-posts':
      PostsControleur\ajaxOlderAction($connexion, $_GET['offset']);
    break;

  endswitch;
