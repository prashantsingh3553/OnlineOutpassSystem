<?php session_start();


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['leaveSubmit'])){
    
    
    $from = $_POST['from'];
    $to = $_POST['to'];
    $contact = $_POST['studentcontact'];
    $parentcontact = $_POST['parentcontact'];
    $reason = $_POST['reason'];
    $whereto = $_POST['whereto'];
    $hostel = $_POST['hostel'];
    $date = date("Y/m/d");
    
    $regno = $_SESSION['regno'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $branch = $_SESSION['branch'];
    $year = $_SESSION['year'];
    $rollno = $_SESSION['rollno'];
    
    $sql = "Insert into outpassDB(regno, firstname, lastname, branch, year, rollno, hostel, contact, date, whereto, datefrom, dateto, parentcontact, reason, hod, type) values ( $regno, '$firstname', '$lastname', '$branch', '$year', $rollno, '$hostel', $contact, '$date', '$whereto', '$from', '$to', $parentcontact, '$reason', 0, 'leave')";
    
    mysqli_query($conn, $sql);
    sleep(2);
    
    
    header("location:../dashboard/student-leave.php");

}



?>