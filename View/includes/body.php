<?php

/**************************
 * Cette fonction contient le head, meta .. du site.
 *               GENERATEHEAD()
 * *************************************************** */

function generatehead($cssPath=''){ ?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Newswire Jamaica</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="<?php echo htmlspecialchars($cssPath)?>" />
  </head>
  <body>
<?php
}





/***************************************************************************************** */






/**************************
 * Cette fonction contient le header du site.
 *               GENERATEHEADER()
 * *************************************************** */


function generateHeader($logoPath = '', $loginPath = '', $logoutaction='', $favoritesPath='') {
    ?>
    <header class="bg-light py-3">
        <div class="container">
            <div class="row align-items-center header-ul">
                <div class="col-md-3 text-center text-md-left">
                    <a href="../../index.php">
                        <img src="<?php echo htmlspecialchars($logoPath); ?>" alt="icone_news" class="logo img-fluid" />
                    </a>
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <ul class="list-unstyled d-flex flex-column flex-md-row justify-content-md-end mb-0">
                        <?php if (isset($_SESSION['user'])): ?>
                            <!-- Si l'utilisateur est connecté -->
                            <li class="mr-md-3">
                                <a href="<?php echo htmlspecialchars($favoritesPath); ?>" class="btn btn-outline-primary">Favorites</a>
                            </li>
                            <li class="mr-md-3">| Welcome - <span class="text-success"><?php echo htmlspecialchars($_SESSION['user']['username']); ?></span></li>
                            <li class="mr-md-3">
                                <form action="<?php echo htmlspecialchars($logoutaction)?>" method="POST">
                                    <button type="submit" class="btn btn-danger">Log Out</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <!-- Si l'utilisateur n'est pas connecté -->
                            <li class="mr-md-3">Questions? +1 (202) 335-3939</li>
                            <li class="mr-md-3">Contact</li>
                            <li class="mr-md-3">
                                <a href="<?php echo htmlspecialchars($loginPath); ?>" class="btn btn-primary">Log In</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <?php
}





/***************************************************************************************** */





/**************************
 * Cette fonction contient la nav du site.
 *               GENERATENAV()
 * *************************************************** */


function generatenav($recherchePath=''){
    ?>
   <nav class="bg-dark text-white py-2">
        <div class="container">
            <div class="row ">
                <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="aboutDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </button>
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="#">About EIN Presswire</a>
                            <a class="dropdown-item" href="#">How We Are Different. Better</a>
                            <a class="dropdown-item" href="#">How It Works</a>
                            <a class="dropdown-item" href="#">Testimonials</a>
                            <a class="dropdown-item" href="#">Contact</a>
                            <a class="dropdown-item" href="#">EIN Presswire in the News</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark w-100" type="button">Pricing</button>
                </div>
                <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="distributionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Distribution
                        </button>
                        <div class="dropdown-menu" aria-labelledby="distributionDropdown">
                            <a class="dropdown-item" href="#">Distribution Overview</a>
                            <a class="dropdown-item" href="#">Media Database</a>
                            <a class="dropdown-item" href="#">Major News Sites</a>
                            <a class="dropdown-item" href="#">U.S. TV & Radio Stations</a>
                            <a class="dropdown-item" href="#">U.S. & International Newswires</a>
                            <a class="dropdown-item" href="#">Newswires by Industry</a>
                            <a class="dropdown-item" href="#">Newswires by Country</a>
                            <a class="dropdown-item" href="#">Newswires by U.S. state</a>
                            <a class="dropdown-item" href="#">Mobile Apps</a>
                            <a class="dropdown-item" href="#">NewsPlugin</a>
                            <a class="dropdown-item" href="#">NLive Feed</a>
                            <a class="dropdown-item" href="#">Sample Distribution Report</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="pressReleasesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Press Releases
                        </button>
                        <div class="dropdown-menu" aria-labelledby="pressReleasesDropdown">
                            <a class="dropdown-item" href="#">All</a>
                            <a class="dropdown-item" href="#">Featured</a>
                            <a class="dropdown-item" href="#">By Industry</a>
                            <a class="dropdown-item" href="#">By country</a>
                            <a class="dropdown-item" href="#">By U.S. state</a>
                            <a class="dropdown-item" href="#">Archive</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="newswiresDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Newswires
                        </button>
                        <div class="dropdown-menu" aria-labelledby="newswiresDropdown">
                            <a class="dropdown-item" href="#">U.S. & International Newswires</a>
                            <a class="dropdown-item" href="#">Newswires by Industry</a>
                            <a class="dropdown-item" href="#">Newswires by Country</a>
                            <a class="dropdown-item" href="#">Newswires by US State</a>
                            <a class="dropdown-item" href="#">Live Feed</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="knowledgeBaseDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Knowledge Base
                        </button>
                        <div class="dropdown-menu" aria-labelledby="knowledgeBaseDropdown">
                            <a class="dropdown-item" href="#">Editorial Guidelines</a>
                            <a class="dropdown-item" href="#">Getting Started Guide (PDF)</a>
                            <a class="dropdown-item" href="#">Video Tutorials</a>
                            <a class="dropdown-item" href="#">How to Write Great Press Release</a>
                            <a class="dropdown-item" href="#">FAQs</a>
                            <a class="dropdown-item" href="#">RSS Feeds</a>
                            <a class="dropdown-item" href="#">Email Newsletters</a>
                            <a class="dropdown-item" href="#">News Alert Maker</a>
                            <a class="dropdown-item" href="#">Affiliate Program</a>
                        </div>
                    </div>
                </div>
				<div class="col-md-12 nav_search">
                    <button class="btn btn-dark w-100" type="button"><a href= "<?php echo htmlspecialchars($recherchePath); ?>">Search Articles</a></button>
                </div>
            </div>
        </div>
    </nav>
    <?php
}





