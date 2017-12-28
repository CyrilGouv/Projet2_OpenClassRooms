<footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-top-actu">
                            <h4>Dernière actualité</h4>
                            <?php query_posts('order=desc&showposts=1'); ?>
                            <?php while(have_posts()): the_post(); ?>
                            <p><?= substr(strip_tags($post->post_content), 0, 140) ?>... <a href="<?php the_permalink(); ?>">Lire la suite</a></p>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-top-socials">
                            <h4>Activité en avant</h4>
                            <?php
                                query_posts('post_type=activites&showposts=1');
                                while(have_posts()): the_post();
                                $date = get_post_meta($post->ID, 'dateEv', true);
                            ?>
                            <p>
                                <strong><?php the_title(); ?></strong> : 
                                <?= substr(strip_tags($post->post_content), 0, 80) ?>... <a href="<?php the_permalink(); ?>">Lire la suite</a>
                            </p>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">Copyright 2017 Cyril Gouverneur</p>
                <div class="sitemap">
                    <nav>
                        <ul>
                            <li><a href="<?= home_url(); ?>">Accueil</a> - </li>
                            <li><a href="./actualites/">Actualités</a> - </li>
                            <li><a href="./plus-dinfos/">Plus d'infos</a> - </li>
                            <li><a href="./activites-du-mois/">Activités du mois</a> - </li>
                            <li><a href="./mentions-legales/">Mentions légales</a> - </li>
                            <li><a href="./mentions-legales/">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>




    
    <!-- Jquery Cdn -->
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    
    <!-- Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>    

    <!-- Bootstrap Js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    

    <!-- Main Js -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>


    <!-- WP Plugins -->
    <?php wp_footer(); ?>
</body>
</html>