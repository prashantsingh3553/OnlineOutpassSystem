
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dashboard | Welcome</title>
    
    <?php include '../connection/login-index.php'; ?>
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
    
    
    
    
    
    
    
    
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

        
        
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
        
      
    
    
    
    
    
    
    
</head>

<body class="grey lighten-3" style="overflow-x:hidden;">
    
    
    
    
    
    
    
    
    
    
    
    

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" style="height: 10%;">
      
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
        
    <ul class="custom-scrollbar">
        <li>
        <div class="logo-wrapper sn-ad-avatar-wrapper" style="transform: scale(2.0); margin-top: 10px;">
        <a href="#"><img src="<?php echo ($_SESSION['profile']); ?>"
            class="rounded-circle"><br><span style="margin-left: -10px; font-size: 13px;"><?php echo ($_SESSION['firstname']); echo " "; echo ($_SESSION['lastname']); ?></span></a>
      </div>
        </li>
        </ul>
      

      <div class="list-group list-group-flush">
        <a href="studentDashboard.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-running mr-3"></i>Outpass
        </a>
        <a href="student-nightout.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-bed mr-3"></i>Night Out</a>
        <a href="student-leave.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-plane-departure mr-3"></i>Leave</a>
        <a href="status.php" class="list-group-item active list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Status</a>
        <a href="../connection/logout.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        
       <p class="h4 mb-4">Application Status</p>

            

            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Date
      </th>    
      <th class="th-sm">Type
      </th>        
      <th class="th-sm">Registration No.
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Contact
      </th>
      <th class="th-sm">Where To
      </th>
      <th class="th-sm">Reason
      </th>    
      <th class="th-sm">Permit
      </th>
    </tr>
  </thead>
  <tbody>
    
      
      <?php

      $dbServername = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbName = "outpass";
      $status;
      
      $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
      $sql = "Select * from outpassDB";
      $sql2 = "Select * from studentLogin where regno =".$_SESSION['regno']."";

      $result = mysqli_query($conn, $sql);
      $result2 = mysqli_query($conn, $sql2);
      
      $resultcheck = mysqli_num_rows($result);;
      $row2 = mysqli_fetch_assoc($result2);
      
      if($resultcheck > 0){
          
          while($row = mysqli_fetch_assoc($result)){
        
        if($row["type"] == "outpass"){      
            if($row["hod"]==0){
                $status = "In Queue";
            } 
            if($row["hod"] == 1){
                if($row["hodstatus"] == 0){
                    $status = "Rejected";
                }
                if($row["hodstatus"] == 1){
                    $status = "Permitted";
                }
            }
        }
              
        if($row["type"] == "leave"){
            if($row["hod"] == 0 || $row["hod"] == 1){
                $status = "In Queue";
            }
            if($row["jd"] == 0){
                $status = "In Queue";
            }
            if($row["jd"] == -2){
                $status = "Rejected";
            }
            if($row["hodstatus"] == 0){
                $status = "Rejected";
            }
            if($row["jd"] == 1){
                $status = "Permitted";
            }
        }      
              
              
            if($row["regno"] == $_SESSION["regno"]){  
            echo "<tr>
                    <td>".$row["date"]."</td>
                    <td>".$row["type"]."</td>
                    <td>".$row["regno"]."</td>
                    <td>".$row2["firstname"]." ".$row2["lastname"]."</td>
                    <td>".$row["contact"]."</td>
                    <td>".$row["whereto"]."</td>
                    <td>".$row["reason"]."</td>
                    <td>".$status."</td>
                    </tr>
                    
                    ";
              
              
          }
          }
          
          
      }
      
      
      ?>
      
   
  </tbody>
  <tfoot>
    <tr>
      <th>Date
      </th> 
      <th>Type
      </th>
      <th>Registration No.
      </th>
      <th>Name
      </th>   
      <th>Contact
      </th>
      <th>Where To
      </th>
      <th>Reason
      </th>
      <th>Permit
      </th>    
    </tr>
  </tfoot>
</table>
    
   
            
            
           
    


        
        
        
        
        
        
        
        
        
        
        
        
        
      </div>

  </main>
  <!--Main layout-->

    

    
    
    
    
    
    
    
  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn" style="position: fixed; height:5%; width: 100%; bottom: 0;">

   

    <div class="footer-copyright py-3">
        <span style="position:relative; bottom:5px;">Made by :</span>
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank" style="position:relative; bottom:5px;"> pRASH </a>
    </div>

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
 

</body>

</html>
student