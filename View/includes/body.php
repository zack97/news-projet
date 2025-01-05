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

        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-md-left">Jamaica Newswire</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li class="font-weight-bold">
                        JAMAICA NEWSWIRE IS READ BY LEADERS IN BUSINESS AND GOVERNMENT WORLDWIDE
                    </li>
                    <li>
                        Get Newswire by Email • RSS • Jamaica News Topics • Jamaica Media Directory • Newswires by Country
                    </li>
                </ul>
            </div>
            <div class="col-12 text-right">
                <img src="./View/media/resco.jpg" alt="icone_resco" class="mr-2 image-size">
            </div>
        </div>

        <div class="contenu">
            <div class="row">
                <!-- Section Latest Articles -->
                <div class="col-md-8">
                    <h2 class="h5">Latest Press Releases</h2>

                    <?php foreach ($articles['latest'] as $article) { ?>
                        <article class="mb-3">
                            <div>
                                <small>Published on <?php echo htmlspecialchars($article['published']); ?></small>
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
                                Ajouter aux favoris
                            </button>
                        </article>
                    <?php } ?>
                </div>

                <!-- Section Featured Articles -->
                <div class="col-md-4">
                    <h2 class="h5">Featured Releases</h2>

                    <?php foreach ($articles['featured'] as $featured) { ?>
                        <article class="mb-3">
                            <div>
                                <small>Published on <?php echo htmlspecialchars($featured['published']); ?></small>
                            </div>
                            <?php if (!empty($featured['image'])) { ?>
                                <img src="<?php echo htmlspecialchars($featured['image']); ?>" alt="small image" class="mr-2 image-size">
                            <?php } ?>
                            <h3 class="h6"><?php echo htmlspecialchars($featured['title']); ?></h3>
                            <p><?php echo htmlspecialchars($featured['content']); ?></p>
                            <small>Distribution channels: <?php echo htmlspecialchars($featured['distribution']); ?></small>
                            
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
        <h1 class="text-center">Search Articles</h1>
        <form method="POST" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="keywordTitleSummary">Keyword in Title/Summary</label>
                    <input type="text" class="form-control" id="keywordTitleSummary" name="keywordTitleSummary" placeholder="Enter keyword">
                </div>
                <div class="form-group col-md-6">
                    <label for="keywordBody">Keyword in Body</label>
                    <input type="text" class="form-control" id="keywordBody" name="keywordBody" placeholder="Enter keyword">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Date">Date</label>
                    <input type="date" class="form-control" id="Date" name="Date">
                </div>
                <div class="form-group col-md-4">
                    <label for="category">Category/Hashtags</label>
                    <select class="form-control" id="category" name="category">
                        <option selected>Choose...</option>
                        <option>Politics</option>
                        <option>Health</option>
                        <option>Technology</option>
                        <option>Entertainment</option>
                        <option>Sports</option>
                        <option>Business</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="limit">Limit Number of Articles</label>
                    <input type="number" class="form-control" id="limit" name="limit" placeholder="Enter number">
                </div>
                <div class="form-group col-md-6">
                    <label for="sort">Sort By</label>
                    <select class="form-control" id="sort" name="sort">
                        <option selected>Choose...</option>
                        <option>Date</option>
                        <option>Relevance</option>
                        <option>Popularity</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <?php
}






/***************************************************************************************** */





/**************************
 * Cette fonction gère l'envoi des requêtes de recherche d'articles au serveur
 *               RECHERCHEARTICLES()
 * *************************************************** */


function rechercheArticles($jsonFilePath) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Charger les articles depuis le fichier JSON
        $articles = json_decode(file_get_contents($jsonFilePath), true);
        
        // Récupérer les données du formulaire
        $keywordTitleSummary = isset($_POST['keywordTitleSummary']) ? trim($_POST['keywordTitleSummary']) : '';
        $keywordBody = isset($_POST['keywordBody']) ? trim($_POST['keywordBody']) : '';
        $date = isset($_POST['Date']) ? $_POST['Date'] : '';
        $category = isset($_POST['category']) && $_POST['category'] !== 'Choose...' ? $_POST['category'] : '';
        $limit = isset($_POST['limit']) && is_numeric($_POST['limit']) ? (int) $_POST['limit'] : null;
        $sort = isset($_POST['sort']) && $_POST['sort'] !== 'Choose...' ? $_POST['sort'] : '';

        $results = [];

        // Filtrer les articles
        foreach ($articles['latest'] as $article) {
            // Filtrer par mot-clé dans le titre ou le résumé
            if ($keywordTitleSummary && 
                !stristr($article['title'], $keywordTitleSummary) && 
                !stristr($article['content'], $keywordTitleSummary)) {
                continue;
            }

            // Filtrer par mot-clé dans le corps
            if ($keywordBody && !stristr($article['content'], $keywordBody)) {
                continue;
            }

            // Filtrer par date
            if ($date && strpos($article['published'], $date) === false) {
                continue;
            }

            // Filtrer par catégorie
            if ($category && isset($article['source']) && stripos($article['source'], $category) === false) {
                continue;
            }

            // Ajouter l'article aux résultats
            $results[] = $article;
        }

        // Trier les résultats par date
        if ($sort === 'Date') {
            usort($results, fn($a, $b) => strtotime($b['published']) - strtotime($a['published']));
        }

        // Limiter les résultats
        if ($limit) {
            $results = array_slice($results, 0, $limit);
        }

        // Stocker les résultats dans la session
        $_SESSION['search_results'] = $results;

        // Rediriger vers la page de résultats
        // header('Location: searchedarticle.php');  je ne pas reussi à rediriger avec header <- Zacharie

        echo "<script type='text/javascript'>
                window.location.href = 'searchedarticle.php';
              </script>";
        
        exit();
    }
}






/***************************************************************************************** */





/**************************
 * Cette fonction contient les articles retrouver après recherche
 *               FOUNDARTICLES()
 * *************************************************** */


function foundarticle($articles){

    if (!$articles) {
        echo "Erreur : Impossible de charger les articles.";
        return;
    }
    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-md-left">Search Results</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li class="font-weight-bold">
                        Search Results for Articles
                    </li>
                </ul>
            </div>
            <div class="col-12 text-right">
                <img src="../media/resco.jpg" alt="icone_resco" class="mr-2 image-size">
            </div>
        </div>

        <div class="contenu">
            <div class="row">
                <!-- Section Search Results -->
                <div class="col-md-12">
                    <h2 class="h5">Articles Found</h2>

                    <?php foreach ($articles as $article) { ?>
                        <article class="mb-3">
                            <div>
                                <small>Published on <?php echo htmlspecialchars($article['published']); ?></small>
                            </div>
                            <?php if (!empty($article['image'])) { ?>
                                <img src="<?php echo htmlspecialchars(str_replace('/View', '.', $article['image'])); ?>" alt="small image" class="mr-2 image-size">
                            <?php } ?>
                            <a href="single_article.php?id=<?php echo htmlspecialchars($article['id']); ?>">
                                <h3 class="h6"><?php echo htmlspecialchars($article['title']); ?></h3>
                            </a>
                            <p><?php echo htmlspecialchars($article['content']); ?></p>
                            <small>Source: <?php echo htmlspecialchars($article['source']); ?></small>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php
}


?>