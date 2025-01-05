<?php
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
$maxReadingTime = 10; // Maximum en secondes
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?></title>
    <style>
        .slider-container {
            margin: 20px 0;
        }

        .slider {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, #28a745, #007bff);
            border-radius: 5px;
            outline: none;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #ffc107;
            border-radius: 50%;
            cursor: pointer;
        }

        .slider-value, .slider-min-max {
            font-size: 16px;
            font-weight: bold;
        }

        .slider-min-max {
            display: flex;
            justify-content: space-between;
        }
    </style>
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

        <!-- Section Slider -->
        <div class="slider-container">
            <label for="readingTimeSlider">Temps de lecture restant :</label>
            <input 
                type="range" 
                id="readingTimeSlider" 
                class="slider" 
                min="<?php echo $minReadingTime; ?>" 
                max="<?php echo $maxReadingTime; ?>" 
                value="<?php echo $minReadingTime; ?>" 
                readonly>
            <div class="slider-min-max">
                <span>Minimum : <?php echo $minReadingTime; ?> sec</span>
                <span>Maximum : <?php echo $maxReadingTime; ?> sec</span>
            </div>
            <div>
                <span>Temps restant : </span>
                <span class="slider-value" id="sliderValue"><?php echo $minReadingTime; ?></span> secondes
            </div>
        </div>

        
    </div>

    <script>
        // Fonction pour animer le slider
        const slider = document.getElementById('readingTimeSlider');
        const sliderValue = document.getElementById('sliderValue');
        const maxValue = parseInt(slider.max);
        const minValue = parseInt(slider.min);
        let currentValue = minValue;

        function animateSlider() {
            if (currentValue >= maxValue) {
                // Redirection une fois la valeur maximale atteinte
                window.location.href = '/index.php';
            } else {
                // Incrémenter la valeur du slider
                currentValue++;
                slider.value = currentValue;
                sliderValue.textContent = currentValue;

                // Répéter après 1 seconde
                setTimeout(animateSlider, 1000);
            }
        }

        // Démarrer l'animation du slider au chargement de la page
        document.addEventListener('DOMContentLoaded', animateSlider);
    </script>
</body>
</html>

<?php
generatefooter('../media/res.jpg');
generateboottraap(); 
?>
