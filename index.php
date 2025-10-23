<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

$a = 1;
$b = 1.2;

///////////////////

$string ="Hello  ";
$arr = [
  "white" => "#ffffff",
  "black" => "#000000",
  
  
];

$isSafe = true;

$isValid = false ;


// echo  $string ;

class User {
  public $name = " Samar";
  function great(){
    return 'Hello' . $this->name;
  }
}

$user = new User();

// echo $user->great();


$var = null;


$file = fopen('notes.txt','r');

var_dump( $file , $string , $a );
?>
</body>

</html>