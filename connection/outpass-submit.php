<?php session_start();


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['outpassSubmit'])){
    
        
    
    $date = $_POST['date'];
    $contact = $_POST['contact'];
    $whereto = $_POST['whereto'];
    $reason = $_POST['reason'];
    
    $regno = $_SESSION['regno'];
    
    $sql = "Insert into outpassDB(regno, contact, date, reason, whereto, hod, type) values ( $regno, $contact, '$date', '$reason', '$whereto', 0, 'outpass')";
    
    mysqli_query($conn, $sql);
    sleep(2);
  
    
    header("location:../dashboard/studentDashboard.php");
    


}


?>