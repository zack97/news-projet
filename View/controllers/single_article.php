<?php
/**************************
 * Ce controller gère d'article unique et toute sa structure incluant du javascript 
 * pour la gestion du slider qui affiche la durée de lecture min au max et une fois
 * au max il nous redirige à l'acceuil
 * 
 * ********************************************************************************** */





session_start();

require_once '../includes/body.php'; 

generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', 'log_in.php');
generatenav('recherche.php');

$jsonFilePath = '../../Model/articles.json';

// Récupérer l'ID de l'article depuis l'URL
$articleId = $_GET['id'] ?? null;

if (!$articleId) {
    echo "ID de l'article invalide.";
    exit;
}

// Charger les articles depuis le fichier JSON
$articles = json_decode(file_get_contents($jsonFilePath), true);

if (!$articles) {
    echo "Erreur : Impossible de charger les articles.";
    exit;
}

// Rechercher l'article dans les sections 'latest' et 'featured'
$article = null;
foreach (['latest', 'featured'] as $section) {
    if (isset($articles[$section])) {
        foreach ($articles[$section] as $art) {
            if ($art['id'] == $articleId) {
                $article = $art;
                break 2; // Quitter les deux boucles
            }
        }
    }
}

if (!$article) {
    echo "Article introuvable.";
    exit;
}

// Définir les valeurs pour le slider
$minReadingTime = 1;  // Minimum en secondes
$maxReadingTime = 20; // Maximum en secondes
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?></title>
</head>
<body>
    <div class="container mt-3">
        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
        <p><small>Publié le <?php echo htmlspecialchars($article['published']); ?></small></p>

        <?php if (!empty($article['image'])) { ?>  
            <img src="<?php echo htmlspecialchars(str_replace('/View', '.', $article['image'])); ?>" alt="Image de l'article" class="img-fluid mb-3"> 
        <?php } ?>

        <p><?php echo htmlspecialchars($article['content']); ?></p>
        <small>Source : <?php echo htmlspecialchars($article['source']); ?></small>

    </div>


<?php
generatefooter('../media/res.jpg');
generateboottraap(); 
?>
