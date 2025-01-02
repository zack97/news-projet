<?php 
require_once './View/includes/body.php'; 



generatehead('./View/assets/css/main.css');
generateHeader('./View/media/news.jpg', './View/controllers/log_in.php');
generatenav('./View/controllers/recherche.php');
generatearticle('./Model/articles.json');
generatefooter();
generateboottraap();



?>