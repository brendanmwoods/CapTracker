<?php
		
		if(isset($_POST['submit'])){
			$con = mysql_connect("localhost","root","");
				mysql_select_db("testgarbage", $con);
				$sql = "INSERT INTO round (score) VALUES ('$_POST[fscore]')";
				mysql_query($sql,$con);
				mysql_close($con);
				echo "complete";
		}
		else{
			echo "Was not submitted.";
		}
		
?>

