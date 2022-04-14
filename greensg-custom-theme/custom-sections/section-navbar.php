<header>
  <div class="container">
    <div class="row">
      <div class="col-md-3 d-flex justify-content-center">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/greensgcollab-logo-outlined.png">
      </div>

      <div class="col-md-6">
        <?php wp_nav_menu(
          array(
            "theme_location" => "header-menu",
            "menu_class" => "nav",
          )
        ); ?>
      </div>
    </div>
  </div>
</header>