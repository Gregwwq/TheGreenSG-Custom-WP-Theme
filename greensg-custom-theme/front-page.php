<!-- START OF HTML FILE -->
<?php get_header(); ?>

<body>
  <!--START CODE-->
  <!-- LANDING PAGE -->
  <section>
    <!-- NAVIGATION BAR (WP) -->
    <?php get_template_part("custom-sections/section", "navbar"); ?>

    <div class="home-top">
      <div class="home-top-img">
        <div class="home-top-shade"></div>
      </div>
      <div class="home-top-spacing"></div>
      <div class="container justify-content-center">
        <div class="statement">
          <div id="statement-top" class="row">
            <div class="col-12">AN INITIATIVE FOR A</div>
          </div>
          <div id="statement-bot" class="row">
            <div class="col-12">GREEN & SUSTAINABLE SINGAPORE</div>
          </div>
        </div>
        <!-- <div class="change-btn-wrap">
          <button class="change-btn" type="button">JOIN US IN CHANGE</button>
        </div> -->
      </div>
    </div>
  </section>

  <!-- VISION AND MISSION -->
  <div class="vis-and-mis">
    <div class="vis-and-mis-wrapper-outer">
      <div class="vis-and-mis-wrapper-inner">
        <div class="vision">
          <div id="vis-title">
            Our Vision
          </div>
          <div id="vis-body">
            Testing To build a community of shared learning and action to help protect the balance of human life with the natural world, so that all can thrive in it.
          </div>
        </div>
        <div class="mission">
          <div id="mis-title">
            Our Mission
          </div>
          <div class="row">
            <div id="spark" class="col-lg-4">
              <div class="mis-sub-head">
                Spark
              </div>
              <div class="mis-body">
                Invigorate community action and harvest collectively for a better, more sustainable world.
              </div>
            </div>
            <div id="learn" class="col-lg-4">
              <div class="mis-sub-head">
                Learn
              </div>
              <div class="mis-body">
                Educate and co-learn with partners in the community about the climate crisis, and seek solutions to tackle it.
              </div>
            </div>
            <div id="take-action" class="col-lg-4">
              <div class="mis-sub-head">
                Take Action
              </div>
              <div class="mis-body">
                Empower and create platforms for people from all walks of life to value nature, biodiversity and green living.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- OUR WEBINARS -->
  <?php get_template_part("custom-sections/section", "ourwebinars"); ?>

  <!-- ACTIVITIES WITH THE COMMUNITY -->
  <?php get_template_part("custom-sections/section", "actcommunity"); ?>

  <!-- ACTIVITIES WITH THE YOUTH -->
  <?php get_template_part("custom-sections/section", "actyouths"); ?>

  <!-- RESEARCH AND WHITE PAPERS -->
  <?php get_template_part("custom-sections/section", "research"); ?>

  <!-- INTERESTING ARTICLES -->
  <?php get_template_part("custom-sections/section", "articles"); ?>

  <!-- SOCIAL MEDIA SITES -->
  <?php get_template_part("custom-sections/section", "socials"); ?>

  <!--END CODE-->
</body>
<?php get_footer(); ?>