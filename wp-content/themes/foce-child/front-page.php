<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img src="wp-content/themes/foce-child/img/logo.png" data-parallax="0.2" id="picture" class="fade-in parallax-image" alt="logo Fleurs d'oranger & chats errants">
            <video id="background-video" autoplay loop muted class="fade-in parallax-video">
                <source src="wp-content/themes/foce-child/img/video-koukaki.mp4" type="video/mp4">
            </video>
        </section>

        <section id="story" class="story fade-in">
            <h2 class="flower">
                <span class="fade-title">L'</span>
                <span class="fade-title">histoire</span>
            </h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>


            <article id="characters">
                <div class="main-character">
                    <h3>
                        <span class="fade-title">Les </span>
                        <span class="fade-title">personnages</span>
                    </h3>
                    <?php get_template_part( 'characters' ); ?>
            </article>

            
            <article id="place">
                <div>
                <img src="wp-content/themes/foce-child/img/big_cloud.png" class="cloud big-cloud" alt="Gros nuage">
                <img src="wp-content/themes/foce-child/img/little_cloud.png" class="cloud little-cloud" alt="Petit nuage">
                    <h3>
                        <span class="fade-title">Le </span>
                        <span class="fade-title">lieu</span>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in">
            <h2>
                <span class="fade-title">Studio </span>
                <span class="fade-title">Koukaki</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            <?php get_template_part( 'oscars' ); ?>
    </main><!-- #main -->

<?php
get_footer();
