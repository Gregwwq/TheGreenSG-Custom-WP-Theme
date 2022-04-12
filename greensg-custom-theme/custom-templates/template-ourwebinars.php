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
      These are the webinars that The GreenSG has organized. Everyone is welcomed to register and attend these webinars and gain new insight into how to be more environmentally sustainable.
    </div>
  </div>
  <article class="postcard">

    <img class="webinar-img" src="<?php echo get_template_directory_uri(); ?>/img/webinars/webinar1.png">

    <div class="postcard__text t-dark">
      <h1 class="postcard__title blue"><a href="#">Fashion X Sustainability</a></h1>
      <div class="postcard__subtitle small">
        <time datetime="2020-05-25 12:00:00">
          <i class="fas fa-calendar-alt mr-2"></i> Date: 31 March 2022 <br>
          Time: 8.00PM to 9.30PM <br>
          Venue: Zoom Meeting<br>
        </time>
      </div>
      <div class="postcard__bar"></div>
      <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
      <br>
      <br>
      <br>
      <div class="reg-btn-wrapper">
        <button type="button" class="reg-btn">Register</button>
      </div>
    </div>
  </article>

  <!-- WEBINAR 2-->
  <article class="postcard">
    <img class="webinar-img" src="<?php echo get_template_directory_uri(); ?>/img/webinars/webinar2.jpg">
    <div class="postcard__text t-dark">
      <h1 class="postcard__title blue"><a href="#"> Graduating Into The Green Workforce</a></h1>
      <div class="postcard__subtitle small">
        <time datetime="2020-05-25 12:00:00">
          <i class="fas fa-calendar-alt mr-2"></i> Date: 13 Oct 2021 <br>
          Time: 7.30PM to 9.00PM <br>
          Venue: Zoom Meeting <br>
        </time>
      </div>
      <div class="postcard__bar"></div>
      <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
      <br>
      <br>
      <br>
      <div class="reg-btn-wrapper">
        <button type="button" class="reg-btn">Register</button>
      </div>
    </div>
  </article>
  <!--
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
-->
  <!--
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
-->
  <!--END CODE-->
</body>
<?php get_footer(); ?>