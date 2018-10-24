<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey Results</title>
    <meta name="author" content="Kyle Huggins">
    <link rel="stylesheet" href="https://cdn.rawgit.com/kjhx/francisco/v1.4/francisco.css">
    <style>
    .error {
      display: none;
    }
    </style>
    <?php
    // Do not display notices or errors on webpage
    ini_set('display_errors', '0');

    if ($_POST["input-source"] != "Secret Survey") {
    ?>
    <style>
    .content {
      display:none;
    }

    .error {
      display: block;
    }
    </style>
    <?php
    }

    $name = htmlspecialchars($_POST["name"]);
    $class = htmlspecialchars($_POST["class"]);
    $gender = $_POST["gender"];
    $email = htmlspecialchars($_POST["email"]);
    $pword = htmlspecialchars($_POST["pword"]);

    $favCourses = $_POST["courses"];

    $grad = $_POST["grad"];
    $comments = htmlspecialchars($_POST["comments"]);
    ?>
  </head>
  <!---->
  <body>
    <div class="frame">
      <div class="error"><p>Invalid survey source!</div>
      <div class="content">
        <p>Name: <strong><?php echo $name ?></strong></p>
        <p>Classification: <strong><?php echo $class ?></strong></p>
        <p>Gender: <strong><?php echo $gender ?></strong></p>
        <p>E-mail: <strong><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></strong></p>
        <p>Password: <strong><?php echo $pword ?></strong></p>
        <p>Fav. Courses:</p>
        <ul>
          <?php
          $courses = array("Web Development", "Networking", "GUI", "OOP");
          // Iterate through array outputting list items
          if (!empty($favCourses)) {
            foreach ($favCourses as $item) {
              switch ($item) {
                case "class-web":
                  echo "<li>$courses[0]</li>";
                  break;

                case "class-net":
                  echo "<li>$courses[1]</li>";
                  break;

                case "class-gui":
                  echo "<li>$courses[2]</li>";
                  break;

                case "class-oop":
                  echo "<li>$courses[3]</li>";
                  break;

                default:
                  break;
              }
            }
          } else {
            echo "<p>None selected.</p>";
          }
          ?>
        </ul>
        <p>Spring Graduation: <strong><?php echo $grad ?></strong></p>
        <p>Comments: <strong><?php echo $comments ?></strong></p>
      </div>
    </div>
  </body>
  <!---->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/base.js"></script>
</html>
