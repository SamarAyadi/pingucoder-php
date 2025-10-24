<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
 
//  $ahmedAge = 20;
//  $fatimaAge = 20;

//  if ($ahmedAge === $fatimaAge) {
//   echo  "Ahmed is Older than fatima";
//  } else {
//   echo "Ahmed is Younger than fatima";
//  }

$case = 17;
$case2 = 14;
$case3 = 5;

if ($case < $case2) {
  echo "You can ship this case";
}elseif( $case2 < $case3) {
  echo "You can ship case2";
}else {
  echo "Sorry we can't ship anything to you ";
}
 
 ?>
</body>

</html>