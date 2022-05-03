<?php
/*
Template Name: Community Activities
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
      Community Activities
    </div> <br>
    <div class="intro-content">
      These are the community activities that The GreenSG has organized. Everyone is welcomed to sign up and attend these events and gain new insight into how to be more environmentally sustainable.
    </div>
  </div>
  
  <!--FEATURE DISPLAY-->
  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"> Green Guardian Leadership Dialogue Session
        <!--<span class="text-muted">It’ll blow your mind.</span>-->
      </h2>
      <br>
      <p class="lead">On this day when the world comes together during Earth Hour to raise awareness for nature and our planet, it is also timely that we hosted our Green Guardian Leadership Dialogue Session, the first of many, aimed at increasing engagement and empowerment of youths to cultivate young environmental leaders.

        The secondary school students participated actively and displayed exceptional interest and passion on the topic. They also had a chance to interact with MP @shawnhuangweizhong, who shared fervently about leadership and how every individual can lead by example to inspire, convince and enable friends, family members and schoolmates to take simple actions for the environment.

        We need a whole-of-society approach to tackle climate change and youth is an important demographic to change perspective, culture and spark change for an environmentally sustainable world.

        A special thanks to @sgpools for supporting the event.
        Thank you to the various Secondary Schools, Jurong Spring Division, People’s Association and @tasekjurong for the support as well.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo get_template_directory_uri(); ?>/img/community.jpg" role="img">

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Community Activity 2</h2>
      <p class="lead">Type in the description of the community activity</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo get_template_directory_uri(); ?>/img/community.jpg" role="img">

    </div>
  </div>

  <hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Community Activity 2</h2>
    <p class="lead">Type in the description of the community activity</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo get_template_directory_uri(); ?>/img/community.jpg" role="img">

  </div>
</div>
</body>

<?php get_footer(); ?>