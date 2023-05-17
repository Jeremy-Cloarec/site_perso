<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../CSS/hero.css">
    <link rel="stylesheet" href="../CSS/sliderEtCTA.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/projet.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logoPerso/faviconJeremy.png">

    <title>Personal Branding</title>
</head>

<body>

    <?php include 'required/nav.php';?>

    <div class="containerSlider">
        <div class="precedent">
            <a href="../index.html#realisations" class="flechePrecedent">
                <span class="material-symbols-outlined">
                    arrow_back
                    </span>
                Précédent
            </a>
        </div>
        <section class="containerS ">
                <div class="titreAudessus">
                    <div class="descriptionW">
                        <h1>Personal Branding</h1>
                        <p class="technique">2022 | Wordpress (Elementor)</p>
                        <p class="description">Ce modèle de site a été créé pendant mon stage en entreprise à l'école Doranco, avec pour objectif de développer un site de formation axé sur le personal branding. Cette expérience m'a permis d'avoir une première approche de l'utilisation de WordPress. </p>
                        <p class="description">J'ai pu explorer les fonctionnalités et les possibilités offertes par cette plateforme populaire, renforçant ainsi mes compétences dans la création de sites web. Même si le projet n'a pas été réalisé, cette première utilisation de WordPress m'a laissé un sentiment positif et une base solide pour mes futurs projets dans le domaine du web.</p>
                    </div>
                </div>
                <section class="carroussetCTA">
                    <div id="carousel1" class="carousel slide carrouselAll">
                        <!-- <div class="carousel-indicators indicateur">
                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        </div> -->
                        <div class="carousel-inner carrouselShadow">
                            <div class="carousel-item active">
                                <img src="../assets/img/screenSite/branding/branding 1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/branding/branding 2.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/branding/branding 3.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/branding/branding 4.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/branding/branding 5.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/branding/branding 6.jpg" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev carrouselControlPerso" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carrouselControlPerso" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
                <div class="links">
                    <a href="https://jeremycloarec.com/personalbranding/" class="buttonPerso voirSite" target="_blank">
                        <p>Voir le site</p>
                    </a>
                    <!-- <a href="https://github.com/Jeremy-Cloarec/le-petit-commerce.git" class="buttonPerso buttonIcon buttonFigma" target="_blank">
                        <img src="../assets/img/logoLien/github-mark.png" alt="#">
                        <p>Voir le code</p> 
                    </a> -->
                    <a href="https://xd.adobe.com/view/3775eb20-7440-4270-8346-8f9193ddfe34-6226/" class="buttonPerso buttonIcon" target="_blank">
                        <i class="fa-brands fa-figma"></i>
                        <p>Voir la maquette</p>
                    </a>
                </div>
        </section>
    </div>
    <footer>
        <section class="containerFooter">
            <div class="liensFooter">
                <a href="../index.html#hero">Accueil</a>
                <a href="../index.html#realisations">Réalisations</a>
                <a href="../index.html#contact">Contact</a>
            </div>
            <div class="footerNom">
                <p>2023 | Jérémy Cloarec</p>
            </div>
        </section>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3c3a356350.js" crossorigin="anonymous"></script>
<script src="/JS/script.js"></script>
</body>