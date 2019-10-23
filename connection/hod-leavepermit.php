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
mysqli_query($conn, $sql);
$sql2 = "update outpassDB set jd=0 WHERE id=$id";
mysqli_query($conn, $sql2);    
$sql1 = "update outpassDB set hodstatus=1 WHERE id=$id";
mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/hod-leave.php");
}


if(isset($_GET['hoddeny']))
{
$id=$_GET['id'];
$sql = "update outpassDB set hod=1 WHERE id=$id";
mysqli_query($conn, $sql);
$sql1 = "update outpassDB set hodstatus=0 WHERE id=$id";
mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/hod-leave.php");
}

 ?>