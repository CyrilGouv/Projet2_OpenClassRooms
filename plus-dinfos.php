<?php
/*
Template Name: Plus-dinfos
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>

    <!-- Meta description -->
    <meta name="description" content="Site non officiel de l'Office du tourisme à Strasbourg. Préparez votre séjour à Strasbourg et en Alsace, trouvez un restaurant, une activité, une visite guidée et planifiez vos vacances en Alsace." />
    <meta name="author" content="Cyril Gouverneur" />
    <meta name="copyright" content="© Office du tourisme Strasbourg" />

    <!-- Open Graph data -->
    <meta property="og:title" content="Office du tourisme de Strasbourg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.projet2.cyrilgouverneur.com/"/>
    <meta property="og:image" content="http://projet2.cyrilgouverneur.com/logo.png"/>
    <meta property="og:description" content="Site non officiel de l'Office du tourisme à Strasbourg. Préparez votre séjour à Strasbourg et en Alsace, trouvez un restaurant, une activité, une visite guidée et planifiez vos vacances en Alsace."/>
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon-16x16.png">
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon/favicon.ico" /><![endif]-->

    <!-- Permet de supprimer le rendu par défault des numéros de tél sur Edge -->
    <meta name="format-detection" content="telephone=no"/>

    <!-- Font Awsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- WP Plugins -->
    <?php wp_head(); ?>
</head>
<body>

    <!-- Menu responsive -->
    <nav class="menu-responsive">
        <ul>
            <?php wp_nav_menu(); ?>
        </ul>
    </nav>

    <!-- Header -->
    <section class="header-menu">
        
        <!-- Socials & search field -->
        <header class="header-top">
            <div class="container">
                <div class="header-top-right">
                    <div class="search-field">
                        <form id="content">
                            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                        </form>
                    </div>
    
                    <div class="socials">
                        <a href="https://www.facebook.com/StrasbourgTourisme" target="_blank" title="Facebook - Strasbourg Tourisme"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/Stras_Tourisme" target="_blank" title="Twitter @Stras_Tourisme"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/strasbourgtourisme/" target="_blank" title="Instagram -#Strasbourg"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.pinterest.fr/StrasTourisme/" target="_blank" title="Pinterest - Strasbourg"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Navigation -->
        <header class="navbar">
            <div class="container">
                <div class="row">
                    <div class="navbar-content">
                        <div class="col-lg-3 col-md-9">
                            <div class="logo">
                                <a href="<?= home_url(); ?>"><img class="logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Logo Office du tourisme de Strasbourg"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-none d-xl-block">
                            <nav class="main-menu">
                                <ul>
                                    <?php wp_nav_menu(); ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-3 d-xl-none">
                            <button class="hamburger-menu">
                                <span class="bar"></span>    
                            </button>        
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>


    <section class="actu">
        <div class="container">
            <h2>Plus d'infos</h2>
            <p class="actu-intro">
                Découvrez l'une des plus belle ville d'Europe
            </p>

            <div class="actu-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="actu-item infos-item">
                            <div class="col-lg-4">
                                <div class="infos-item-img">
                                    <a href="https://fr.wikipedia.org/wiki/Cath%C3%A9drale_Notre-Dame_de_Strasbourg" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/img/cathedral.jpg" alt="Photo de la cathédral de Strasbourg"></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="actu-item-content">
                                    <h3 class="infos-item-title">La Cathédrale Notre-Dame</h3>
                                    <p class="actu-item-desc infos-item-desc">
                                        La cathédrale de Strasbourg est un chef d’œuvre absolu de l’art gothique.                                        
                                        La construction de la cathédrale romane, dont il ne reste rien sinon la crypte et l’emprise au sol, débuta en 1015. La flèche de l’édifice actuel, de style gothique, fut achevée en 1439.                                   
                                        La flèche, haute de 142 mètres, est un chef d’œuvre de légèreté et d’élégance. La cathédrale fut jusqu’au XIXe siècle l’édifice le plus élevé de toute la chrétienté.<br>
                                        <a href="https://fr.wikipedia.org/wiki/Cath%C3%A9drale_Notre-Dame_de_Strasbourg" target="_blank">En savoir plus <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="actu-item infos-item">
                            <div class="col-lg-4">
                                <div class="infos-item-img">
                                    <a href="https://fr.wikipedia.org/wiki/Maison_Kammerzell" alt="Photo de la maison Kammerzell"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/img/kammerzell.jpg" alt="Photo de la maison Kammerzell"></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="actu-item-content">
                                    <h3 class="infos-item-title">La Maison Kammerzell</h3>
                                    <p class="actu-item-desc infos-item-desc">
                                        Si cette maison porte le nom de l’épicier Kammerzell, son propriétaire au XIXe s., elle doit son aspect actuel à Martin Braun, marchand de fromage, qui l’acquiert en 1571. Il n’en conserve que le rez-de-chaussée en pierre, daté de 1467, et reconstruit la maison sur trois étages en encorbellement et trois étages de comble en 1589.<br>
                                        <a href="https://fr.wikipedia.org/wiki/Maison_Kammerzell" target="_blank">En savoir plus <i class="fa fa-angle-right" aria-hidden="true"></i></a>    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="actu-item infos-item">
                            <div class="col-lg-4">
                                <div class="infos-item-img">
                                    <a href="https://fr.wikipedia.org/wiki/La_Petite_France_(Strasbourg)" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/img/lapetitefrance.jpg" alt="Photo de la maison Kammerzell"></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="actu-item-content">
                                    <h3 class="infos-item-title">La Petite France</h3>
                                    <p class="actu-item-desc infos-item-desc">
                                            C’est le quartier le plus pittoresque du vieux Strasbourg. Les pêcheurs, les meuniers et les tanneurs vivaient et travaillaient autrefois dans ce quartier bâti à fleur d’eau.
                                            Les magnifiques maisons à colombage datent des XVIe et XVIIe siècles. Leurs toits pentus sont ouverts sur des greniers où séchaient autrefois les peaux.<br>
                                        <a href="https://fr.wikipedia.org/wiki/La_Petite_France_(Strasbourg)" target="_blank">En savoir plus <i class="fa fa-angle-right" aria-hidden="true"></i></a>    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="actu-item infos-item">
                            <div class="col-lg-4">
                                <div class="infos-item-img">
                                    <a href="https://fr.wikipedia.org/wiki/Parlement_europ%C3%A9en" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/img/parlement-small.jpg" alt="Photo de la maison Kammerzell"></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="actu-item-content">
                                    <h3 class="infos-item-title">Le Parlement européen</h3>
                                    <p class="actu-item-desc infos-item-desc">
                                            Son hémicycle, d’une capacité de 750 places, achevé en 1999, est destiné à accueillir les sessions mensuelles de cette institution.
                                            L’architecture de l’immeuble, conçu par Architecture Studio Europe, repose sur l’alliance du cercle et de l’ellipse et s’organise en différents volumes bien identifiés.<br>
                                        <a href="https://fr.wikipedia.org/wiki/Parlement_europ%C3%A9en" target="_blank">En savoir plus <i class="fa fa-angle-right" aria-hidden="true"></i></a>    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="actu-item infos-item">
                            <div class="col-lg-4">
                                <div class="infos-item-img">
                                    <a href="https://fr.wikipedia.org/wiki/Cour_europ%C3%A9enne_des_droits_de_l%27homme" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/img/droithomme.jpg" alt="Photo de la maison Kammerzell"></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="actu-item-content">
                                    <h3 class="infos-item-title">Le Palais des Droits de l'Homme</h3>
                                    <p class="actu-item-desc infos-item-desc">
                                        Construit d’après les plans de l’architecte britannique Sir Richard Rogers, co-auteur du Centre Beaubourg de Paris, il a été inauguré en 1995. Il abrite la Cour Européenne des Droits de l’Homme.
                                        Des visites d’information destinées aux professionnels du droit et aux étudiants en droit peuvent être organisées (minimum 25 personnes).
                                        <br>
                                        <a href="https://fr.wikipedia.org/wiki/Cour_europ%C3%A9enne_des_droits_de_l%27homme" target="_blank">En savoir plus <i class="fa fa-angle-right" aria-hidden="true"></i></a>    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <?php get_footer(); ?>
