<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $Temp = "";
  $result = 0;
  if (isset($_POST['YourNumber'])) {
    $Temp = $_POST['YourNumber'];
  }

  if ($Temp > 0 and $Temp <= 9999999) {
    while ($Temp >= 0) {
      $result = $result + ((-1) ** $Temp / (2 * $Temp + 1)) * 4;
      $Temp = $Temp - 1;
    }
    echo "<h4>$result</h4>";
  } else {
    echo "<h4>Invalid_Number</h4>";
  }

  ?>

</body>

</html>