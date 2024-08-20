<?php

get_header();
?>
    <main id="primary" class="site-main">
        <div class="logo_helper"><img class="logo_banner" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"></div>
        <section class="banner">
            <video id="bg-video" autoplay loop poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/header-video.mp4'?>" type="video/mp4">
            </video>
            <img id="fallback" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="Fond banner si video absente">
                        
        </section>
        <section id="#story" class="story">
            <h2><div id="histoire_title" class="main_titles">L'histoire</div></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <?php get_template_part('template-parts/characters-slider'); ?>
            <article id="place">
                <div>
                    <h3 class="two-words"><div class="main_titles"><div class="first-word">Le </div><div class="second-word">Lieu</div></div></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img id="little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'?>">
                    <img id="big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'?>">
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="two-words"><div class="main_titles"><div class="first-word">Studio </div><div class="second-word">Koukaki</div></div></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <?php get_template_part('template-parts/oscar-section'); ?>
    </main><!-- #main -->

<?php
get_footer();
