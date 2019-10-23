
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
    
    
    
    
    
    
        
    <!--        Congrats Modal     -->
     <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" style="position:absolute; left:10%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Success..!!!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email" style="position:absolute; text-align:center;">Your Application has been submitted sucessfully..!!!</label>
        </div>

        <div class="md-form mb-4">
            <br>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">OK</button>
      </div>
    </div>
  </div>
</div>
    
<!--    Congrats Modal End-->
    
    
    
    
    
    
    
    

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
        <a href="student-nightout.php" class="list-group-item list-group-item-action active waves-effect">
          <i class="fas fa-bed mr-3"></i>Night Out</a>
        <a href="student-leave.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-plane-departure mr-3"></i>Leave</a>
        <a href="status.php" class="list-group-item list-group-item-action waves-effect">
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

        
        
        <!-- Default form register -->
        <form class="text-center border border-light p-5" method="post" action="../connection/nightout-submit.php">

            <p class="h4 mb-4">NightOut Application</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="firstame" class="form-control" placeholder="First name" value="<?php echo ($_SESSION['firstname']); ?>" readonly>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="lastname" class="form-control" placeholder="Last name" value="<?php echo ($_SESSION['lastname']); ?>" readonly>
                </div>
            </div>
            
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="regno" class="form-control" placeholder="Registration No." value="<?php echo ($_SESSION['regno']); ?>" readonly>
                </div>
                <div class="col">
                    <input type="text" id="branch" class="form-control" placeholder="branch" value="<?php echo ($_SESSION['year']); echo " "; echo ($_SESSION['branch']); ?>" readonly>
                </div>
                <div class="col">
                    <input type="text" id="rollno" class="form-control" placeholder="rollno" value="<?php echo ($_SESSION['rollno']); ?>" readonly>
                </div>
            </div>
            
            <hr>
            <br>
            <div class="form-row mb-4">
                <div class="col" style="top:20px;">
                    <span style="position: absolute; left: 10px; font-weight: 700; top: 8px;">Hostel Details : </span>
                    <input type="text" id="hostel" name="hostel" class="form-control mb-4" placeholder="Flank with Room No. eg: C102" style="position: relative; left: 170px; width: 400px;">
                </div>
            </div>
            
            <div class="form-row mb-4">
                
                <div class="col">
                    <span style="position: absolute; left: 10px; font-weight: 700; top: 8px;">Date : </span>
                    <input type="date" id="date" name="date" class="form-control mb-4" placeholder="Date" style="position: relative; left: 170px; width: 250px;">
                </div>
            </div>
                
            <div class="form-row mb-4">    
                <div class="col" style="top:-16px;">
                    <span style="position: absolute; left: 10px; font-weight: 700; top: 8px;">Student's Contact : </span>
                    <input type="number" id="contactnumber" name="studentcontact" class="form-control" placeholder="Contact No." style="position: relative; left: 170px; width: 250px;">
                    <label id="cntct-mssg" style="position:relative; left:-100px; font-size:12px; color:red;"></label>
                </div>
                <div class="col" style="top:-16px;">
                    <span style="position: absolute; left: 10px; font-weight: 700; top: 8px;">Parent's Contact : </span>
                    <input type="number" id="contactnumber" name="parentcontact" class="form-control" placeholder="Contact No." style="position: relative; left: 170px; width: 250px;">
                    <label id="cntct-mssg" style="position:relative; left:-100px; font-size:12px; color:red;"></label>
                </div>
            </div>


            <div class="form-row mb-4">
                
                <div class="col">
                    <span style="position: absolute; left: 10px; font-weight: 700; top: 8px;">Where to : </span>
                    <textarea id="whereto" name="whereto" class="form-control mb-4" placeholder="Enter your Destination..!!!" style="position: relative; left: 120px; width: 600px;"></textarea>
                </div>
            </div>
            <div class="form-row mb-4">
                
                <div class="col">
                    <span style="position: absolute; left: 10px; font-weight: 700; top: 8px;">Reason : </span>
                    <textarea id="whereto" name="reason" class="form-control mb-4" placeholder="Reason..!!!" style="position: relative; left: 120px; width: 600px;"></textarea>
                </div>
            </div>


            
            
            <!-- Sign up button -->
            <div data-toggle="modal" data-target="#modalLoginForm">
            <button class="btn btn-default btn-rounded mb-4 btn-info my-4 btn-block btn-default btn-rounded mb-4" type="submit" name="nightoutSubmit">Submit</button>
            </div>
            
            
           
    <hr>


</form>
        
        
        
        
        
        
        
      </div>

  </main>
  <!--Main layout-->

    

    
    
    
    
    
    
    
  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn" style="position: sticky; height:5%; width: 100%; bottom: 0;">

   

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
