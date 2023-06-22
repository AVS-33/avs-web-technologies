<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $user_name = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];
        $date_of_birth = $_POST['date-of-birth'];
        $gender = $_POST['gender'];
        $mobile_number = $_POST['mobile-number'];
        $qualification = $_POST['qualification'];
        $address = $_POST['address'];
        $resume = $_POST['resume'];
        $photo = $_POST['photo'];
        $job_title = $_POST['job-title'];
		
        $query = "insert into user_details (First_name, Last_name, User_name, Email, Password, Date_of_birth, Gender, Mobile_number, Qualification, Adress, Resume, Profile_photo, Job_title) values ('$user_name', '$fname', '$lname', '$email', '$pass', '$date_of_birth', '$gender', '$mobile_number', '$qualification', '$address', '$resume', '$photo', '$job_title')";

		if(mysqli_query($con, $query)) {
            header("Location: login.php");
            exit();
          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
          }
	}



?>