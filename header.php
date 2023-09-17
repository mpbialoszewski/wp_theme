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
        <div class="icon-container">
    <button>
    <span class="fa-stack fa-2x">
        <i class="fa-solid fa-angle-down angle-icon fa-stack-2x"></i>
        <i class="fa-solid fa-circle circle-icon fa-stack-2x"></i>
      </span>
    </button>
  </div>

    <div clas="content-header">
    <div class="content-content">
    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </div>
    <hr style="width:5%">
    <div class="contact-information">
        <i class="fa fa-phone"></i>0121 468 3264    
        <i class="fa fa-envelope"></i> hello@sevenliving.com
        <i class="fa fa-map-marker"></i> 97 Park Lane, London, W1K 7TG
    </div>
    </div>
    </div>
    <div class='form-container'>
    <div class='form-forms'>
    <form>
    <h1> Send us a message </h1>
    <div class="form-inputs">
    <input type="text" id="name" name="name" placeholder=" Name" required><br><br>
    <input type="email" id="email" name="Email address" placeholder=" Email address" required><br><br>
    </div> 
    <div class="form-textarea">
    <textarea id="message" name="Your message" placeholder=" Your message" rows="4" cols="50" required></textarea><br><br>
    </div>

    </form>
  </div>

</div>

    <?php
        wp_head(  );
    ?>
  </head>