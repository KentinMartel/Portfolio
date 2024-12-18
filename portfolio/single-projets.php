<?php
/* Template pour le type de contenu 'projets' */

get_header(); ?>

<div class="project-header">
    <div class="project-header-content">
        <div class="logo-text">
            <a href="<?php echo home_url('/'); ?>" class="home-link">KENTIN.</a>
        </div>

        <h1 class="project-title"><?php the_title(); ?></h1>
        <p class="project-year"><?php the_field('annee'); ?></p>
    </div>
    <a href="#contact" class="contact-button">CONTACT</a>
</div>

<div class="project-content">
    <div class="project-image">
        <?php 
        $image_principale = get_field('image_principale');
        if ($image_principale) : ?>
            <img src="<?php echo esc_url($image_principale['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
        <?php endif; ?>
    </div>

    <div class="project-description">
        <?php 
        // Affiche le contenu de l'éditeur WordPress
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content(); // Récupère le texte saisi dans l'éditeur WordPress
            endwhile;
        endif;
        ?>

        <?php 
        // Affiche le lien du projet avec l'icône
        $lien_projet = get_field('lien_projet');
        if ($lien_projet) : ?>
            <a href="<?php echo esc_url($lien_projet); ?>" target="_blank" class="project-link">
                <?php the_title(); ?> <span class="link-icon">↗</span>
            </a>
        <?php endif; ?>
    </div>
</div>

<div id="contact">
    <?php get_footer(); ?>
</div>
