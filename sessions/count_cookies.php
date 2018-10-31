<?php

if (!isset($_COOKIE["counter"])) {
  setcookie("counter", 1);
  $counter = 1;
} else {
  $counter = $_COOKIE['counter'] + 1;
  setcookie("counter", $counter);
}

// echo "Counter: " . $_COOKIE['counter'];
// echo var_dump(isset($_COOKIE["counter"]));

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Count Cookies</title>
  <meta name="author" content="Kyle Huggins">
  <meta name="description" content="Sessions & Cookies homework.">
  <link rel="stylesheet" href="https://unpkg.com/grund.css" />
</head>
<!---->
<body>
  <h2>Count Cookies</h2>
  <p>Page views: <?php echo $counter; ?></p>
</body>
<!---->
</html>
