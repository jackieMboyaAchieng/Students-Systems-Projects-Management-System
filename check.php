<?php 
if ($_POST["user_type"] === "NULL") {
	echo "<p>Please select an option from the select box.</p>";
}else if ($_POST["user_type"] === "supervisor") {
	header("Location: dashboard/supervisor.php");
}else{
	header("Location: dashboard/student.php");
} ?> 