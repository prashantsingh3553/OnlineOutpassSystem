<?php
if($_POST['submit']){
    if($_POST['phone'] >= date("Y-m-d")){
        echo "Success";
    }
    else{
        echo "Fail";
    }
}

?>
<html lang="en">

<head>
   
       
    
</head>

<body class="grey lighten-3">

    
  <form method ="post" validation="true">
      <input type="date" name="phone" placeholder="contact" required>
      <input type="submit" name="submit" value="submit">
      
    </form>
    
    
    
</body>

</html>
