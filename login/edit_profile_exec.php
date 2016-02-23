<?php
session_start();
include('openShiftConnection.php');
$db = loadDatabase();
$fname=$_POST['newfname'];
$lname=$_POST['newlname'];
$password=$_POST['newpassword'];
$phone=$_POST['newphone'];
$email=$_POST['newemail'];
$job_name=$_POST['newjob_name'];
$is_human=$_POST['newis_human'];
$vote_cnt=$_POST['newvote_cnt'];
$address=$_POST['newaddress'];
// $pic=$_POST['pic'];
$sql = "UPDATE users SET (first=$fname, last=$lname, password=$password, phone=$phone, job_name=$email, is_human=$is_human, vote_cnt=$vote_cnt, address=$address) WHERE email=$email";
$query = $db->query($sql);
header("location: test.php?remarks=success");
?>