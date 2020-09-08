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

        <!-- Page Header -->
        <?php include_once '../app/vues/template/partials/header.php'; ?>

        <!-- Textes -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php include_once '../app/vues/template/partials/addpost.php'; ?>

              <!-- POSTS LIST -->
              <?php echo $content; ?>
              
            </div>
          </div>
        </div>

        <hr>
    </main>

    <!-- Footer -->
    <?php include_once '../app/vues/template/partials/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <?php include_once '../app/vues/template/partials/scripts.php'; ?>

  </body>

</html>
