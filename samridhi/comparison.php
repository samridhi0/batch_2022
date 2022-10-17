<html>
<body style="background-color: #00e6e6;">
<h1 style="text-align:center;">COMPARISON OPERATOR</h1>
<h4>Equal</h4>
<?php
$x = 200;  
$y = "100";
var_dump($x == $y); 
?> 

<h4>Identical</h4> 
<?php
$x = 500;  
$y = "100";
var_dump($x === $y); 
?>  

<h4>Not equal</h4> 
<?php
$x = 700;  
$y = "800";
var_dump($x != $y); 
?>  

<h4>Not equal</h4> 
<?php
$x = 900;  
$y = "200";
var_dump($x <> $y); 
?>  

<h4>Not identical</h4> 
<?php
$x = 200;  
$y = "500";
var_dump($x !== $y); 
?>  

<h4>Greater than</h4> 
<?php
$x = 600;  
$y = "800";
var_dump($x > $y); 
?>  

<h4>less than</h4> 
<?php
$x = 200;  
$y = "350";
var_dump($x < $y); 
?> 

<h4>Greater than or equal to</h4> 
<?php
$x = 600;  
$y = "700";
var_dump($x >= $y); 
?>   

<h4>Less than or equal to</h4> 
<?php
$x = 1000;  
$y = "000";
var_dump($x <= $y); 
?> 

</body>
</html>
