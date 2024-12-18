<?php
/* Template Name: Page d'Accueil */

get_header();
?>

<div class="homepage-section">
    <!-- Texte "KENTIN." -->
    <div class="logo-text">
        KENTIN.
    </div>

    <div class="hero-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/imagefondaccueil.webp');">
        <div class="content">
            <h1 class="hero-title">
                <span class="blue">UX UI DESIGNER</span><br>&amp; VIDEO EDITOR
            </h1>
            <p class="hero-description">
                Je m'appelle Kentin Martel. J'aide les entrepreneurs et les entreprises à se développer en ligne en concevant des sites web <strong>WordPress</strong> personnalisés. Je m'appuie toujours sur les dernières tendances et développements. Je fais également du <strong>Montage Vidéo</strong> pour mes clients.
            </p>
            <!-- Lien avec flèche -->
            <a href="#work" class="cta-link">
                DÉCOUVRE MON TRAVAIL
                <?php echo '<svg width="7" height="22" viewBox="0 0 7 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="cta-arrow">
                    <path d="M1.11986 0.150634C1.02748 0.150634 0.93293 0.222051 0.862029 0.360682C0.720226 0.637945 0.720226 1.09165 0.862029 1.36891L5.71556 10.8589L0.93293 20.2102C0.791127 20.4874 0.791127 20.9412 0.93293 21.2184C1.07473 21.4957 1.30677 21.4957 1.44858 21.2184L6.49118 11.363C6.63298 11.0857 6.63298 10.632 6.49118 10.3547L1.37983 0.360682C1.30678 0.21785 1.2144 0.150634 1.11986 0.150634Z" fill="#5BB2FF"/>
                </svg>'; ?>
            </a>
        </div>
        <a href="#contact" class="contact-button">CONTACT</a>
    </div>
</div>

<!-- Nouvelle Section -->
<div class="work-section">
    <div class="work-image">
        <div class="image-caption">
            <div class="blue-bar"></div>
            <p>Freelance webdesigner & monteur vidéo</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/imagemoi1.webp" alt="Freelance webdesigner & monteur vidéo">
    </div>
    <div class="work-content">
        <h2 class="work-title">
            SITES WEB RÉALISÉS <br>
            <span class="blue"><span class="white-text">AVEC</span> PASSION</span> <br>
            <span class="blue">ET DEVOUEMENT</span>
        </h2>

        <p class="work-description">
            En travaillant avec moi, vous ferez l'expérience de la qualité d'une agence, combinée au contact personnel et aux lignes courtes d'un travailleur indépendant. Je conçois et développe tous mes projets sur mesure, parfaitement adaptés aux besoins spécifiques de mes clients.<br><br>
            Mon approche est centrée sur l'humain, intégrant des principes de conception visuelle et des tests d'utilisation afin de garantir une interaction intuitive.
        </p>
        <a href="#work" class="cta-link2">
            VOIR MON TRAVAIL
            <?php echo '<svg width="7" height="22" viewBox="0 0 7 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="cta-arrow2">
                <path d="M1.11986 0.150634C1.02748 0.150634 0.93293 0.222051 0.862029 0.360682C0.720226 0.637945 0.720226 1.09165 0.862029 1.36891L5.71556 10.8589L0.93293 20.2102C0.791127 20.4874 0.791127 20.9412 0.93293 21.2184C1.07473 21.4957 1.30677 21.4957 1.44858 21.2184L6.49118 11.363C6.63298 11.0857 6.63298 10.632 6.49118 10.3547L1.37983 0.360682C1.30678 0.21785 1.2144 0.150634 1.11986 0.150634Z" fill="#5BB2FF"/>
            </svg>'; ?>
        </a>
    </div>
</div>

