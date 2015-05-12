<html>
	<head>
		
		<title>Display all scores</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>

	<body>
	
	<h1 class = "header">All Scores</h1>
	
		<?php					
		if(isset($_POST['submit'])){
			$con = mysql_connect("localhost","root","");
				mysql_select_db("testgarbage", $con);
				$sql = "INSERT INTO round (score) VALUES ('$_POST[fscore]')";
				mysql_query($sql,$con);
				mysql_close($con);
				echo "<h5>New Score Entered</h5>";
		}
		else{
			echo "<h4>New Score Failed</h4>";
		}
		
		
			$con = mysql_connect("localhost", "root", "");
			if(!$con){
				echo "Not Connected <br />";
			}
			
			mysql_select_db("testgarbage",$con);
			$sql = "SELECT * FROM round";
			
			if($results = mysql_query($sql,$con)){
			
			echo "<table border = 1>
			<tr>
			<th>Score</th>
			</tr>";
			
			while($record = mysql_fetch_array($results)){
				
				echo "<tr>"; 
				echo "<td>". $record['score'] . "</td>";
				echo "</tr>";
				
				
				//echo $record['score'];
				//echo "<br />";
			}
			echo "</table>";
		
			}
			else {
				echo "mysql_query failed";
			}
		
		
		
		?>
	</body>

</html>