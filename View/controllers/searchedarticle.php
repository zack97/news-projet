<?php
/**************************
 * Ce controller contient  toute la structure de la page articles rechercher, en régroupant 
 * ses fonctions un après l'autre tout en définissant les valeurs des paramètres 
 * 
 * ********************************************************************************** */


session_start();

require_once '../includes/body.php';  




generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', 'log_in.php', 'logout.php','../../favorites_list.php');
generatenav('recherche.php');



// On vérifie si les résultats de la recherche existent dans la session
if (!isset($_SESSION['search_results']) || empty($_SESSION['search_results'])) {
    echo "Aucun résultat trouvé.";
    exit;
}


// On récupére les résultats de la session
$searchResults = $_SESSION['search_results'];


foundarticle($searchResults);
generatefooter('../media/res.jpg');
generateboottraap(); 
?>
