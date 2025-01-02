<?php

session_start();
require_once './View/includes/body.php'; 


generatehead('./View/assets/css/main.css');
generateHeader('./View/media/news.jpg', './View/controllers/log_in.php', './View/controllers/logout.php', './favorites_list.php');
generatenav('./View/controllers/recherche.php');


function favori(){

// Vérifier si des favoris sont enregistrés dans la session
if (isset($_SESSION['favorites']) && !empty($_SESSION['favorites'])) {
    // Les articles sont récupérés depuis la session
    $favorites = $_SESSION['favorites'];

    // Charger les articles complets depuis un fichier JSON (similaire à generatearticle)
   
    $articles = json_decode(file_get_contents('./Model/articles.json'), true);

    if (!$articles) {
        echo "Erreur : Impossible de charger les articles.";
        exit;
    }

    // Filtrer les articles favoris
    $favoriteArticles = array_filter($articles['latest'], function($article) use ($favorites) {
        return in_array($article['id'], $favorites);
    });

    if (empty($favoriteArticles)) {
        echo "Aucun article dans vos favoris.";
        exit;
    }
} else {
    echo "Aucun article dans vos favoris.";
    exit;
}
?>
    <div class="container mt-3">
        <h1>Liste de vos favoris</h1>

        <?php foreach ($favoriteArticles as $article) { ?>
            <article class="mb-3">
                <div>
                    <small>Publié le <?php echo htmlspecialchars($article['published']); ?></small>
                </div>
                <?php if (!empty($article['image'])) { ?>
                    <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="image" class="mr-2 image-size">
                <?php } ?>
                <a href="<?php echo htmlspecialchars($article['link']); ?>">
                    <h3 class="h6"><?php echo htmlspecialchars($article['title']); ?></h3>
                </a>
                <p><?php echo htmlspecialchars($article['content']); ?></p>
                <small>Source : <?php echo htmlspecialchars($article['source']); ?></small>
                
                <form action="./View/controllers/remove_favorite.php" method="POST" style="display:inline;">
                    <input type="hidden" name="article_id" value="<?php echo htmlspecialchars($article['id']); ?>">
                    <button type="submit" class="btn btn-sm btn-danger">Supprimer des favoris</button>
                </form>
            </article>
        <?php } ?>
    </div>
<?php

}

favori();

generatefooter();
generateboottraap();


?>