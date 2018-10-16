<!DOCTYPE html>
<html>
<head>
	<title>Assignments</title>

	<style>


	   hr {
	        color: #ff9900; 
	        height: 1px; 
	    }
	   a:hover {
	        color: #ff0000; 
	        text-decoration: none;
		}
		fieldset{
			margin-right: 40%;
			margin-left: 40%;
		}

		<?php

		if(isset($_POST["submit"])){
			if ($_POST["bold"]) {
				echo "p{font-weight: bold;}";
			}

			if ($_POST["italics"]) {
				echo "p{font-style: italic}";
			}
			if ($_POST["color"] == "blue") {
				echo "p{color: blue;}";
			} elseif ($_POST["color"] == "red") {
				echo "p{color: red;}";
			} elseif ($_POST["color"] == "green") {
				echo "p{color: green;}";
			} else {
			}
		}
		?>

	</style>


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
		TEXT EDITOR
			<form action = "assignment4p1.php" method="post">
				 <div>
				 	<br>
				 	<textarea rows="5" cols="25" autofocus name="textareaName">
				 		Enter your text here!
				 	</textarea>
				 	<br>
				 	<br>

				 	<fieldset>
				 		<legend>Font Styles:</legend>
							 <input type="checkbox" name="bold" /> Bold
							 <input type="checkbox" name="italics"/> Italics <br><br>
					 </fieldset>
					 <br>
					 <fieldset>
					 	<legend>Font Colors:</legend>
					 		<input type="radio" name="color" value="black" checked="checked" /> Black<br>
							 <input type="radio" name="color" value="blue" /> Blue<br>
							 <input type="radio" name="color" value="red" /> Red<br>
							 <input type="radio" name="color" value="green" /> Green<br>
					 </fieldset>
					 <br>

					 <input type="submit" name="submit" value="SUBMIT">
				 </div>
			</form>

			<?php
				if(isset($_POST["submit"])){
					echo "<p>". $_POST[textareaName] . "</p>";
				}	
			?>
	</center>
</div>
</body>
</html>