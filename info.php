<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>MA Masters</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/png" href="assets/Logo.png">
      
        <!-- Import Josefin Sans and Abril Fatface font from
        Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril Fatface">
  </head>
  <body>
    <?php
      $parent_first_name = $_POST['parent_first_name'];
      $parent_last_name = $_POST['parent_last_name'];
      $parent_email = $_POST['parent_email'];
      $parent_phone_number = $_POST['parent_phone_number'];
      $student_first_name = $_POST['student_first_name'];
      $student_last_name = $_POST['student_last_name'];
      $class_option = $_POST['class_option'];
      $data = [$parent_first_name, $parent_last_name, $parent_email, $parent_phone_number, $student_first_name, $student_last_name, $class_option, "\n"];

      $f = fopen("signUpFormResponses.csv", "a");
      fputcsv($f, $data);
      fclose($f);
    ?>

    <!--Nav Bar-->
    <div id="nav-placeholder">
            <script src="//code.jquery.com/jquery.min.js"></script>
            <script>
                $.get("nav.html", function(data){
                $("#nav-placeholder").replaceWith(data);
                });
            </script>
        </div>
    <div class="contact_us_submitted">
        <div class="submitted_info">
            <h1><?php echo "Thanks for signing up, " . $parent_first_name . "!"?></h1>
            <h3><?php echo "We just sent an email to " . $parent_email . " with information about payment, 
              a summary of your registration, and all the information you'll need for you or your student to join us in class!
              We are excited to see you soon! Please feel free to fill out the Contact Us form if you have any questions!"?>
            </h3>
            <a href="index.html">Home</a>
        </div>
  </body>
</html>

