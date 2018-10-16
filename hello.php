<html>
 <head>
  <title>Example</title>
 </head>
 <body>
 	1. 
	<?php 
	echo "\"Good Morning, Dave,\" said HAL.";
	?>
	<br>
	2.
	<?php
		$radius=10;
		$area=pow($radius, 2)*pi();

		echo round($area, 2);
	?>
	<br>
	3.
	<?php
		$celFahr=100;
		$c=(5/9)*($celFahr-32);
		echo round($c, 2);
	?>
	<br>
	4.
	<?php
		$fun=" PHP is fun ";
		$funlen=strlen($fun);
		if (substr($fun, -1) == " ") {
			$funlen--;
		}
		if (substr($fun, -funlen,1)) {
			$funlen--;
		}
		echo "String has $funlen characters";
	?>
	<br>
	5.
	<?php
	?>
	<br>
	6.
	<?php 
		$a="hannah";
		$b =  strrev($a);

		if($a == $b){
		    print "$b is a palindrome";
		} else {
		    print "$b is not a palindrome"; 
		}
	?>
	<br>
	7.
	<?php

	?>
	<br>
	8.
	<?php
	?>

 </body>
</html>