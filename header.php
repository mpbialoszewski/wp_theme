<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Space+Mono&display=swap" rel="stylesheet">
    <!---Styles-->


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_bloginfo('name') ?></title>


    <div class="header-container">
    <div id='header-logo'>
        <?php
        if(function_exists('custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);

            }
        ?>
            <img src="<?php echo $logo[0] ?>" alt='logo'>
      <div class="header-welcome">
          <h1>Coming Soon</h1>
      </div>
  </div>

</div>

    <?php
        wp_head(  );
    ?>
  </head>