<?php
/*
  ./app/modeles/postsModele.php
 */
namespace App\Modeles\PostsModele;

  function findAll(\PDO $connexion, int $limit = 10, int $offset = 0) {
    $sql = "SELECT *
            FROM posts
            ORDER BY datePublication DESC
            LIMIT :limit
            OFFSET :offset;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
    $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
    $rs->execute();
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
