<html>
<head>
<title>Array operator</title>
</head>
<body style="background-color:#A7BEAE;">
<h1 style="text-align:center;font-size:300%;font-style:italic;">ARRAY OPERATORS</h1>
<p style="font-size:250%;font-style:cursive;"> The array operators are used to compare arrays.</p>
<h3 style="font-style:cursive;font-size:150%;">*UNION</h3>
<?php
$x = array("red light" => "stop", "yellow light" => "ready");  
$y = array("green light" => "go", "all ready" => "move");  
print_r($x + $y); 
?>  

<h3 style="font-style:cursive;font-size:150%;">*EQUALITY</h3>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y);
?>  

<h3 style="font-style:cursive;font-size:150%;">*IDENTITY</h3>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>  

<h3 style="font-style:cursive;font-size:150%;">*INEQUALITY</h3>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);
?>  
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);
?>  
<h3 style="font-style:cursive;font-size:150%;">*NON-IDENTITY</h3>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y);
?>  
<center><button style="background-color:#E7E8D1;font-size:200%;"><a href="operators.php">OPERATORS</a></button></center>  
</body>
</html>  