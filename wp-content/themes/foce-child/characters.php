<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
  <div class="swiper mySwiper">

    <div class="swiper-wrapper">

      <div class="swiper-slide">
      <img src="http://localhost:8888/Koukaki/wp-content/uploads/2022/06/Kawaneko.png" alt="Image de Kawaneko">
      <p>Kawaneko</p>
      </div>

      <div class="swiper-slide">
      <img src="http://localhost:8888/Koukaki/wp-content/uploads/2022/06/Orenjiiro-1.png" alt="Image de Orenjiro">
      <p>Orenjiro</p>
      </div>

      <div class="swiper-slide">
      <img src="http://localhost:8888/Koukaki/wp-content/uploads/2022/06/Pinku-1.png" alt="Image de Pinku">
      <p>Pinku</p>
      </div>

      <div class="swiper-slide">
      <img src="http://localhost:8888/Koukaki/wp-content/uploads/2022/06/Tenshi-1.png" alt="Image de Tenshi">
      <p>Tenshi</p>
      </div>
      
      <div class="swiper-slide">
      <img src="http://localhost:8888/Koukaki/wp-content/uploads/2022/06/Jaakuna-1.png" alt="Image de Jaakuna">
      <p>Jaakuna</p>
      </div>

    </div>