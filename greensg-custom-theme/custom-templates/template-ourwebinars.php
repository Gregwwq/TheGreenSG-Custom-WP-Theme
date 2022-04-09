<?php
/*
Template Name: Our Webinars
*/
?>

<?php get_header(); ?>

<body>
  <!--START CODE-->

  <!-- NAVIGATION BAR (WP) -->
  <?php get_template_part("custom-sections/section", "navbar"); ?>

  <div class="navbar-spacing"></div>

  <div class="our-webinars-intro">
    <div class="intro-title">
      Our Webinars
    </div> <br>
    <div class="intro-content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
      in reprehenderit in voluptate velit esse cillum dolore eu fugiat
      nulla pariatur. Excepteur sint occaecat cupidatat non proident,
      sunt in culpa qui officia deserunt mollit anim id est laborum
    </div>
  </div>

  <div class="webinar-container">
    <div class="row webinar-row">
      <div class="col-7">
        <span class="center-helper"></span>
        <img class="webinar-img" src="<?php echo get_template_directory_uri(); ?>/img/webinars/webinar1.png">
      </div>
      <div class="col-5">
        <div class="webinar-content-wrapper">
          <div class="webinar-content">
            <div class="webinar-title">
              Fashion X Sustainability
            </div>
            <div class="webinar-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </div>
            <div class="webinar-details">
              Date: 31 March 2022 <br>
              Time: 8.00PM to 9.30PM <br>
              Venue: Zoom Meeting<br> 
            </div>
            <div class="reg-btn-wrapper">
              <button type="button" class="reg-btn">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="webinar-container">
    <div class="row webinar-row">
      <div class="col-7">
        <span class="center-helper"></span>
        <img class="webinar-img" src="<?php echo get_template_directory_uri(); ?>/img/webinars/webinar2.jpg">
      </div>
      <div class="col-5">
        <div class="webinar-content-wrapper">
          <div class="webinar-content">
            <div class="webinar-title">
              Graduating Into The Green Workforce
            </div>
            <div class="webinar-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </div>
            <div class="webinar-details">
              Date: 13 Oct 2021 <br>
              Time: 7.30PM to 9.00PM <br>
              Venue: Zoom Meeting <br> 
            </div>
            <div class="reg-btn-wrapper">
              <button type="button" class="reg-btn">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--END CODE-->
</body>
<?php get_footer(); ?>