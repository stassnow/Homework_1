<!DOCTYPE HTML>
<html>
<head>

<style text="css">
	.div1 {	color:red;
			font-size:50px;}
	.div2 { color:blue;
			font-size:50px;}

</style>

</head>
<body>

	<?php
		
		//Function that checks whether a number is prime or not
		function isPrime($t){
			if(($t-(int)$t != 0) or ($t == 0) or ($t == 1)) return false;
			for($i=2; $i<=sqrt($t); $i++){
				if($t % $i == 0) return false;
			}
			return true;
		}

		
		//We get the $_GET parameter number(if such is entered)
		if(isset($_GET["number"])){
			$x = $_GET["number"];
			if(!is_numeric($x)){
				echo "<div class=\"div1\">"."The parameter is not a number!!!"."</div>";
			}
			else {
				if(!($x>=0 and $x <=19999)){
					echo "<div class=\"div1\">"."The parameter is not within the range [0,19999]!!!"."</div>";
				}
				else {
					if(isPrime($x)){
						echo "<div class=\"div1\">"."The number ".$x." is prime!!!"."</div>";
					}
					else {
						echo "<div class=\"div2\">"."The number ".$x." is NOT prime!!!"."</div>";
					}
				}
			}
		}
	
	?>
	
</body>
</html>