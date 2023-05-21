<?php
?>

<?php require_once ('init.php');?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Formé à la fois en webdesign et en développement, j'ai acquis des compétences étendues dans la création de sites attrayants et conviviaux.Mon expérience en HTML, CSS, JavaScript, PHP et WordPress me permet de concrétiser des projets créatifs en solutions web performantes.">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, WordPress">
    <meta name="author" content="Jérémy Cloarec">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/hero.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/sliderEtCTA.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/grille.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/contact.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/quiSuisJe.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/footer.css">
    <link rel="icon" type="image/x-icon" href="<?= URL ?>assets/img/logoPerso/faviconJeremy.png">
    <title><?php if(isset($title)):?><?= $title ?><?php endif;?></title>

    <?php require_once ("jsLinks.php");?>
</head>

