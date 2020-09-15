<?php
/*
  ./app/controleurs/postsControleur.php
  PARAMETRES DE L'APPLICATION
 */
namespace App\Controleurs\PostsControleur;
use App\Modeles\PostsModele;

 function indexAction(\PDO $connexion) {
   // Je demande la liste des postes au modèle
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion);

   // et je le mets dans le $content
   GLOBAL $content, $title;
   $title = "Liste des posts";
    ob_start();
      include_once '../app/vues/posts/index.php';
    $content = ob_get_clean();
 }

 function showAction(\PDO $connexion, int $id) {
   // Je demande au modèle le détail du post id=xxx
    include_once '../app/modeles/postsModele.php';
    $post = PostsModele\findOneById($connexion, $id);
   // Je l'affiche dans la vue show
    GLOBAL $content, $title;
    $title = $post['titre'];
    ob_start();
      include_once '../app/vues/posts/show.php';
    $content = ob_get_clean();
 }
