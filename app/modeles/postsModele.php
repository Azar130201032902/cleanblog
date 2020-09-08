<?php
/*
  ./app/modeles/postsModele.php
 */
namespace App\Modeles\PostsModele;

  function findAll(\PDO $connexion) {
    $sql = "SELECT *
            FROM posts
            ORDER BY datePublication DESC
            LIMIT 4;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
