<!DOCTYPE html>
<html>
<head>
	<title>Assignments</title>

<link rel="stylesheet" type="text/css" href="aboutme.css">

	<div id="headName" style="display: inline">
		<a href="index.html" style="text-decoration: none; color: white;">Brent MCKINNEY</a>
		<table style="display: inline; float:right; margin-right: 10px;">
			<tr>
				<td bgcolor="lightyellow">
					<a href="assignments.html" style="color:black">
						Assignments
					</a>
				</td>
				<td bgcolor="lightblue">
					<a href="projects.html" style="color:white">
						Projects
					</a>
				</td>
			</tr>
		</table>
	</div>

</head>


<body>




<div id="bo">
	<br><br>
		<center>
			<h1>This is question 1</h1>

			<?php 
				function isBitten($variable1){
					if($variable1 == 1){
						echo "Charlie ate my lunch!";
					} else {
						echo "Charlie did not eat my lunch!";
					}
				}

				$random_var = rand(0,1);
				isBitten($random_var);
			 ?>
		</center>
</div>










<div id="bo">
	<br><br>
		<center>
			<h1>This is question 2</h1>
			<?php 
				echo "<table width=\"300px\" height=\"400\"";

				for ($i=1; $i<4 ; $i++) { 
					echo "<tr>";
					for ($j=1; $j<6 ; $j++) {
						if ($j%2==1){
							echo "<td bgcolor=\"blue\" height=\"35px\" width=\"35px\">";
							echo "</td>";
						} else{
							echo "<td bgcolor=\"yellow\" height=\"35px\" width=\"35px\">";
							echo "</td>";
						}
					}
					echo "</tr>";
				}
				echo "</table>";
			?>
		</center>
</div>










<div id="bo">
<br><br>
	<center>
		<h1>This is question 3</h1>
		<?php 
			$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July',
							'August','September', 'October', 'November', 'December'); 
			$l = count($month);
			echo "<br>";
			echo "<h3>~Using a standard for loop~</h3>";
			for ($i=0; $i < $l; $i++) { 
				echo $month[$i];
				echo "<br>\n";
			}

			echo "<br>";

			sort($month);

			for ($i=0; $i < $l; $i++) { 
				echo $month[$i];
				echo "<br>\n";
			}

			echo "<br><br>";
			echo "<h3>~Using a for  each loop~</h3>";

			$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July',
							'August','September', 'October', 'November', 'December'); 

			foreach ($month as $value) {
				echo $value. "<br>\n";
			}

			echo "<br>";
			sort($month);

			foreach ($month as $value) {
				echo $value. "<br>\n";
			}
		 ?>
	</center>
</div>










<div id="bo">
<br><br>
	<center>
		<h1>This is question 4</h1>
		<?php 
			$restaurants = array("Chama Gaucha"=>"$40.50",
								 "Aviva by Kameel"=>"$15.00",
								 "Bone's Restaurant"=>"$65.00",
								 "Umi Sushi Buckhead"=>"$40.50",
								 "Fandandles"=>"$30.00",
								 "Capital Grille"=>"$60.50",
								 "Canoe"=>"$35.50",
								 "One Flew South"=>"$21.00",
								 "Fox Bros. BBQ"=>"$15.00",
								 "South City Kitchen Midtown"=>"$29.00");

				echo "<h3>~Original Order~</h3>";

				echo "<table border = \"1\">";
				foreach($restaurants as $x=>$x_value) {
					echo "<tr> ";
					echo "<td>";
					echo $x;
					echo "</td>";
					echo "<td>";
				    echo $x_value;
				    echo "</td>";
				    echo "</tr>";
				}
				echo "</table>";

			function printByPrice($associateArr){

				echo "<h3>~Ordered by Price~</h3>";
				
				asort($associateArr);

				echo "<table border = \"1\">";
				foreach($associateArr as $x=>$x_value) {
					echo "<tr> ";
					echo "<td>";
					echo $x;
					echo "</td>";
					echo "<td>";
				    echo $x_value;
				    echo "</td>";
				    echo "</tr>";
				}
				echo "</table>";
			}

			function printByName($associateArr){

				echo "<h3>~Ordered by Name~</h3>";
				
				ksort($associateArr);

				echo "<table border = \"1\">";
				foreach($associateArr as $x=>$x_value) {
					echo "<tr> ";
					echo "<td>";
					echo $x;
					echo "</td>";
					echo "<td>";
				    echo $x_value;
				    echo "</td>";
				    echo "</tr>";
				}
				echo "</table>";
			}


			printByPrice($restaurants);
			printByName($restaurants);
			echo "<br>";
		 ?>

	</center>
</div>

</body>
</html>