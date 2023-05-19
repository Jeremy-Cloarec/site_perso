<?php 

$title ="Guessing Game"; 

$technique ="2022 | HTML, CSS, JS"; 

$description1 ="Guessing Game est un jeu codé en suivant le tutoriel de développement de Mozilla dans leur cours d'introduction à JavaScript.";

$description2 ="Ce projet m'a permis d'avoir une première expérience avec les variables, les boucles, les conditions et la manipulation du DOM. J'ai pu ainsi acquérir une compréhension initiale de ces concepts essentiels en programmation.";

$lienSite = "https://numberguessing.jeremycloarec.com";

$lienFigma="";

$lienCode="https://github.com/Jeremy-Cloarec/guessgame";

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

