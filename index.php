<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
 $ages = ["Frances" => 3, "Mabelle" => 24, "Ruth" => 41, "Louise" => 41];


// asort($ages);
arsort($ages);
 echo "<pre>";

 print_r( $ages);

 echo "</pre>"

// echo "Mabelle age is : " . $ages["Mabelle"];
?>
</body>

</html>