/***************************************************************************************** */



/**************************
 * Cette fonction charge tous les articles depuis le fichier JSON et envoi des requêtes d'ajouts aux favoris
 *               GENERATEARTICLE()
 * *************************************************** */


 function generatearticle($jsonFilePath) {
    // Charger les articles depuis le fichier JSON
    $articles = json_decode(file_get_contents($jsonFilePath), true);

    if (!$articles || !isset($articles['latest']) || !isset($articles['featured'])) {
        echo "Erreur : Impossible de charger les articles.";
        return;
    }
    ?>

    <div class="container mt-3">
        <!-- Alert Placeholder -->
        <div id="alertPlaceholder" class="position-fixed top-0 end-0 m-3" style="z-index: 1050;"></div>
        <div class="contenu">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="h5">Dates and Titles of Articles</h2>
                    <ul class="list-unstyled">
                        <!-- Boucle pour afficher les articles avec date et titre -->
                        <?php foreach (array_merge($articles['latest'],$articles['featured']) as $article) { ?>
                            <li>
                                <strong><?php echo htmlspecialchars($article['published']); ?></strong> -
                                <a href="./View/controllers/single_article.php?id=<?php echo htmlspecialchars($article['id']); ?>">
                                    <?php echo htmlspecialchars($article['title']); ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- Section Latest Articles -->
                <div class="col-md-6">
                    <h2 class="h5">Latest Press Releases</h2>

                    <?php foreach ($articles['latest'] as $article) { ?>
                        <article class="mb-3">
                            <div>
                                <small>Reading time : <?php echo htmlspecialchars($article['duree']); ?>min</small>
                                <br><small>Published on <?php echo htmlspecialchars($article['published']); ?></small></br>
                            </div>
                            <?php if (!empty($article['image'])) { ?>
                                <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="small image" class="mr-2 image-size">
                            <?php } ?>
                            <a href="./View/controllers/single_article.php?id=<?php echo htmlspecialchars($article['id']); ?>">
                                <h3 class="h6"><?php echo htmlspecialchars($article['title']); ?></h3>
                            </a>

                            <p><?php echo htmlspecialchars($article['content']); ?></p>
                            <small>Source: <?php echo htmlspecialchars($article['source']); ?></small>
                            <button 
                                class="btn btn-sm btn-outline-primary add-to-favorites" 
                                data-article-id="<?php echo htmlspecialchars($article['id'] ?? $article['link']); ?>">
                                Add to favorites
                            </button>
                        </article>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <h2 class="h5">Featured Releases</h2>

                    <?php foreach ($articles['featured'] as $article) { ?>
                        <article class="mb-3">
                            <div>
                                <small>Reading time : <?php echo htmlspecialchars($article['duree']); ?>min</small>
                                <br><small>Published on <?php echo htmlspecialchars($article['published']); ?></small></br>
                            </div>
                            <?php if (!empty($article['image'])) { ?>
                                <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="small image" class="mr-2 image-size">
                            <?php } ?>
                            <a href="./View/controllers/single_article.php?id=<?php echo htmlspecialchars($article['id']); ?>">
                                <h3 class="h6"><?php echo htmlspecialchars($article['title']); ?></h3>
                            </a>
                            <p><?php echo htmlspecialchars($article['content']); ?></p>
                            <button
                                    class="btn btn-sm btn-outline-primary add-to-favorites"
                                    data-article-id="<?php echo htmlspecialchars($article['id'] ?? $article['link']); ?>">
                                Add to favorites
                            </button>

                        </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alertPlaceholder = document.getElementById('alertPlaceholder');

            // Fonction pour afficher une alerte
            function showAlert(message, type) {
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
                alertDiv.role = 'alert';
                alertDiv.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                alertPlaceholder.appendChild(alertDiv);

                // Supprime l'alerte après 5 secondes
                setTimeout(() => {
                    alertDiv.remove();
                }, 2000);
            }

            // On ajoute un écouteur pour les boutons d'ajout aux favoris
            document.querySelectorAll('.add-to-favorites').forEach(button => {
                button.addEventListener('click', function () {
                    const articleId = this.dataset.articleId;

                    fetch('./View/controllers/favorites.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams({
                            'article_id': articleId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            showAlert(data.message, 'success');
                        } else {
                            showAlert(data.message, 'danger');
                        }
                    })
                    .catch(error => {
                        showAlert('Erreur lors de la requête.', 'danger');
                        console.error(error);
                    });
                });
            });
        });
    </script>
    <?php
}





