<?php

function wp_customize_register($wp_customize) {
    // Showcase Section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'ot-strasbourg'),
        'description' => sprintf(__('Options pour showcase', 'ot-strasbourg')),
        'priority' => 130
    ));


    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/img/bg-banner.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'ot-strasbourg'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));


    $wp_customize->add_setting('showcase_text1', array(
        'default' => _x('Que faites-vous ce weekend ?', 'ot-strasbourg'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text1', array(
        'label' => __('Texte1', 'ot-strasbourg'),
        'section' => 'showcase',
        'priority' => 2
    ));


    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('STRASBOURG', 'ot-strasbourg'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Titre', 'ot-strasbourg'),
        'section' => 'showcase',
        'priority' => 3
    ));
    

    $wp_customize->add_setting('showcase_text2', array(
        'default' => _x('Capital de Noël', 'ot-strasbourg'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text2', array(
        'label' => __('Texte2', 'ot-strasbourg'),
        'section' => 'showcase',
        'priority' => 4
    ));

}

add_action('customize_register', 'wp_customize_register');

?>