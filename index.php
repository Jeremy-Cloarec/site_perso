<!DOCTYPE html>
<html lang="fr">

<?php $title ="Accueil"; ?>
<?php require_once ('required/head.php');?>



<body>

<div id="top"></div>

    <?php require_once ('required/nav.php');?>

    <!-- Hero -->
    <div class="ancreLien" id="ancreHero"></div>
    <section class="hero">
        <div class="containerHero">
            <div class="bio">
                <h1>Développeur web</h1>

                <p>Formé à la fois en webdesign et en développement, j'ai acquis des compétences étendues dans la création de sites attrayants et conviviaux.</p>

                <p>Mon expérience en HTML, CSS, JavaScript, PHP et WordPress me permet de concrétiser des projets créatifs en solutions web performantes.</p>

                <a href="<?= URL?>#contact" class="buttonPerso">
                    <p>Contactez-moi</p>
                </a>
            </div>
            <div class="containerMe">
                <img src="<?= URL ?>assets/img/me.PNG" alt="#">
            </div>
        </div>
    </section>

    <main>
        <!-- Réalisations -->
        <div class="ancreLien" id="ancreRealisation"></div>
        <div class="containerBg" id="realisations">
            <section class="containerGlobal ">
                <h2 >Réalisations</h2>
                <!-- <h3 class="h3Grilles">2023</h3> -->
                <div class="grilleProjets">
                    <a href="<?= URL ?>projet/projet-petitCommerce.php" class="cardProjet">
                        <div class="imgprojet">
                            <img src="<?= URL ?>assets/img/vignettes/vignettePetitCommerce.jpg" alt="vignettes montrant la page d'accueil du site Le petit commerce en version mobile">
                        </div>
                        <p class="titreProjet">Le petit Commerce</p>
                    </a>
                    <a href="<?= URL ?>projet/projet-northern.php" class="cardProjet">
                        <div class="imgprojet">
                            <img src="<?= URL ?>assets/img/vignettes/vignetteNorthern.jpg" alt="vignettes montrant la page d'accueil du site Northern Streetlight en version mobile">
                        </div>
                        <p class="titreProjet">Northern Streetlight</p>
                    </a>
                    <a href="<?= URL ?>projet/projet-futuroscope.php" class="cardProjet">
                        <div class="imgprojet">
                            <img src="<?= URL ?>assets/img/vignettes/vignetteFuturoscope.jpg" alt="vignettes montrant la page d'accueil d'une version personnelle du site du futuroscope en version mobile">
                        </div>
                        <p class="titreProjet">Futuroscope</p>
                    </a>
                    <a href="<?= URL ?>projet/projet-guessing.php" class="cardProjet">
                        <div class="imgprojet">
                            <img src="<?= URL ?>assets/img/vignettes/vignetteGuessing.jpg" alt="vignettes montrant la page d'accueil du site Guessing Game en version mobile">
                        </div>
                        <p class="titreProjet">Guessing Game</p>
                    </a>
                    <a href="<?= URL ?>projet/projet-branding.php" class="cardProjet">
                        <div class="imgprojet">
                            <img src="<?= URL ?>assets/img/vignettes/vignetteBranding.jpg" alt="vignettes montrant la page d'accueil du site Personnal Branding en version mobile">
                        </div>
                        <p class="titreProjet">Personal Branding</p>
                    </a>
                </div>

            </section>
        </div>

        <!-- Qui suis-je ? -->

        <div class="ancreLien" id="ancreQui"></div>
        <div class="containerBg" id="quiSuisJe">
            <section class="containerGlobal">
                <div class="containerQuiSuiJe">
                    <div class="sectionQuiSuisJe">
                        <h2 id="quiSuisJe">Qui suis-je ?</h2>

                        <p>Mon parcours est marqué par mon intérêt pour l’art, l’histoire, le webdesign et le développement web.</p>

                        <p> Mes études aux Beaux-Arts m’ont permis de développer ma sensibilité artistique, ma créativité ainsi qu’une culture littéraire et artistique.
                        Par la suite, ma formation en histoire a renforcé ma culture générale et mes compétences en rédaction ; l’empathie que j’ai développée en étudiant l’histoire m’aide à comprendre et à interagir avec les autres.</p>

                        <div id="texteCache">
                        
                            
                            <p>Mon intérêt pour le webdesign m'a ensuite conduit à plonger dans la culture digitale et à apprendre les logiciels de la suite Adobe et Figma. J'ai acquis une première compréhension des principes de conception et de l'expérience utilisateur, tout en étant introduit aux langages HTML et CSS.</p>

                            <p>Depuis mon apprentissage du développement web, je me suis familiarisé avec les langages de programmation comme JavaScript et PHP. J'ai développé des compétences dans ce domaine en intégrant ou en créant des interfaces web multiplateformes. Parallèlement, j’ai participé à la création de modules e-learning en tant qu’intégrateur storyline. Cette expérience m’a permis de réfléchir au parcours utilisateur, à la gestion des intéractions et des animations tout en collaborant avec une équipe multidisciplinaire.</p>
                            <p>Je souhaite continuer à évoluer dans le domaine du web en créant des expériences en ligne captivantes, fonctionnelles et esthétiquement plaisantes. Je suis motivé par la possibilité de collaborer avec des équipes créatives et de relever des défis techniques pour offrir des solutions web de qualité.</p>
                        
                        </div>

                        <a href="#" id="lienLireSuite">Lire la suite ...</a>
                        <a href="#" id="lienRetracter">Rétracter 
                            <span class="material-symbols-outlined">
                                expand_less
                            </span></a>
                        <a href="<?= URL ?>assets/img/cv/jeremy_cloarec_CV.pdf" class="buttonPerso descriptionCv" download="jeremy_cloarec_CV.pdf">
                            <p>Télécharger mon CV</p>
                        </a>

                    </div>
                    <div class="containerFigma">
                        <img src="<?= URL ?>assets/img/cv/jeremy_cloarec_CV.jpg" class="cv" alt="CV de Jérémy Cloarec">
                        <p>Cliquez sur l'image pour l'agrandir</p>

                        
                    </div>
                </div>
            </section>
        </div>

        

        <!-- Contact -->
        <div class="ancreLien" id="ancreContact"></div>
        <div class="containerBg contact" id="contact">
            <section class="containerGlobal">
                <div class="containerContact">
                    <div class="containerCont">
                    <h2>Me contacter</h2>
                    <p>Si mon travail vous intéresse, vous pouvez me contacter par mail ou sur Instagram en cliquant sur les icones correspondantes.</p>
                    </div>
                    <div class="mainEtReseaux">
                        <img src="<?= URL ?>assets/img/doigt.png" alt="#">
                        <div class="logoContact">
                            <a href="https://www.instagram.com/le_codarec/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="mailto:jeremycloarec@msn.com" target="_blank">
                                <i class="fa-regular fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <?php require_once ('required/footer.php');?>
    <?php require_once ('required/jsLinks.php');?>



</body>

</html>

