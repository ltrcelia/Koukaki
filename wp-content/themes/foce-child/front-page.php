<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img src="wp-content/themes/foce-child/img/logo.png" data-parallax="0.2" id="picture" class="fade-in" alt="logo Fleurs d'oranger & chats errants">
            <video id="background-video" autoplay loop muted>
                <source src="wp-content/themes/foce-child/img/video-koukaki.mp4" type="video/mp4">
            </video>
        </section>

        <section id="#story" class="story fade-in">
            <h2 class="title-story"><span>L'</span><span>histoire</span></h2>
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
            <article id="characters" class="fade-in">
                <div class="main-character">
                    <h3 class="title-character"><span>Les</span><span>personnages</span></h3>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>
                </div>
                <div class="other-characters">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
                </div>
            </article>
            <article id="place" class="toAnim">
                <div>
                <img src="wp-content/themes/foce-child/img/big_cloud.png" class="cloud" alt="Gros nuage">
                <img src="wp-content/themes/foce-child/img/little_cloud.png" class="cloud" alt="Petit nuage">
                    <h3 class="title-place"><span>Le</span><span>lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in">
            <h2 class="title-studio"><span>Studio</span><span>Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            <?php get_template_part( 'oscars' ); ?>
    </main><!-- #main -->

<?php
get_footer();
