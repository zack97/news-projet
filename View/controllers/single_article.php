<?php

session_start();


require_once '../includes/body.php'; 



generatehead('../assets/css/main.css');
generateHeader('../media/news.jpg', 'log_in.php');
generatenav('recherche.php');



$jsonFilePath = '../../Model/articles.json'; // Replace with the correct path to your JSON file

// Get the article ID from the URL
$articleId = $_GET['id'] ?? null;

if (!$articleId) {
    echo "Invalid article ID.";
    exit;
}

// Load the articles from the JSON file
$articles = json_decode(file_get_contents($jsonFilePath), true);

if (!$articles) {
    echo "Error: Unable to load articles.";
    exit;
}

// Find the article in both 'latest' and 'featured' sections
$article = null;

foreach (['latest', 'featured'] as $section) {
    if (isset($articles[$section])) {
        foreach ($articles[$section] as $art) {
            if ($art['id'] == $articleId) {
                $article = $art;
                break 2; // Exit both loops
            }
        }
    }
}

if (!$article) {
    echo "Article not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?></title>
</head>
<body>
    <div class="container mt-3">
        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
        <p><small>Published on <?php echo htmlspecialchars($article['published']); ?></small></p>

        <?php if (!empty($article['image'])) { ?>  
            <img src="<?php echo htmlspecialchars(str_replace('/View', '.', $article['image'])); ?>" alt="Article Image" class="img-fluid mb-3"> 
        <?php } ?>

        <p><?php echo htmlspecialchars($article['content']); ?></p>
        <small>Source: <?php echo htmlspecialchars($article['source']); ?></small>

        <div>
            <a href="index.php" class="btn btn-primary">Back to Articles</a>
        </div>
    </div>
<?php


generatefooter('../media/res.jpg');
generateboottraap(); 

?>