/***************************************************************************************** */




/**************************
 * Cette fonction contient le footer du site.
 *               GENERATEHEADER()
 * *************************************************** */

function generatefooter($iconImg='./View/media/res.jpg'){
    ?>
     <footer class="footer">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-4 col-lg-2 bloc">
                      <h3>PR Distribution</h3>
                      <ul>
                          <li>How It Works</li>
                          <li>Why Us</li>
                          <li>Pricing</li>
                          <li>Distribution</li>
                          <li>Editorial Guidelines</li>
                      </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-2 bloc">
                      <h3>Newswires</h3>
                      <ul>
                          <li>All Newswires</li>
                          <li>World Newswires</li>
                          <li>US Newswires</li>
                          <li>Industry Newswires</li>
                      </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-2 bloc">
                      <h3>Press Releases</h3>
                      <ul>
                          <li>All Press Releases</li>
                          <li>Releases by Country</li>
                          <li>Releases by US State</li>
                          <li>Releases by Industry</li>
                          <li>Releases by Date</li>
                      </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-2 bloc">
                      <h3>Press Resources</h3>
                      <ul>
                          <li>World Media Directory</li>
                          <li>Mobile App</li>
                          <li>Affiliate Program</li>
                          <li>RSS Feeds</li>
                          <li>Email Newsletters</li>
                          <li>News Alert Maker</li>
                          <li>NewsPlugin</li>
                      </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-2 bloc">
                      <h3>Help/Support</h3>
                      <ul>
                          <li>FAQ</li>
                          <li>Video Tutorials</li>
                          <li>Client Testimonials</li>
                      </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-2 bloc">
                      <h3>About</h3>
                      <ul>
                          <li>About EIN Presswire</li>
                          <li>Newsroom</li>
                          <li>Investor Inquiries</li>
                          <li>Career Opportunities</li>
                          <li>Contact</li>
                          <li>Follow EIN Presswire</li>
                      </ul>
                      <img src="<?php echo htmlspecialchars($iconImg)?>" alt="icone_res" class="img-fluid">
                  </div>
              </div>
              <div class="row sous">
                  <div class="col-12 col-md-3 text-center text-md-left">
                      <h6>User Agreement</h6>
                  </div>
                  <div class="col-12 col-md-3 text-center text-md-left">
                      <h6>Privacy Policy</h6>
                  </div>
                  <div class="col-12 col-md-3 text-center text-md-left">
                      <h6>Copyright Policy</h6>
                  </div>
                  <div class="col-12 col-md-3 text-center text-md-left">
                      <h6>©1995-2024 Newsmatics Inc. dba EIN Presswire All Rights Reserved.</h6>
                  </div>
              </div>
          </div>
      </footer>
  
    <?php
  }
  




