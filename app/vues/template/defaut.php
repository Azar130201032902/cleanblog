<?php
/*
  ./app/vues/template/defaut.php
  TEMPALTE DE L'APPLICATION
 */
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include_once '../app/vues/template/partials/head.php'; ?>
  </head>

  <body>

    <!-- Navigation -->
    <?php include_once '../app/vues/template/partials/nav.php'; ?>

    <!-- CONTENU -->
    <main>

      <?php echo $content; ?>
      <hr>

    </main>

    <!-- Footer -->
    <?php include_once '../app/vues/template/partials/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <?php include_once '../app/vues/template/partials/scripts.php'; ?>

  </body>

</html>
