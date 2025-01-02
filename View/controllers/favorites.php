<?php
session_start();

// Initialiser un tableau pour les favoris si ce n'est pas déjà fait
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}

// Vérifier si un article a été ajouté
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];

    // Ajouter l'article à la liste des favoris s'il n'y est pas déjà
    if (!in_array($articleId, $_SESSION['favorites'])) {
        $_SESSION['favorites'][] = $articleId;
        
        // Réponse en JSON avec un message de succès
        echo json_encode([
            'status' => 'success',
            'message' => 'Article ajouté aux favoris!'
        ]);
    } else {
        // Si l'article est déjà dans les favoris, envoyer une erreur
        echo json_encode([
            'status' => 'error',
            'message' => 'Cet article est déjà dans vos favoris.'
        ]);
    }
} else {
    // Si la méthode POST ou article_id n'est pas défini, renvoyer une erreur
    echo json_encode([
        'status' => 'error',
        'message' => 'Requête invalide.'
    ]);
}
exit;
?>