<!-- Section Travaux Sélectionnés -->
<div id="work" class="selected-work-section">
    <h2 class="selected-work-title">TRAVAUX SÉLECTIONNÉS</h2>
    <p class="selected-work-description">
        Mon portfolio comprend une variété de sites web et projets créatifs. Vous trouverez<br>
        ci-dessous une sélection de projets récents que je suis fier d’avoir<br>
        <span class="last-word">réalisés.</span>
    </p>
    <div class="selected-work-grid">
        <?php
        $args = array(
            'post_type' => 'projets',
            'posts_per_page' => -1,
        );

        $project_query = new WP_Query($args);

        if ($project_query->have_posts()) :
            while ($project_query->have_posts()) : $project_query->the_post();
                $fond_projet = get_field('image');
                $sous_titre = get_field('description');
        ?>
                <div class="selected-work-item">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($fond_projet['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="selected-work-image">
                        <div class="selected-work-details">
                            <h3 class="selected-work-item-title"><?php the_title(); ?></h3>
                            <p class="selected-work-item-subtitle"><?php echo esc_html($sous_titre); ?></p>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
        else :
            echo '<p>Aucun projet à afficher pour le moment.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </div>
</div>

<!-- Section Clients & Partenaires -->
<div class="clients-partners-section">
    <h2 class="clients-partners-title">Clients & Partenaires</h2>
    <p class="clients-partners-description">Clients et partenaires pour lesquels je suis fier d’avoir travaillé.</p>
    <div class="clients-partners-grid">
        <div class="client-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/masteekh.webp" alt="Masteekh">
            <h3>Masteekh</h3>
            <p>33 989 372 vues sur YouTube</p>
            <p>127 000 abonnés</p>
        </div>
        <div class="client-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/prayforwin.webp" alt="PrayForWin">
            <h3>PrayForWin</h3>
            <p>232 829 vues sur YouTube</p>
            <p>1 775 abonnés</p>
        </div>
        <div class="client-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/conquete-ranked.webp" alt="Conquête Ranked / Stratus">
            <h3>Stratus Network</h3>
            <p>419 936 connexions (Top 10 FR)</p>
            <p>26 667 vues sur Twitter</p>
        </div>
    </div>
</div>

<!-- Section FAQ avec Image -->
<div class="faq-container">
    <div class="faq-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imagefaq.png" alt="FAQ Image">
    </div>
    <div class="faq-content">
        <div class="faq-left">
            <h2 class="faq-title">QUESTIONS FRÉQUEMMENT POSÉES</h2>
            <p class="faq-description">
                Vous n'êtes pas le seul à vouloir en savoir plus sur mes services. J'ai dressé une liste des questions les plus pertinentes. Votre question et sa réponse n'y figurent pas ? N'hésitez pas à me contacter.
            </p>
        </div>
        <div class="faq-items">
            <div class="faq-item">
                <details>
                    <summary>Quels services proposez-vous en tant que designer UI/UX ?</summary>
                    <p>Je propose une gamme de services, notamment la recherche sur les utilisateurs, le wireframing, le prototypage, la conception de l'interface utilisateur et les tests d'utilisation. Mon objectif est de créer des expériences numériques intuitives et visuellement attrayantes qui répondent à la fois aux besoins des utilisateurs et aux objectifs de l'entreprise. J’utilise Figma afin de réaliser mes maquettes.</p>
                </details>
            </div>
            <div class="faq-item">
                <details>
                    <summary>Quels sont les services de montage vidéo que vous proposez ?</summary>
                    <p>Je propose des services complets de montage vidéo tels que le montage narratif, les effets visuels, l'étalonnage et la post-production. Qu'il s'agisse d'une vidéo promotionnelle, d'un contenu pour les médias sociaux ou d'un projet d'entreprise, je veille à ce que le produit final soit attrayant et professionnel.</p>
                </details>
            </div>
            <div class="faq-item">
                <details>
                    <summary>Pouvez-vous travailler sur des interfaces web et mobiles ?</summary>
                    <p>Oui, je suis spécialisé dans la conception d'interfaces utilisateur pour les plateformes web et mobiles. Je m'assure que les conceptions sont réactives et adaptées aux besoins spécifiques de chaque plateforme afin de fournir la meilleure expérience utilisateur possible. Pour ensuite les développer sur Wordpress</p>
                </details>
            </div>
        </div>
    </div>
</div>

<div id="contact">
    <?php get_footer(); ?>
</div>