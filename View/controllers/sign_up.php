<?php
/**************************
 * Ce controller contient  toute la structure de la page création de compte en régroupant 
 * ses fonctions un après l'autre tout en définissant les valeurs des paramètres 
 * 
 * ********************************************************************************** */


session_start(); 

require_once '../includes/body.php'; 



generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', 'log_in.php');
generatenav('recherche.php');
signup('users.json');
generatefooter('../media/res.jpg');
generateboottraap(); 
