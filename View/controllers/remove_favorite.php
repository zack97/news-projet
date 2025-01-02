<?php
session_start();

// Vérifier si l'article ID est présent dans les données POST
if (isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];

    // Vérifier si l'article existe dans les favoris
    if (in_array($articleId, $_SESSION['favorites'])) {
        // Supprimer l'article des favoris
        $_SESSION['favorites'] = array_diff($_SESSION['favorites'], [$articleId]);

        // Rediriger vers la liste des favoris avec un message de succès
        $_SESSION['message'] = 'Article supprimé des favoris.';
    } else {
        // Message d'erreur si l'article n'est pas dans les favoris
        $_SESSION['message'] = 'Cet article n\'est pas dans vos favoris.';
    }

    // Rediriger vers la page des favoris
    echo "<script type='text/javascript'>
            window.location.href = '/favorites_list.php';
      </script>";
    exit();
} else {
    // Si aucune donnée POST n'est envoyée, rediriger vers la page des favoris
    header('Location: favorites_list.php');
    exit;
}
