<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <?php if(is_search()):?>
    <meta name="robots" content="noindex, nofollw">
    <?php endif; ?>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <div class="navBar bg-dark fixed-top">
        <div class="navBar__container container">
            <nav class="row navbar navbar-dark navbar-expand-lg">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="navBar__container__logo navbar-brand"><img src="./img/IDDO.svg" alt=""></a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item pr-5 a"> <a class="nav-link" href="#">Home</a> </li>
                        <li class="nav-item pr-5"> <a class="nav-link" href="#">Services</a> </li>
                        <li class="nav-item pr-5"> <a class="nav-link" href="#">Portfolio</a> </li>
                        <li class="nav-item pr-5"> <a class="nav-link" href="#">About</a> </li>
                        <li class="nav-item pr-5"> <a class="nav-link" href="#">Contact</a> </li>
                    </ul>
                    <div class="nav-right">
                        <a class="navBar__container--sign btn btn-outline-primary text-primary">Sign up</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
