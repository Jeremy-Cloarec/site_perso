<?php

?>

<!DOCTYPE html>
<html lang="fr">

<?php include '../required/head.php';?>




<body>

<?php include '../required/nav.php';?>
    


    <div class="containerSlider">
        <div class="precedent">
            <a href="../index/index.php#realisations" class="flechePrecedent">
                <span class="material-symbols-outlined">
                    arrow_back
                    </span>
                Précédent
            </a>
        </div>
        <section class="containerS ">
                <div class="titreAudessus">
                    <div class="descriptionW">
                        <h1>Le petit commerce</h1>
                        <p class="technique"><span>2023 | HTML5, CSS, JS (Vanilla, Swiper)</p>
                        <p class="description">Ce site e-commerce a été créé dans le cadre de mon évaluation front-end lors de ma formation à l'Ifocop. Bien que le nom de la boutique et les pages demandées étaient imposés, j'ai eu la liberté de choisir le contenu et la charte graphique. J'ai utilisé principalement HTML, CSS et JS (Vanilla).
                        </p>
                        <p class="description">
                            Ce projet m'a permis d'acquérir de nouvelles compétences, notamment la création d'une barre de navigation complexe avec plusieurs sous-menus, l'utilisation de la librairie de carrousel Swiper, ainsi que la conception de composants réutilisables d'une page à l'autre.                    
                        </p>

                    </div>
                </div>

                <section class="carroussetCTA">

                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    src="https://jeremycloarec.com/lepetitcommerce/index.html">
                </iframe>
                    
                </section>
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
                                <img src="../assets/img/screenSite/petitCommerce/Petit commerce 1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/petitCommerce/Petit commerce 2.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/petitCommerce/Petit commerce 3.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/petitCommerce/Petit commerce 4.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/petitCommerce/Petit commerce 5.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/img/screenSite/petitCommerce/Petit commerce 6.jpg" class="d-block w-100">
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
                    <a href="https://jeremycloarec.com/lepetitcommerce/index.html" class="buttonPerso voirSite" target="_blank">
                        <p>Voir le site</p>
                    </a>
                    <a href="https://github.com/Jeremy-Cloarec/le-petit-commerce.git" class="buttonPerso buttonIcon buttonFigma" target="_blank">
                        <img src="../assets/img/logoLien/github-mark.png" alt="#">
                        <p>Voir le code</p> 
                    </a>
                    <!-- <a href="#" class="buttonPerso buttonIcon" target="_blank">
                        <i class="fa-brands fa-figma"></i>
                        <p>Voir la maquette</p>
                    </a> -->
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

</html>

