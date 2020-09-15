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

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT posts.id,
                   posts.titre,
                   posts.sousTitre,
                   posts.datePublication,
                   posts.texte,
                   users.nom,
                   users.prenom
            FROM posts
            JOIN users ON posts.user = users.id
            where posts.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }
