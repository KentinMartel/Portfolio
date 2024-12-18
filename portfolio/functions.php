<?php

function enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css'); // Remplace par le chemin de ton fichier CSS
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function register_custom_post_type_projets() {
    $args = array(
        'labels' => array(
            'name' => 'Projets',
            'singular_name' => 'Projet',
            'add_new' => 'Ajouter un projet',
            'add_new_item' => 'Ajouter un nouveau projet',
            'edit_item' => 'Modifier le projet',
            'new_item' => 'Nouveau projet',
            'view_item' => 'Voir le projet',
            'search_items' => 'Rechercher des projets',
            'not_found' => 'Aucun projet trouvé',
            'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projets'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('projets', $args);
}
add_action('init', 'register_custom_post_type_projets');

function custom_single_template($single) {
    global $post;

    // Vérifie si le type de contenu est 'projets' et si le titre est "Montage Vidéo"
    if ($post->post_type === 'projets' && $post->post_name === 'montage-video') {
        // Chemin vers le template spécifique
        if (file_exists(get_template_directory() . '/single-projet-video.php')) {
            return get_template_directory() . '/single-projet-video.php';
        }
    }

    return $single;
}
add_filter('single_template', 'custom_single_template');

function enqueue_custom_scripts() {
    wp_enqueue_script('custom-video-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

