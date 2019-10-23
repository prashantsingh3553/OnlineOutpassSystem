<html>

    <head>

        <?php include './connection/login-index.php'; ?>
        
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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
    
    <body style="background-image: url(img/login-bg.jpg); object-fit: cover;">
        
        
        <div style="position: relative; float: none; padding-top: 60px; left: 35%; right: 35%; auto; height: 600px; width: 400px;">
        

<form class="text-center border border-light p-5" method="post"
      action="./connection/login-index.php" style="background-color: white;" >

    <p class="h4 mb-4">Sign in</p>

    
    <select class="browser-default custom-select mb-4" name="category" id="select" required>
        <option value="" disabled="" selected="">Choose your option</option>
        <option value="student">Student</option>
        <option value="hod">HOD</option>
        <option value="jd">JD</option>
        <option value="warden">Warden</option>
    </select>

    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Registration No." name="registrationno" required>


    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="pswd" required>

    <div class="d-flex justify-content-around">
        <div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>

            <a href="">Forgot password?</a>
        </div>
    </div>


    <button class="btn btn-info btn-block my-4" type="submit" name="submit" id="submit">Sign in</button>
    
</form>
<!-- Default form login -->
                        
        </div>
        
    </body>


</html>