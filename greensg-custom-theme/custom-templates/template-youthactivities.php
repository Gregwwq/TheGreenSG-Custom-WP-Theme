<?php
/*
Template Name: Youth Activities
*/
?>

<?php get_header(); ?>

<body>
  <!--START CODE-->

  <!-- NAVIGATION BAR (WP) -->
  <?php get_template_part("custom-sections/section", "navbar"); ?>

  <div class="navbar-spacing"></div>

  <!-- INTRO -->
  <div class="youth-act-intro">
    <div class="intro-title">
      Youth Activities
    </div> <br>
    <div class="intro-content">
      Here are some of the activities our Youths have participated in. Feel free to take a look aorund
    </div>
  </div>

  <!-- CONTAINER -->
  <div class="youth-act-container">
    <div class="youth-act-container-inner">
      <div class="row justify-content-between align-items-lg-center">
                <div class="col-lg-6 col-md-6 mt-md-4 mt-0">
                    <div class="main-youth-act">
                        <!-- MAIN/RECENT YOUTH ACTIVITY -->
                        <img width="535" height="424" src="https://media-exp1.licdn.com/dms/image/C5622AQEeeTi4NfpbuQ/feedshare-shrink_1280/0/1648819487031?e=2147483647&v=beta&t=0z36xecAeEFzusqVrGzsDujoPwYW6TT1GTbmVsLlzKM" class="img-fluid " >
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="youth-act-section mt-5 mt-md-0">
                        <!-- TITLE OF MAIN/RECENT YOUTH ACTIVITY -->
                        <h3>Lorem Ipsum</h3>
                        <!-- INFO OF MAIN/RECENT YOUTH ACTIVITY -->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, accusamus doloremque natus aut neque consectetur adipisci laudantium. Totam iusto illo, quae ratione quia est, autem possimus, at distinctio blanditiis cupiditate.</p>
                    </div>

                    <!-- LOCATION/TIME/AREA OF FOCUS -->
                    <div class="row">
                       <div class="col-lg-12">
                          <div class="row justify-content-between">
                              <div class="col-lg-4 col-sm-6">
                                  <div class="single-event-part">
                                      <div class="single-event-img">
                                          <img src="https://cdn-icons-png.flaticon.com/512/6119/6119638.png" alt="" class="img-fluid">   
                                      </div>
                                      <h5 class="program_title">Location</h4>
                                      <p class="program_subtitle">Tampines East CC</p>
                                  </div>
                              </div>

                              <div class="col-lg-4 col-sm-6">
                                <div class="single-event-part">
                                    <div class="single-event-img">
                                        <img src="https://cdn-icons-png.flaticon.com/512/6119/6119822.png" alt="" class="img-fluid">   
                                    </div>
                                    <h5 class="program-title">Time</h4>
                                    <p class="program-subtitle">13:00-15:00</p>
                                </div>
                              </div>

                              <div class="col-lg-4 col-sm-6">
                                <div class="single-event-part">
                                    <div class="single-event-img">
                                        <img src="https://cdn-icons-png.flaticon.com/512/6119/6119789.png" alt="" class="img-fluid">   
                                    </div>
                                    <h5 class="program-title">Theme</h4>
                                    <p class="program-subtitle">Sustainability</p>
                                </div>
                              </div>
                            
                           
                     
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="youth-act-container-inner">
      <div class="row">
              <div class="col-lg-12">
                          <div class="row">
                              <div class="activity-img">
                                      <img src="https://scontent.fsin16-1.fna.fbcdn.net/v/t39.30808-6/276158665_499971971576650_8828752927851175628_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=uqqyCCYfIhkAX90u8Rk&_nc_ht=scontent.fsin16-1.fna&oh=00_AT8d_mDO6aJJVHdN2ETzPvdY7mpspk2F5AUcOyRItTUGcg&oe=625C2E64" alt="Feature Images" class="img-fluid">
                              </div>
                              <div class="col-md-6 col-xl-7">
                                  <h3>Upcoming activities</h3>
                                      <div class="single-activity-list">
                                        <div class="activity-date">
                                            <h3>25 <span>May</span> </h3>
                                        </div>
                                        <div class="activity-content">
                                            <h4> <a href="https://kidzo.droitlab.com/events/kids-days-drawing-event/">Lorem Ipsum</a></h4>
                                            <p> 14:30 - 17:00</p>
                                      </div>

                              </div>  

                              <div class="single-activity-list orange">
                                        <div class="activity-date">
                                            <h3>08 <span>Dec</span> </h3>
                                        </div>
                                        <div class="activity-content">
                                            <h4> <a href="https://kidzo.droitlab.com/events/kids-days-drawing-event/">Lorem Ipsum</a></h4>
                                            <p> 14:30 - 17:00</p>
                              </div>  
                                          
                </div>
              </div>
        </div>
    </div>
  
  </div>



 
            

  <!--END CODE-->
</body>
<?php get_footer(); ?>