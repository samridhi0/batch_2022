<html>
<head>
<title>comparison opeartor</title>
</head>
<body style="background-color:#A7BEAE;">
<h1 style="text-align:center;font-size:300%;font-style:italic;">COMPARISON OPERATORS</h1>
<p style="font-size:150%;font-style:cursive;">The comparison operators are used to compare two values (number or string):</p>
<h4 style="font-style:cursive;font-size:200%;">*Equal</h4>
<?php
$x = 200;  
$y = "100";
var_dump($x == $y); 
?> 

<h4 style="font-style:cursive;font-size:200%;">*Identical</h4> 
<?php
$x = 500;  
$y = "100";
var_dump($x === $y); 
?>  

<h4 style="font-style:cursive;font-size:200%;">*Not equal</h4> 
<?php
$x = 700;  
$y = "800";
var_dump($x != $y); 
?>  

<h4 style="font-style:cursive;font-size:200%;">*Not equal</h4> 
<?php
$x = 900;  
$y = "200";
var_dump($x <> $y); 
?>  

<h4 style="font-style:cursive;font-size:200%;">*Not identical</h4> 
<?php
$x = 200;  
$y = "500";
var_dump($x !== $y); 
?>  

<h4 style="font-style:cursive;font-size:200%;">*Greater than</h4> 
<?php
$x = 600;  
$y = "800";
var_dump($x > $y); 
?>  

<h4 style="font-style:cursive;font-size:200%;">*less than</h4> 
<?php
$x = 200;  
$y = "350";
var_dump($x < $y); 
?> 

<h4 style="font-style:cursive;font-size:200%;">*Greater than or equal to</h4> 
<?php
$x = 600;  
$y = "700";
var_dump($x >= $y); 
?>   

<h4 style="font-style:cursive;font-size:200%;">*Less than or equal to</h4> 
<?php
$x = 1000;  
$y = "000";
var_dump($x <= $y); 
?> 
<center><button style="background-color:#E7E8D1;font-size:200%;"><a href="operators.php">OPERATORS</a></button></center>
</body>
</html>
