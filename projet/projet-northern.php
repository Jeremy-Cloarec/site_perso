<?php 


$title ="Northern Streetlight";

$technique ="2023 | HTML5, CSS, JS (Vanilla, Swiper)"; 

$description1 ="Northern Streetlight est le nom d'une entreprise fictive offrant des cours de dessin. Ce projet est un exercice personnel basé sur un brief généré par le site goodbrief (https://goodbrief.io/)";

$description2 ="Les défis majeurs de ce projet étaient de créer un menu burger en CSS pur et de concevoir des cartes adaptatives avec trois niveaux d'affichage (mobile, tablette et bureau).";

$lienSite = "https://streetlight.jeremycloarec.com/";

$lienFigma="https://www.figma.com/proto/LQXioGyclGtU5cwr8tuIsX/Northern-Streetlight?page-id=39%3A4&node-id=61-6&viewport=490%2C513%2C0.11&scaling=scale-down&starting-point-node-id=61%3A6";

$lienCode="https://github.com/Jeremy-Cloarec/northernStreetlight";


$btnVoir = "<a href= $lienSite class='buttonPerso voirSite' target='_blank'>
<p>Voir le site</p>
</a>";

$btnCode = "<a href=$lienCode class='buttonPerso buttonIcon buttonFigma' target='_blank'>
<img src='../assets/img/logoLien/github-mark.png' alt='#'>
<p>Voir le code</p> 
</a>";

$btnFigma = "<a href=$lienFigma class='buttonPerso buttonIcon' target='_blank'>
<i class='fa-brands fa-figma'></i>
<p>Voir la maquette</p>
</a>";


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

