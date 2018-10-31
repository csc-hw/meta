<?php
session_start();

if (isset($_SESSION["counter"])) {
  $_SESSION["counter"] += 1;
} else {
  $_SESSION["counter"] = 1;
}

// echo "Session: " . session_id();
// echo "<br>";
// echo "Counter: " . $_SESSION['counter'];
// echo "<br>";
// echo var_dump(isset($_SESSION["counter"]));

// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Count Session</title>
  <meta name="author" content="Kyle Huggins">
  <meta name="description" content="Sessions & Cookies homework.">
  <link rel="stylesheet" href="https://unpkg.com/grund.css" />
</head>
<!---->
<body>
  <h2>Count Session</h2>
  <p>Page views: <strong><?php echo $_SESSION["counter"]; ?></strong></p>
</body>
<!---->
</html>
