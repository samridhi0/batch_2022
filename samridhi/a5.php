<html>
<head>
<title>logical operator</title>
</head>
<body style="background-color:#A7BEAE;">
<h1 style="text-align:center;font-size:300%;font-style:italic;">LOGICAL OPERATORS</h1>
<p style="font-size:250%;font-style:cursive;">The logical operators are used to combine conditional 
statements.</p>
<h3 style="font-style:cursive;font-size:150%;">*AND</h3>
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hey its Samridhi Goyal !";
}
?>  

<h3 style="font-style:cursive;font-size:150%;">*OR</h3>
<?php
$x = 300;  
$y = 280;

if ($x == 300 or $y == 280) {
    echo "Hey... I have completed my gratuation! ";
}
?> 

<h3 style="font-style:cursive;font-size:150%;">*XOR</h3>
<?php
$x = 300;  
$y = 380;

if ($x == 300 xor $y == 80) {
    echo "Hey..I live in ludhiana!";
}
?>  

<h3 style="font-style:cursive;font-size:150%;">*AND</h3>
<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hey its Samridhi Goyal !";
}
?>  

<h3 style="font-style:cursive;font-size:150%;">*OR</h3>
<?php
$x = 250;  
$y = 280;

if ($x == 250 || $y == 280) {
    echo "Hey... I have completed my gratuation! ";
}
?> 

<h3 style="font-style:cursive;font-size:150%;">*NOT</h3>
<?php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
?>  
<center><button style="background-color:#E7E8D1;font-size:200%;"><a href="operators.php">OPERATORS</a></button></center>  
</body>
</html>