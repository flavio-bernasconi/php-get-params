<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="custom.css">
    <!-- JS: MY SCRIPT -->
    <script src="main.js" charset="utf-8"></script>


    <?php
      $l = $_GET["l"];
      $h = $_GET["h"];
      $z = $_GET["z"];

    ?>




    <title>Graph</title>
  </head>
  <body>

    <h1>
      <?php
        echo "lunghezza " . $l . "<br>";
        echo "altezza " . $h . "<br>";
        echo "profondità " . $z . "<br>";

        echo "area " . $l * $h * $z;

       ?>
   </h1>







    </div>
  </body>
</html>
