<!DOCTYPE HTML>
<html>
<head>

<style text="css">
	
	div {	color:green;
			font-size:50px;}

</style>

</head>
<body>
	
	<div>
	<?php
		
		//We make the array
		$numbers = range(20,1000,37);
		
		//The function that returns the 3-th prime number in the array (if such number exists)
		function find_3_prime($arr){
			if(!is_array($arr)) echo "Wrong input(NOT an array)!!!<br>";
			else {
				$count = 0;
				
				foreach($arr as $el){
					$temp = 0;
					for($i=2; $i<=sqrt($el); $i++){
						if($el%$i == 0 and $el != 0 and $el != 1) $temp++;
					}
					if($temp == 0) $count++;
					if($count == 3){
						echo $el."<br>";
						break;
					}			
				}
				if($count < 3) echo "There are less than 3 prime numbers in the array!!!<br>";	
			}
		}
		
		//We test the function
		find_3_prime($numbers);
	
	
		//The function that check whether the three numbers are in the array or not
		function check_exists($num1, $num2, $num3){
			global $numbers;
			$temp = array($num1, $num2, $num3);
			foreach($temp as $el){
				$x = " does not ";
				if(in_array($el,$numbers)) $x = "";
				echo "The number ".$el.$x." exists in the array!!!<br>";	
			}
		}
		
		//We test the function
		check_exists(146, 284, 871);
		
	
	?>
	</div>
	
</body>
</html>