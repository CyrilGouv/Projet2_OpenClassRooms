<?php
/*
Template Name: Activites-du-mois
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
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


    <div id="inscriptionEv" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inscription</h5>
                </div>

                <div class="modal-body">
                    <p class="subtitle"></p>

                    <form>
                        <div class="form-group">
                            <label for="name">Nom complet :</label>
                            <input type="text" id="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Je participe</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>


    <section class="activites actu">
        <div class="container">
            <h2>Activités du mois</h2>
            <p class="activites-intro actu-intro">
                Retrouvez ici toutes les activités du mois en cours
            </p>

            <div class="activites-box">
                <table class="activites-box-table">
                    <thead>
                        <tr>
                            <th><h5>Date</h5></th>
                            <th><h5>Activités</h5></th>
                            <th><h5>Description</h5></th>
                            <th><h5>Inscription</h5></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            query_posts('post_type=activites');
                            while(have_posts()): the_post();
                            $date = get_post_meta($post->ID, 'dateEv', true);
                        ?>
                        <tr>
                            <td><?= $date ?></td>
                            <td><?php the_title(); ?></td>
                            <td><?php remove_filter('the_content', 'wpautop'); the_content(); ?></td>
                            <td><a class="participer" href="#inscriptionEv" data-title="<?php the_title(); ?>" data-toggle="modal">Participer</a></td>
                        </tr>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </tbody>
                </table>
            </div>
                
        </div>
    </section>

    


    <?php get_footer(); ?>
