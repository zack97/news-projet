<?php

session_start();
session_unset();  // Supprimer toutes les variables de session
session_destroy();  // Détruire la session
echo "<script type='text/javascript'>
            window.location.href = '/index.php';
      </script>";
    exit();

?>