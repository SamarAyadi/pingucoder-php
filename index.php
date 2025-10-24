<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  
  $userName = "Alex";

  switch ($userName) {
    case 'Ahmed':
      echo "Welcome Ahmed";
       break;

    case 'Lily':
      echo "Welcome Lily";
       break;

    case 'Amal':
      echo "Welcome Amal";
       break;

    default:
       echo "Welcome Back";
      break;
  }
  
  ?>
</body>

</html>