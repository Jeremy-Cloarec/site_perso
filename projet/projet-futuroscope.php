<?php 
$title ="Futuroscope"; 

$technique ="2022 | Figma"; 

$description1 ="Ce projet a été réalisé dans le cadre de ma formation à l'Ifocop. L'objectif était d'améliorer l'interface du site du Futuroscope en utilisant des styles et un système de design.";

$description2 ="Une partie importante de ce projet était la réservation sur la page d'accueil, où j'ai pu améliorer mes compétences en utilisant les composants et les animations de Figma. Cette section comprend notamment un calendrier cliquable et des options de réservation intégrées dans des accordéons.";

$lienSite = "'https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FhdL96mgAurJNSst5BTefq7%2FFuturoscop%3Ftype%3Ddesign%26node-id%3D0%253A1%26t%3Dcu5j2XHeTiJ3Zp1J-1'";

$lienFigma="https://www.figma.com/proto/hdL96mgAurJNSst5BTefq7/Futuroscop?page-id=0%3A1&node-id=40-38&viewport=571%2C2391%2C0.36&scaling=scale-down&starting-point-node-id=40%3A38";

$lienCode="";


$btnVoir = "";

$btnCode = "";

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
                        src=<?= $lienSite ?> allowfullscreen>
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
