<!DOCTYPE html>
<html>
<head>
	<title>Assignments</title>


<link rel="stylesheet" type="text/css" href="hw4.css">

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
	
        <?php
            date_default_timezone_set('America/New_York');
            $hours_to_show = 11;

           if(isset($_POST['submit'])){
               $hours_to_show = $_POST["hours_to_show"] - 1;
           }

            $timeStamp = time();
            $todayDate = date("D, F j, Y", $timeStamp);                                                  
            $currentTime = date("g:i a",$timeStamp);   
            $todayDay = date("l", $timeStamp);

            function get_hour_string($timeStamp){
                $hour = date("g", $timeStamp);
                $am_or_pm = date("a", $timeStamp);
                return "$hour:00 $am_or_pm";
            }
        ?>


        <div class="container">
            <h1>
                <?php
                echo "<center>";
                    echo "<br>Today's Date: $todayDate<br>
                    	  Current Time: $currentTime<br>";
                echo "</center>";
                ?>
            </h1>

            <table id="event_table">
	            <tr>  
	                <th class='hr_td'></th>
	                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
	                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
	                <th class='table_header'>&nbsp&nbsp</th>
            	</tr>

		        <?php
		        	for ($i = 0; $i <= $hours_to_show; $i++) {
			            $hours = get_hour_string($timeStamp + $i * 60 * 60);
		            	if ($i % 2 == 0) {

			                echo "<tr class='even_row'> \n 
			                		<td class='hr_td'>
			                            <b>$hours</b>
			                      	</td>
			                        <td></td>                      
			                        <td></td>
			                        <td></td>
			                      		\n
			                      </tr> 
			                      		\n";
			            }

			            if ($i % 2 != 0) {
			                echo "<tr class='odd_row'> \n
			                		<td class='hr_td'>
			                            <b>$hours</b>
			                      	</td>
			                      	<td> </td>
			                     	<td> </td>
			                     	<td> </td>
			                     		\n
			                     	</tr> 
			                     		\n";
			            }
		        	}	
		        ?>  
            </table>
        </div>
</body>
</html>