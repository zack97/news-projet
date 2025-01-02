<?php 
session_start(); 


require_once '../includes/body.php';  




generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', 'log_in.php', 'logout.php');
generatenav('');
rechercheformulaire();
rechercheArticles('../../Model/articles.json');
generatefooter('../media/res.jpg');
generateboottraap(); 
?>