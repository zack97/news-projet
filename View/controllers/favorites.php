<?php

/**************************
 * Ce controller verifie si l'utilisateur a le droit d'ajouter un article au favois puis renvoie
 * un message et status adéquate, verifie ensuite si l'article a déjà été ajouter au préalable 
 * 
 * ***************************************************************************************** */




session_start();

//  On vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    // Si l'utilisateur n'est pas connecté, renvoyer une erreur
    echo json_encode([
        'status' => 'error',
        'message' => 'You must be connected to do that action'
    ]);
    exit; 
}

// On initialise le tableau pour les favoris si ce n'est pas déjà fait
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}

// On vérifie si un article a été ajouté
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];

    // On ajoute l'article à la liste des favoris s'il n'y est pas déjà
    if (!in_array($articleId, $_SESSION['favorites'])) {
        $_SESSION['favorites'][] = $articleId;
        
        // Réponse en JSON avec un message de succès
        echo json_encode([
            'status' => 'success',
            'message' => 'Article added successfully!'
        ]);
    } else {
        // Si l'article est déjà dans les favoris, envoyer une erreur
        echo json_encode([
            'status' => 'error',
            'message' => 'Article already added'
        ]);
    }
} else {
    // Si la méthode POST ou article_id n'est pas défini, on renvoi une erreur
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalide request'
    ]);
}
exit;
?>
