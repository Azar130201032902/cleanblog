<?php
/*
  ./www/index.php
  DISPATCHER CENTRAL
*/

  include_once '../noyau/init.php';
  include_once '../app/routeur.php';
  // On ne charge le template QUE SI on n'est PAS EN AJAX !!!
  if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
          && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
            require_once '../app/vues/template/defaut.php'; // on affiche $zone1
  }
  include_once '../noyau/connexionKill.php';
