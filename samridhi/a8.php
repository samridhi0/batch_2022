<html>
<head>
<title>Conditional operator</title>
</head>
<body style="background-color:#A7BEAE;">
<h1 style="text-align:center;font-size:300%;font-style:italic;">CONDITIONAL OPERATORS</h1>
<p style="font-size:250%;font-style:cursive;">The conditional assignment operators are used to set a value depending on conditions:</p>
<h3 style="font-style:cursive;font-size:150%;">Ternary operator</h3>
<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  

<h3 style="font-style:cursive;font-size:150%;">Null Coalescing operator</h3>
<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  
<center><button style="background-color:#E7E8D1;font-size:200%;"><a href="operators.php">OPERATORS</a></button></center>  
</body>
</html>  
