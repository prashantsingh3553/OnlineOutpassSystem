<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_GET['jdpermit']))
{
$id=$_GET['id'];
$sql2 = "update outpassDB set warden=0 WHERE id=$id";
mysqli_query($conn, $sql2);    
$sql1 = "update outpassDB set jd=1 WHERE id=$id";
mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/jdDashboard.php");
}


if(isset($_GET['jddeny']))
{
$id=$_GET['id'];
$sql1 = "update outpassDB set jd=-2 WHERE id=$id";
mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/jdDashboard.php");
}

 ?>