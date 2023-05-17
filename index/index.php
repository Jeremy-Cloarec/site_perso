<!DOCTYPE html>
<html lang="fr">


<?php include '../required/head.php';?>


<body>


    <?php include '../required/nav.php';?>

    <!-- Hero -->

    <section class="hero">
        <div class="containerHero">
            <div class="bio">
                <h1>Développeur web</h1>

                <p>Formé à la fois en webdesign et en développement, j'ai acquis des compétences étendues dans la création de sites attrayants et conviviaux.</p>

                <p>Mon expérience en HTML, CSS, JavaScript, PHP et WordPress me permet de concrétiser des projets créatifs en solutions web performantes.</p>

                <a href="index.html#contact" class="buttonPerso">
                    <p>Me contacter</p>
                </a>
            </div>
            <div class="containerMe">
                <img src="../assets/img/me.PNG" alt="#">
            </div>
            
        </div>
    </section>

    <main>
        <!-- Réalisations -->
        <div class="containerBg" id="realisations">
            <section class="containerGlobal ">
                <h2 >Réalisations</h2>
                <!-- <h3 class="h3Grilles">2023</h3> -->
                <div class="grilleProjets">
                    <a href="projets/01-projet-petitcommerce.html" class="cardProjet">
                        <div class="imgprojet">
                            <img src="../assets/img/vignettes/vignettePetitCommerce.jpg" alt="vignettes montrant la page d'accueil du site Le petit commerce en version mobile">
                        </div>
                        <p class="titreProjet">Le petit Commerce</p>
                    </a>
                    <a href="projets/02-projet-northern.html" class="cardProjet">
                        <div class="imgprojet">
                            <img src="../assets/img/vignettes/vignetteNorthern.jpg" alt="vignettes montrant la page d'accueil du site Northern Streetlight en version mobile">
                        </div>
                        <p class="titreProjet">Northern Streetlight</p>
                    </a>
                    <a href="projets/03-projet-futuroscope.html" class="cardProjet">
                        <div class="imgprojet">
                            <img src="../assets/img/vignettes/vignetteFuturoscope.jpg" alt="vignettes montrant la page d'accueil d'une version personnelle du site du futuroscope en version mobile">
                        </div>
                        <p class="titreProjet">Futuroscope</p>
                    </a>
                    <a href="projets/04-projet-guessingGame.html" class="cardProjet">
                        <div class="imgprojet">
                            <img src="../assets/img/vignettes/vignetteGuessing.jpg" alt="vignettes montrant la page d'accueil du site Guessing Game en version mobile">
                        </div>
                        <p class="titreProjet">Guessing Game</p>
                    </a>
                    <a href="projets/05-projet-branding.html" class="cardProjet">
                        <div class="imgprojet">
                            <img src="../assets/img/vignettes/vignetteBranding.jpg" alt="vignettes montrant la page d'accueil du site Personnal Branding en version mobile">
                        </div>
                        <p class="titreProjet">Personal Branding</p>
                    </a>
                </div>

            </section>
        </div>

        <!-- Qui suis-je ? -->

        <div class="containerBg" id="quiSuisJe">
            <section class="containerGlobal">
                <div class="containerQuiSuiJe">
                    <div class="sectionQuiSuisJe">
                        <h2 id="quiSuisJe">Qui suis-je ?</h2>

                        <p>Mon parcours est marqué par mon intérêt pour l’art, l’histoire, le webdesign et le développement web.</p>

                        <p>Mes études aux Beaux-Arts m’ont permis de développer ma sensibilité artistique, ma créativité ainsi qu’une culture littéraire et artistique.</p>

                        <p>Par la suite, ma formation en histoire a renforcé ma culture générale et mes compétences en rédaction ; l’empathie que j’ai développée en étudiant l’histoire m’aide à comprendre et à interagir avec les autres.</p>

                        <p>Mon intérêt pour le webdesign m'a ensuite conduit à plonger dans la culture digitale et à apprendre les logiciels de la suite Adobe et Figma. J'ai acquis une première compréhension des principes de conception et de l'expérience utilisateur, tout en étant introduit aux langages HTML et CSS.</p>

                        <p>Depuis mon apprentissage du développement web, je me suis familiarisé avec les langages de programmation comme JavaScript et PHP. J'ai développé des compétences dans ce domaine en intégrant ou en créant des interfaces web multiplateformes. Parallèlement, j’ai participé à la création de modules e-learning en tant qu’intégrateur storyline. Cette expérience m’a permis de réfléchir au parcours utilisateur, à la gestion des intéractions et des animations tout en collaborant avec une équipe multidisciplinaire.</p>
                        <p>Je souhaite continuer à évoluer dans le domaine du web en créant des expériences en ligne captivantes, fonctionnelles et esthétiquement plaisantes. Je suis motivé par la possibilité de collaborer avec des équipes créatives et de relever des défis techniques pour offrir des solutions web de qualité.</p>

                        <a href="../assets/img/cv/CVJeremyCloarec.jpg" class="buttonPerso descriptionCv" download="CV_Jeremy_Cloarec.jpg">
                            <p>Télécharger mon CV</p>
                        </a>

                    </div>
                    <div class="containerFigma">
                        <img src="../assets/img/cv/CVJeremyCloarec.jpg" class="cv" alt="CV de Jérémy Cloarec">

                        <a href="../assets/img/cv/CVJeremyCloarec.jpg" class="buttonPerso fichierCV" download="CV_Jeremy_Cloarec.jpg">
                            <p>Télécharger mon CV</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        

        <!-- Contact -->
        <div class="containerBg contact" id="contact">
            <section class="containerGlobal">
                <h2>Me contacter</h2>
                <div class="containerContact">
                    <p>Si mon travail vou intéresse, vous pouvez me contacter par mail ou sur Instagram en cliquant sur les icones correspondantes.</p>
                    <div class="mainEtReseaux">
                        <img src="../assets/img/doigt.PNG" alt="">
                        <div class="logoContact">
                            <a href="https://www.instagram.com/le_codarec/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="mailto:jeremycloarecàmsn.com" target="_blank">
                                <i class="fa-regular fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <?php include '../required/footer.php';?>


</body>

</html>



<!-- Section avec mes traveaux anciens classés en années -->

    <!-- <h2>Anciens travaux</h2>
        <section class="containerGlobal">
            <div class="accordion " id="accordionExample">
                <div class="accordion-item border-0">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed accordion-button-style rounded-0" type="button"
                            data-bs-toggle="collapse" role="button" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            2022
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion-body-style">
                            <div class="containerW">
                                Partie à dévoiler 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->