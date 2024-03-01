<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner">
            <div class="fade-in">
                <img id="picture" src="wp-content/themes/foce-child/img/logo.png" alt="logo Fleurs d'oranger & chats errants">
            </div>
            <video id="background-video" autoplay loop muted poster="wp-content/themes/foce-child/img/banner.png">
                <source src="wp-content/themes/foce-child/img/video-koukaki.mp4" type="video/mp4">
            </video>
        </section>

        <section id="story" class="story fade-in">

            <h2><span class="fade-title">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <article id="characters" >
                <div class="main-character">
                    <h3><span class="fade-title">Les personnages</span></h3>
                    <?php get_template_part( 'characters' ); ?>
            </article>
            
            <article id="place">
                <div>
                    <div class="clouds">
                        <img src="wp-content/themes/foce-child/img/big_cloud.png" class="cloud big-cloud" alt="Gros nuage">
                        <img src="wp-content/themes/foce-child/img/little_cloud.png" class="cloud little-cloud" alt="Petit nuage">
                    </div>
                    <h3><span class="fade-title">Le lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>

        </section>

        <section id="studio" class="fade-in">
            <h2><span class="fade-title">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

            <?php get_template_part( 'oscars' ); ?>

    </main>

<?php
get_footer();
