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
  <script src="script.js"></script>

  <div id="nav-placeholder">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>
      $.get("nav.html", function(data){
      $("#nav-placeholder").replaceWith(data);
      });
    </script>
  </div>
  
  <h1>Thank You!</h1>
  <p><?="Thanks for submitting, " . $_GET["parent_first_name"] . $_GET["parent_last_name"] . "! We will send an email to \n${parent_email} soon with more details about the class."</p>
 
</body>

</html>