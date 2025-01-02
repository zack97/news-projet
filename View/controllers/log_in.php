<?php 

/**************************
 * Ce controller contient  toute la structure de la page login en régroupant ses fonctions un après l'autre
 * tout en définissant les valeurs des paramètres 
 * 
 * ********************************************************************************** */



session_start(); 

require_once '../includes/body.php'; 



generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', '');
generatenav('recherche.php');
login('users.json');
generatefooter('../media/res.jpg');
generateboottraap(); 
?>