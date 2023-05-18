<?php $title ="Projet"; ?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once ('../required/head.php');?>



<body>

<?php require_once ('../required/nav.php');?>
    


    <div class="containerSlider">
        <div class="precedent">
            <a href="<?=URL?>#realisations" class="flechePrecedent">
                <span class="material-symbols-outlined">
                    arrow_back
                    </span>
                Précédent
            </a>
        </div>
        <section class="containerS ">
                <div class="titreAudessus">
                    <div class="descriptionW">
                        <div class="titreDescription">
                            <h1>Le petit commerce</h1>
                            <p class="technique"><span>2023 | HTML5, CSS, JS (Vanilla, Swiper)</p>

                        </div>
                        <p class="description">Ce site e-commerce a été créé dans le cadre de mon évaluation front-end lors de ma formation à l'Ifocop. Bien que le nom de la boutique et les pages demandées étaient imposés, j'ai eu la liberté de choisir le contenu et la charte graphique. J'ai utilisé principalement HTML, CSS et JS (Vanilla).
                        </p>
                        <p class="description">
                            Ce projet m'a permis d'acquérir de nouvelles compétences, notamment la création d'une barre de navigation complexe avec plusieurs sous-menus, l'utilisation de la librairie de carrousel Swiper, ainsi que la conception de composants réutilisables d'une page à l'autre.                    
                        </p>

                    </div>
                </div>

                <section class="carroussetCTA">

                    <iframe id="projetIframe"
                        title="Iframe des sites web que j'ai réalisés"
                        src="https://jeremycloarec.com/lepetitcommerce/index.html">
                    </iframe>
                    
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
    <?php require_once ('../required/footer.php');?>
    <?php require_once ('../required/jsLinks.php');?>

</body>

</html>

