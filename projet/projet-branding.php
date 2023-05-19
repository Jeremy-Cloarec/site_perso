<?php 
    $title ="Personal Branding";

    $technique ="2022 | WordPress (Elementor)"; 

    $description1 ="Ce modèle de site a été créé pendant mon stage en entreprise à l'école Doranco, avec pour objectif de développer un site de formation axé sur le personal branding. Cette expérience m'a permis d'avoir une première approche de l'utilisation de WordPress.";

    $description2 ="J'ai pu explorer les fonctionnalités et les possibilités offertes par cette plateforme populaire, renforçant ainsi mes compétences dans la création de sites web. Même si le projet n'a pas été réalisé, cette première utilisation de WordPress m'a laissé un sentiment positif et une base solide pour mes futurs projets dans le domaine du web.";

    $lienSite = "https://jeremycloarec.com/personalbranding/";

    $lienFigma="";

    $lienCode="";

    $btnVoir = "<a href= $lienSite class='buttonPerso voirSite' target='_blank'>
    <p>Voir le site</p>
    </a>";

    $btnCode = "";

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

