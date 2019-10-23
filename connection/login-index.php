<?php session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['submit'])){
    
    $regno = mysqli_real_escape_string($conn, $_POST['registrationno']);
    $password = mysqli_real_escape_string($conn, $_POST['pswd']);
    $category = $_POST['category'];
    $tablename;
    $path;
    
    if($category == "student"){
        $tablename = "studentLogin";
        $path = "../dashboard/studentDashboard.php";
    }
    if($category == "hod"){
        $tablename = "hodLogin";
        $path = "../dashboard/hodDashboard.php";
    }
    if($category == "jd"){
        $tablename = "jdLogin";
        $path = "../dashboard/jdDashboard.php";
    }
    if($category == "warden"){
        $tablename = "wardenLogin";
        $path = "../dashboard/wardenDashboard.php";
    }
    
    $sql = "Select * from $tablename where regno=$regno";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    
    if($resultcheck<=0){
        echo "<script type='text/javascript'>
        alert('Invalid Login Credentials..!!!');
        </script>";
    }
    else{
        if($password == $row['password']){
            $_SESSION = array();
            $_SESSION['regno'] = $row['regno'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['branch'] = $row['branch'];
            $_SESSION['year'] = $row['year'];
            $_SESSION['rollno'] = $row['rollno'];
            $_SESSION['profile'] = $row['profile'];
            header("location:$path");
        }
        else{
            echo "<script type='text/javascript'>
        alert('Invalid Login Credentials..!!!');
        </script>"; 
            
        }
    }
    
}


?>