<?php
/*
  ./app/controleurs/postsControleur.php
  PARAMETRES DE L'APPLICATION
 */
namespace App\Controleurs\PostsControleur;

 function indexAction(\PDO $connexion) {
   // Je demande la liste des postes au modèle
    include_once '../app/modeles/postsModele.php';
    $posts = \App\Modeles\PostsModele\findAll($connexion);

   // et je le mets dans le $content
   GLOBAL $content, $title;
   $title = "Liste des posts";
    ob_start();
      include_once '../app/vues/posts/index.php';
    $content = ob_get_clean();
 }
