<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php


$car = "porsche 911";
$_car = "porsche 911";

define("COMPANY","GMC");

?>

  <p><?php  echo "Hello"; echo " World" ;  ?> </p>

  <p> Your Car is : <?php echo $_car ;    ?> </p>


  <?php
   $_car ="BMW";

  ?>

  <p> Your New Car is is : <?php echo $_car ;    ?> </p>
  <p> Company : <?php echo COMPANY ;    ?> </p>
</body>

</html>