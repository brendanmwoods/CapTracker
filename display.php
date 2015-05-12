<html>
	<head>
		<title>Display all scores</title>
	</head>

	<body>
		<?php
			$con = mysql_connect("localhost", "root", "");
			
			if($con){
				echo "connected <br />";
			}
			mysql_select_db("testgarbage",$con);
			$sql = "SELECT * FROM round";
			$results = mysql_query($sql,$con);
			
			while($record = mysql_fetch_array($results)){
				echo $record['score'];
				echo "<br />";
			}
			
		
		
		
		?>
	</body>

</html>