<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>answer Page</title>
</head>

<body>

  <?php
  

  if (isset($_POST["Number"])) {
    $Temp = $_POST["Number"];
  }

  $N = (int)$Temp;
  $Result = 0;
  $Num = 1;
  $Den = 1;
  $I = 0;

  if ($N > 0) {
    while ($I < $N) {
      $Result = $Result + $Num/$Den;
      $Num = $Num * -1;
      $Den = $Den + 2;
      $I = $I + 1;
    }
    $Result = $Result * 4;
    echo "<h4>$Result</h4>";
  } else {
    echo "<h4>Number must be greater than 0</h4>";
  }

  ?>

</body>

</html>