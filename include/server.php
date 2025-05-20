<?php

require_once 'database.php';
$db = new DBconnect();
$errors = array();
if (isset($_POST["submit"])) {
	
	$student_reg_no  = $_POST["student_reg_no"];
	$document_name  = $_POST["document_name"];
	$document_version  = $_POST["document_version"];
	$submission_date = $_POST["submission_date"];
	$username = $_POST['username'];
	$comments  = $_POST["comments"];
	//$file_name = basename($_POST["file_name"]);
	//$fileName = basename($_FILES["file"]["name"]);
	$targetDir = "D:\YEAR 4\Project";
	$file_name = basename($_FILES["file_name"]["name"]);
	//print_r($file_name);
	 $targetFilePath = $targetDir . $file_name;
	 
	 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	 //print_r($fileType);
	 

	 $allowTypes = array('jpg', 'pdf','docx');
	if(in_array($fileType, $allowTypes)){

		if (move_uploaded_file($_FILES["file_name"]["tmp_name"], $targetFilePath)) {
			# code...
			$query = "insert into project_document(student_reg_no,document_name,document_version,file_name, submission_date, username, comments) VALUES(?,?,?,?,?,?,?)";
			 $result = $db->connect()->prepare($query);
			 $result->execute([$student_reg_no, $document_name, $document_version, $file_name, $submission_date, $username, $comments]);


		}
		header("Location: ../dashboard/student.php");
		 
	}
	// //print_r($document_version);
	
}
if (isset($_POST["save"])) {
	$student_reg_no = $_POST["student_reg_no"];
	$project_title = $_POST["project_title"];
	$project_type = $_POST["project_type"];
	$project_session = $_POST["project_session"];
	$query = "insert into project_details(student_reg_no,project_title,project_type,project_session) VALUES(?,?,?,?)";
	// $db = new DBconnect();
	$result = $db->connect()->prepare($query);
	$result->execute([$student_reg_no, $project_title, $project_type, $project_session]);
	header("Location: student.php");
}
if (isset($_POST["save1"])) {
	$student_name = $_POST["student_name"];
	$student_reg_no = $_POST["student_reg_no"];
	$project_title = $_POST["project_title"];
	$lecturer_username = $_POST["lecturer_username"];

	$query = "insert into users(student_name,student_reg_no,project_title,lecturer_username) VALUES(?,?,?,?)";
	$result = $db->connect()->prepare($query);
	$result ->execute([$student_name, $student_reg_no, $project_title, $lecturer_username]);
	header("Location: ../dashboard/coordinator.php");
}
if (isset($_POST["register1"])) {
	$student_name = $_POST["student_name"];
	$student_reg_no = $_POST["student_reg_no"];
	$username = $_POST["username"];
	$project_title = $_POST["project_title"];
	$password = $_POST["password"];
	// $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
	$password = md5($password);
	$query = "insert into student_details(student_name,student_reg_no,username,project_title,password) VALUES(?,?,?,?,?)";
	$db = new DBconnect();
	$result = $db->connect()->prepare($query);
	//print_r($result);
	$result->execute([$student_name, $student_reg_no, $username, $project_title, $password]);
	header("Location: ../dashboard/coordinator.php");
}
if (isset($_POST["register2"])) {
	$lecturer_name = $_POST["lecturer_name"];
	$staff_no = $_POST["staff_no"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	$query = "insert into lecturer_details(lecturer_name,staff_no,username,password) VALUES(?,?,?,?)";
	$db = new DBconnect();
	$result = $db->connect()->prepare($query);
	//print_r($result);
	$result->execute([$lecturer_name, $staff_no, $username, $password]);
	header("Location: ../dashboard/coordinator.php");
}
if (isset($_POST["post"])) {
	$student_reg_no = $_POST['student_reg_no'];
	$work_done = $_POST["work_done"];
	$start_date = $_POST["start_date"];
	$end_date = $_POST["end_date"];
	$activity_status = $_POST["activity_status"];
	$activity_description = $_POST["activity_description"];
	$query = "insert into journal(student_reg_no,work_done,start_date,end_date,activity_status,activity_description) VALUES(?,?,?,?,?,?)";
	$result = $db->connect()->prepare($query);
	//print_r($result);
	$result->execute([$student_reg_no, $work_done, $start_date, $end_date, $activity_status, $activity_description]);
	header("Location: ../dashboard/student.php");
}

if (isset($_POST["reg_user"])) {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$staffno = $_POST["staffno"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	$query = "insert into admin(firstname,lastname,email,staffno,username,password) VALUES(?,?,?,?,?,?)";
	$result = $db->connect()->prepare($query);
			//print_r($result);
	$result->execute([$firstname, $lastname, $email, $staffno, $username, $password]);
	header("Location: ../index.php");	
}


	// Login Admin
if (isset($_POST['adminlogin'])) {
	
// $username = mysqli_real_escape_string($db, trim($_POST['username']));
// $password = mysqli_real_escape_string($db, $_POST['password']);
	$username = $_POST['username'];
	$password = $_POST['password'];
if (empty($username)) {
array_push($errors, "Username is required");
}
if (empty($password)) {
array_push($errors, "Password is required");
}
if (count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
// $results = mysqli_query($db, $query);
$result = $db->connect()->prepare($query);
$rows=  $result->execute();
if ($result->rowCount() == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: ../dashboard/coordinator.php');
exit();
}else {
array_push($errors, "Wrong username/password combination");

header("Location: ../index.php");
}
}
}
//Login User
if (isset($_POST['login'])) {
    
	$username = $_POST['username'];
	$password = $_POST['password'];
if (empty($username)) {
array_push($errors, "Username is required");
}
if (empty($password)) {
array_push($errors, "Password is required");
}
if (count($errors) == 0) {
	$password = md5($password);
	$query = "SELECT * FROM student_details WHERE username='$username' AND password='$password'";
	// $results = mysqli_query($db, $query);
	$result = $db->connect()->prepare($query);
	$rows=  $result->execute();
	if ($result->rowCount() == 1) {
		session_start();
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header('location: ../dashboard/student.php');
	exit();
	}else {
	array_push($errors, "Wrong username/password combination");

	header("Location: ../index.php");
	}
}
}
//Login User
if (isset($_POST['supervisorlogin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
if (empty($username)) {
array_push($errors, "Username is required");
}
if (empty($password)) {
array_push($errors, "Password is required");
}
if (count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM lecturer_details WHERE username='$username' AND password='$password'";
// $results = mysqli_query($db, $query);
$result = $db->connect()->prepare($query);
$rows=  $result->execute();
if ($result->rowCount() == 1) {
	session_start();
$_SESSION['lecturer_name'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: ../dashboard/supervisor.php');
exit();
}else {
array_push($errors, "Wrong username/password combination");

header("Location: ../index.php");
}
}
}
if (isset($_POST['logout'])) {
	session_destroy();
	header("Location :../index.php");
}

if (isset($_POST["save2"])) {
	
	$student_reg_no  = $_POST["student_reg_no"];
	$document_name  = $_POST["document_name"];
	$username = $_POST['username'];
	$comments  = $_POST["comments"];
	//$file_name = basename($_POST["file_name"]);
	//$fileName = basename($_FILES["file"]["name"]);
	$targetDir = "D:\YEAR 4\Project";
	$file_name = basename($_FILES["file_name"]["name"]);
	//print_r($file_name);
	 $targetFilePath = $targetDir . $file_name;
	 
	 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	 //print_r($fileType);
	 

	 $allowTypes = array('jpg', 'pdf','docx');
	if(in_array($fileType, $allowTypes)){

		if (move_uploaded_file($_FILES["file_name"]["tmp_name"], $targetFilePath)) {
			# code...
			$query = "insert into review(student_reg_no,document_name, file_name, username, comments) VALUES(?,?,?,?,?)";
			 $result = $db->connect()->prepare($query);
			 $result->execute([$student_reg_no, $document_name, $file_name, $username, $comments]);


		}
		header("Location: ../dashboard/supervisor.php");
		 
	}
	// //print_r($document_version);
	
}
?>