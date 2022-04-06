<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>

<body>
  <!--START CODE-->

  <section>
    <!-- NAVIGATION BAR (WP) -->
    <?php get_template_part("custom-sections/section", "navbar"); ?>

    <div class="about-us-top">
      <div class="about-us-top-img">
        <div class="about-us-top-shade"></div>
        <div class="about-us-intro">
          <div id="small-intro" class="row">
            GET TO KNOW MORE
          </div>
          <div id="big-intro" class="row">
            ABOUT US
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="about-us">
    <div class="about-us-title">
      Who Are We?
    </div>
    <div class="about-us-seperator"></div>
    <div class="row">
      <div class="col-6">
        <div class="about-us-img-wrapper">
          <img class="about-us-img" src="<?php echo get_template_directory_uri(); ?>/img/people.jpg">
        </div>
      </div>
      <div class="col-6">
        <div class="about-us-content-wrapper-outer">
          <div class="about-us-content-wrapper-inner">
            <div class="about-us-content">
              We are a Singapore based community of people who is focused on better this planet a better planet to live. We are studying the impact of daily human activities on environment and how small steps can ensure positive change on environment.

              If you are a researcher, student, environmental activist or a curious observer, join us now.
            </div>
            <div class="join-us-btn-wrapper">
              <button class="join-us-btn" type="button">Join Us</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <br><br>

  <!-- PEOPLE INTRODUCTION -->
  <!-- no need for section as bootstrap takes care of the height for us -->
  <div class="bg-light">
    <div class="team text-center py-0 py-lg-5">
      <div class="container">
        <div class="header my-5">
          <!-- Header -->
          <h2 class="text-center">The board members:</h2>
          <!-- Description -->
          <p class="text-muted">Meet the people behind GreenSG</p>
        </div>
        <div class="row">
          <!-- Person 1 -->
          <div class="col-md-6 col-lg-3">
            <div class="img-block mb-5 px-5 px-lg-2">
              <!--can change aspect ratio!-->
              <img src="" alt="Picture of Person 1">
              <div class="content mt-2">
                <!-- Name -->
                <h5 class="mt-3">Person 1</h5>
                <!-- Title -->
                <p class="text-muted">CEO of GreenSG</p>
              </div>
            </div>
          </div>
          <!-- Person 2 -->
          <div class="col-md-6 col-lg-3">
            <div class="img-block mb-5 px-5 px-lg-2">
              <!--can change aspect ratio!-->
              <img src="" alt="Picture of Person 2">
              <div class="content mt-2">
                <!-- Name -->
                <h5 class="mt-3">Person 2</h5>
                <!-- Title -->
                <p class="text-muted">Secretary of GreenSG</p>
              </div>
            </div>
          </div>
          <!-- Person 3 -->
          <div class="col-md-6 col-lg-3">
            <div class="img-block mb-5 px-5 px-lg-2">
              <!--can change aspect ratio!-->
              <img src="" alt="Picture of Person 3">
              <div class="content mt-2">
                <!-- Name -->
                <h5 class="mt-3">Person 3</h5>
                <!-- Title -->
                <p class="text-muted">CTO of GreenSG</p>
              </div>
            </div>
          </div>
          <!-- Person 4 -->
          <div class="col-md-6 col-lg-3">
            <div class="img-block mb-5 px-5 px-lg-2">
              <!--can change aspect ratio!-->
              <img src="" alt="Picture of Person 4">
              <div class="content mt-2">
                <!-- Name -->
                <h5 class="mt-3">Person 4</h5>
                <!-- Title -->
                <p class="text-muted">Director of GreenSG</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!--END CODE-->
</body>
<?php get_footer(); ?>