/***************************************************************************************** */




/**************************
 * Cette fonction contient les liens bootsraap et la fermeture du body et html du site.
 *               GENERATEBOOTTRAAP()
 * *************************************************** */



function generateboottraap(){
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    </body>
</html>
    <?php
}






/***************************************************************************************** */




/**************************
 * Cette fonction gere le login du site.
 *               LOGIN()
 * *************************************************** */




function login($jsonUserPath) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $rememberMe = isset($_POST['remember']) ? true : false;  // Gérer "Se souvenir de moi"

        // Charger les utilisateurs depuis le fichier JSON
        $users = json_decode(file_get_contents($jsonUserPath), true);

        // Vérifier si l'email existe
        foreach ($users['users'] as $user) {
            if ($user['email'] === $email) {
                // Vérifier le mot de passe
                if (password_verify($password, $user['password'])) {
                    // Connexion réussie
                    $_SESSION['user'] = $user;

                    // Si "Se souvenir de moi" est coché, créer un cookie
                    if ($rememberMe) {
                        $cookieValue = base64_encode($email . '|' . $password);
                        setcookie('remember_me', $cookieValue, time() + 3600 * 24 * 3, '/');  // Durée du cookie 3 jours
                    }

                    // Redirection vers la page d'accueil
                    echo "<script type='text/javascript'>
                              window.location.href = '/index.php';
                          </script>";
                    exit();
                } else {
                    echo "Invalid password.";
                    return;
                }
            }
        }

        echo "No user found with that email.";
    }
?>

    <div class="container full-height d-flex justify-content-center align-items-center">
        <div class="login-container">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-group remember">
                    <span>Remember Me </span>
                    <label for="remember" >
                        <input type="checkbox" id="remember" name="remember"> 
                    </label>
                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>
            </form>
            <div class="signup-link">
                <p style="color: black;">Don't have an account?</p>
                <p><a href="sign_up.php">Sign up here</a>.</p>
            </div>
        </div>
    </div>

<?php
}





/***************************************************************************************** */




/**************************
 * Cette fonction gère la création de compte sur le site.
 *               SIGNUP()
 * *************************************************** */



function signup($jsonUserPath) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirm-password']);

        // Vérification des mots de passe
        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
            return;
        }

        // Charger les utilisateurs depuis le fichier JSON
        $users = json_decode(file_get_contents($jsonUserPath), true);

        // Vérifier si l'email existe déjà
        foreach ($users['users'] as $user) {
            if ($user['email'] === $email) {
                echo "Email is already taken.";
                return;
            }
        }

        // Hacher le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Ajouter l'utilisateur au tableau
        $users['users'][] = [
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword
        ];

        // Sauvegarder les utilisateurs dans le fichier JSON
        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

        echo "User registered successfully!";
    }
    ?>

    <div class="container full-height d-flex justify-content-center align-items-center">
        <div class="signup-container">
            <h1>Sign Up</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
            <div class="login-link">
                <p style="color: black;">Already have an account?</p>
                <p><a href="log_in.php">Log in here</a>.</p>
            </div>
        </div>
    </div>

<?php
}






/***************************************************************************************** */





