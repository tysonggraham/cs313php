<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$job_name=$_POST['job_name'];
$is_human=$_POST['is_human'];
$vote_cnt=$_POST['vote_cnt'];
$address=$_POST['address'];
// $pic=$_POST['pic'];
mysql_query("INSERT INTO users(first, last, password, phone, email, job_name, is_human, vote_cnt, address)VALUES('$fname', '$lname', '$password', '$phone', '$email', '$job_name', '$is_human', '$vote_cnt', '$address')");
header("location: test.php?remarks=success");
// mysql_close($con);
?>