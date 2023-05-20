<?php
?>



<?php require_once 'head.php';?>
<?php require_once 'init.php';?>
<?php require_once 'jsLinks.php';?>

    <header>
    <nav class="navbar">
        <a href="<?= URL ?>index.php" class="nav-branding">
            <!-- <img src="<?= URL ?>assets/img/logoPerso/logoPersoBlanc.png" alt="#"> -->
            <p>Jérémy</p>
            
        </a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?= URL ?>#ancreHero" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="<?= URL ?>#ancreRealisation" class="nav-link">Réalisations</a>
            </li>
            <li class="nav-item">
                <a href="<?= URL ?>#ancreQui" class="nav-link">Qui suis-je ?</a>
            </li>
            <li class="nav-item">
                <a href="<?= URL ?>#ancreContact" class="nav-link">Contact</a>
            </li>
            <div class="icoReseaux">
                <a href="https://github.com/Jeremy-Cloarec" target="_blank">
                    <img src="<?= URL ?>assets/img/logoLien/github-mark-white.png" alt="">
                </a>
                <a href="https://www.instagram.com/le_codarec/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    </header>
    


