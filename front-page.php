<?php get_header(); ?>

<!-- Jumbotron -->
        <div class="hero">
            <div class="container">
                <p class="line-before"><?= get_theme_mod('showcase_text1', 'Que faites-vous ce weekend ?'); ?></p>
                <h1><?= get_theme_mod('showcase_heading', 'Strasbourg'); ?></h1>
                <p class="line-after"><?= get_theme_mod('showcase_text2', 'Capital de Noël'); ?></p>
            </div>
        </div>

        <div class="arrow-down">
            <a href="#zoom"><i class="fa fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- City Zoom Important Numbers -->
    <section class="zoom" id="zoom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="population">
                        <i class="fa fa-male" aria-hidden="true"></i>
                        <h3>Population</h3>
                        <p class="description">276 170 habitants</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bicycle">
                        <i class="fa fa-bicycle" aria-hidden="true"></i>
                        <h3>Pistes Cyclables</h3>
                        <p class="description">560 km</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="green-space">
                        <i class="fa fa-envira" aria-hidden="true"></i>                        
                        <h3>Espaces Verts</h3>
                        <p class="description">344 hectares</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="weather">
                        <i class="fa fa-cloud" aria-hidden="true"></i>                        
                        <h3>Météo</h3>
                        <p class="description">5°C</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Welcome To Strasbourg -->
    <section class="welcome">
        <div class="container">
            <h2>Bienvenue à Strasbourg</h2>
            <p class="welcome-intro">
                La ville la plus excitante du Nord-Est
            </p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="welcome-item1">
                        <div class="welcome-item1-img"></div>
                        <div class="welcome-item-content">
                            <h3>Actualités</h3>
                            <p class="welcome-item-desc">
                                Découvrez toutes les dernières actualités de notre ville.
                            </p>
                            <a class="welcome-item-link" href="./actualites/">Voir <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-item2">
                        <div class="welcome-item2-img"></div>
                        <div class="welcome-item-content">
                            <h3>Activités du mois</h3>
                            <p class="welcome-item-desc">
                                Retrouvez toutes les actualités du mois en cours.
                            </p>
                            <a class="welcome-item-link" href="./activites-du-mois/">Faire <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-item3">
                        <div class="welcome-item3-img"></div>
                        <div class="welcome-item-content">
                            <h3>Plus d'infos</h3>
                            <p class="welcome-item-desc">
                                Notre ville est une des plus riches culturellement parlant.
                            </p>
                            <a class="welcome-item-link" href="./plus-dinfos/">Découvrir <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>