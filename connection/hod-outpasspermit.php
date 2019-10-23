<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_GET['hodpermit']))
{
$id=$_GET['id'];
$sql = "update outpassDB set hod=1 WHERE id=$id";
$result = mysqli_query($conn, $sql);
$sql1 = "update outpassDB set hodstatus=1 WHERE id=$id";
$result1 = mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/hodDashboard.php");
}


if(isset($_GET['hoddeny']))
{
$id=$_GET['id'];
$sql = "update outpassDB set hod=1 WHERE id=$id";
$result = mysqli_query($conn, $sql);
$sql1 = "update outpassDB set hodstatus=0 WHERE id=$id";
$result1 = mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/hodDashboard.php");
}

 ?>