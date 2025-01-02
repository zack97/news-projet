<?php 
/**************************
 * Ce controller contient  toute la structure de la page d'accueil en régroupant ses fonctions un après l'autre
 * tout en définissant les valeurs des paramètres 
 * 
 * ********************************************************************************** */


session_start(); 

require_once './View/includes/body.php'; 



generatehead('./View/assets/css/main.css');
generateHeader('./View/media/news.jpg', './View/controllers/log_in.php', './View/controllers/logout.php', './favorites_list.php');
generatenav('./View/controllers/recherche.php');
generatearticle('./Model/articles.json');
generatefooter();
generateboottraap();



?>