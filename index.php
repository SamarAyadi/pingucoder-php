<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php 
// $ages = ["Frances" => 3, "Mabelle" => 24, "Ruth" => 41, "Louise" => 41];
 $people = [
  ["name" => "Frances", "age" => 3 , "Country" => "Norway"],
  ["name" => "Mabelle", "age" => 24 , "Country" => "Samoa"],
  ["name" => "Ruth", "age" => 41 , "Country" => "Liechtenstein"],
  ["name" => "Louise", "age" => 32 , "Country" => "Sweden"],
 ];


 echo $people[2]["Country"];
 echo "<pre>";
 print_r($people);

 echo "</pre>"

// echo "Mabelle age is : " . $ages["Mabelle"];
?>
</body>

</html>