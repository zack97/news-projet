<?php
session_start();

require_once '../includes/body.php';  




generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', 'log_in.php', 'logout.php');
generatenav('recherche.php');



// Vérifier si les résultats de la recherche existent dans la session
if (!isset($_SESSION['search_results']) || empty($_SESSION['search_results'])) {
    echo "Aucun résultat trouvé.";
    exit;
}


// Récupérer les résultats de la session
$searchResults = $_SESSION['search_results'];


foundarticle($searchResults);
generatefooter('../media/res.jpg');
generateboottraap(); 
?>
