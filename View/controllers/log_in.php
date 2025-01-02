<?php 
session_start(); 

require_once '../includes/body.php'; 



generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', '');
generatenav('recherche.php');
login('users.json');
generatefooter('../media/res.jpg');
generateboottraap(); 
?>