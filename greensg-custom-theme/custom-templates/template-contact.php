<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>


<body>
  <!--START CODE-->

  <!-- NAVIGATION BAR (WP) -->

  <?php get_template_part("custom-sections/section", "navbar"); ?>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 16px;
      margin-bottom: 16px;
      resize: vertical;
      
    }

    input[type=submit] {
      background-color: green;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-left: 50%;

    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 25px;
      margin-top: 3%;

    }
  </style>
  </head>

  <body>
    <h3 style="text-align: center;">Contact Us</h3>
    <p style="text-align: center;">We’d love to talk to you!</p>

    <div class="container">
      <form action="/action_page.php">
        
        <label style="margin-top: 100px" for="name">Name</label>
        <input style="margin-top: 16px" type="text" id="name" name="name" placeholder="Your name..">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">

        <label for="who_are_you">Who are you</label>
        <select id="who_are_you" name="who_are_you">
          <option value="Researcher">Researcher</option>
          <option value="Student">Student</option>
          <option value="Environmental Activist">Environmental Activist</option>
          <option value="Curious Observer">Curious Observer</option>
          <option value="nil">---</option>
        </select>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

    </div>

    <!--END CODE-->
  </body>
  <?php get_footer(); ?>