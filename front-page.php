<?php
  get_header();
  ?>
  <title>Seven Livings</title>

  <article class="content px-3 py-5 p-md-5">

  <?php
    while( have_posts(  )){
     the_post();
     get_template_part('template_parts/content', 'article' );
   }
   ?>

  <?php
    get_footer();
  ?>
