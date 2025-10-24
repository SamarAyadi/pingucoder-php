<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
 
 $names = ["Lela", "Bernard", "Ethan", "Carrie", "Lora"];

//  sort( $names );
 rsort( $names );

 echo "<pre>";
 print_r( $names );

 echo "</pre>";

 ?>
</body>

</html>