<?php

require_once '../includes/body.php'; 



generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', './View/controllers/log_in.php');
generatenav('recherche.php');
signup('users.json');
generatefooter('../media/res.jpg');
generateboottraap(); 
