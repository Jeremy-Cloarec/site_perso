<?php 
$title ="Le petit Commerce"; 
$technique ="2023 | HTML5, CSS, JS (Vanilla, Swiper)"; 

$description1 ="Ce site e-commerce a été créé dans le cadre de mon évaluation front-end lors de ma formation à l'Ifocop. Bien que le nom de la boutique et les pages demandées étaient imposés, j'ai eu la liberté de choisir le contenu et la charte graphique. J'ai utilisé principalement HTML, CSS et JS (Vanilla).";

$description2 ="Ce projet m'a permis d'acquérir de nouvelles compétences, notamment la création d'une barre de navigation complexe avec plusieurs sous-menus, l'utilisation de la librairie de carrousel Swiper, ainsi que la conception de composants réutilisables d'une page à l'autre.";

$lienSite = "https://jeremycloarec.com/lepetitcommerce/index.html";

$lienFigma="";

$lienCode="https://github.com/Jeremy-Cloarec/le-petit-commerce.git";


$btnVoir = "<a href= $lienSite class='buttonPerso voirSite' target='_blank'>
<p>Voir le site</p>
</a>";

$btnCode = "<a href=$lienCode class='buttonPerso buttonIcon buttonFigma' target='_blank'>
<img src='../assets/img/logoLien/github-mark.png' alt='#'>
<p>Voir le code</p> 
</a>";

$btnFigma = "";





?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once ('../required/head.php');?>



<body>

<?php require_once ('../required/nav.php');?>
    
    <div class="containerSlider">
        <div class="precedent">
            <a href="<?=URL?>#ancreRealisation" class="flechePrecedent">
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
                            <h1><?= $title ?></h1>
                            <p class="technique">
                                <?= $technique ?>
                            </p>
                        </div>
                        <div class="containerDescription">
                            <p class="description">
                                <?= $description1?>
                            </p>
                            <p class="description">
                                <?= $description2?>
                            </p>
                        </div>
                    </div>
                </div>
                <section class="carroussetCTA">
                    <iframe id="projetIframe"
                        title="Iframe des sites web que j'ai réalisés"
                        src=<?= $lienSite ?>>
                    </iframe>
                </section>
                <div class="links">
                    <?= $btnVoir;?>
                    <?= $btnCode;?>
                    <?= $btnFigma;?>
                </div>
        </section>
    </div>
    <?php require_once ('../required/footer.php');?>
    <?php require_once ('../required/jsLinks.php');?>

</body>

</html>