/**************************
 * Cette fonction contient le formulaire de recherche d'articles sur le site.
 *               RECHERCHEFORMULAIRE()
 * *************************************************** */


 function rechercheformulaire() {
    ?>
    <div class="container mt-3">
        <h1 class="text-center">Rechercher des Articles</h1>
        <form method="POST" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="readingTimeMin">Temps de Lecture Minimum (en minutes)</label>
                    <input 
                        type="range" 
                        class="form-control-range" 
                        id="readingTimeMin" 
                        name="readingTimeMin" 
                        min="1" 
                        max="60" 
                        value="10" 
                        oninput="document.getElementById('minTimeValue').textContent = this.value">
                    <small>Valeur : <span id="minTimeValue">10</span> minutes</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="readingTimeMax">Temps de Lecture Maximum (en minutes)</label>
                    <input 
                        type="range" 
                        class="form-control-range" 
                        id="readingTimeMax" 
                        name="readingTimeMax" 
                        min="1" 
                        max="60" 
                        value="60" 
                        oninput="document.getElementById('maxTimeValue').textContent = this.value">
                    <small>Valeur : <span id="maxTimeValue">60</span> minutes</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
    <?php

    // Traiter le formulaire si soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jsonFilePath = '../../Model/articles.json'; // Chemin vers le fichier JSON contenant les articles
        $filteredArticles = rechercheArticles($jsonFilePath); // Obtenir les articles filtrés
        if (empty($filteredArticles)) {
            // Afficher le message si aucun article n'est trouvé
            echo "<div class='alert alert-warning text-center'>Aucun article trouvé pour cette plage de temps de lecture.</div>";
        } else {
            // Afficher les articles filtrés
            foundarticle($filteredArticles);
        }
    }
}






/***************************************************************************************** */





/**************************
 * Cette fonction gère l'envoi des requêtes de recherche d'articles au serveur
 *               RECHERCHEARTICLES()
 * *************************************************** */


 function rechercheArticles($jsonFilePath) {
    // Charger les articles depuis le fichier JSON
    $articles = json_decode(file_get_contents($jsonFilePath), true);

    if (!$articles) {
        echo "<div class='alert alert-danger'>Erreur : Impossible de charger les articles.</div>";
        return [];
    }

    // Récupérer les données du formulaire
    $readingTimeMin = isset($_POST['readingTimeMin']) ? (int) $_POST['readingTimeMin'] : 0;
    $readingTimeMax = isset($_POST['readingTimeMax']) ? (int) $_POST['readingTimeMax'] : PHP_INT_MAX;

    $filteredArticles = [];

    // Parcourir les sections d'articles
    foreach (['latest', 'featured'] as $section) {
        if (isset($articles[$section])) {
            foreach ($articles[$section] as $article) {
                $readingTime = $article['duree'] ?? ''; // Utiliser 0 si non défini
                if ($readingTime >= $readingTimeMin && $readingTime <= $readingTimeMax) {
                    $filteredArticles[] = $article;
                }
            }
        }
    }

    return $filteredArticles; // Retourner les articles filtrés
}






/***************************************************************************************** */





/**************************
 * Cette fonction contient les articles retrouver après recherche
 *               FOUNDARTICLES()
 * *************************************************** */


 function foundarticle($articles) {

    ?>
   
       <div class="container mt-3">
           <div class="row">
               <div class="col-12">
                   <h1 class="text-center text-md-left">Résultats de la Recherche</h1>
               </div>
           </div>
   
           <div class="contenu">
               <div class="row">
                   <div class="col-md-12">
                       <?php foreach ($articles as $article) { ?>
                           <article class="mb-3 border-bottom pb-3">
                               <div>
                                   <small>Publié le <?php echo htmlspecialchars($article['published'] ?? 'Date inconnue'); ?></small>
                               </div>
                               <?php if (!empty($article['image'])) { ?>
                                   <img src="<?php echo htmlspecialchars(str_replace('/View', '.', $article['image'])); ?>" 
                                        alt="Image de l'article" class="mr-2 image-size">
                               <?php } ?>
                               <a href="single_article.php?id=<?php echo htmlspecialchars($article['id'] ?? ''); ?>">
                                   <h3 class="h6"><?php echo htmlspecialchars($article['title']); ?></h3>
                               </a>
                               <p><?php echo htmlspecialchars($article['content']); ?></p>
                               <small>Source : <?php echo htmlspecialchars($article['source'] ?? 'Source inconnue'); ?></small>
                               <div>Temps de lecture : 
                                   <strong><?php echo htmlspecialchars($article['duree'] ?? 'N/A'); ?> minutes</strong>
                               </div>
                           </article>
                       <?php } ?>
                   </div>
               </div>
           </div>
       </div>
   
       <?php
       }
      


?>