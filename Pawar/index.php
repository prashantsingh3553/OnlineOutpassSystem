<html>
<head>
<title>Try</title>
<?php 
    

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $pswd = $_POST['pswd'];
    if($username == "dishant"){
        if($pswd == "123"){
            echo "<script>alert('Successfully Logged In..!!!');</script>";
        }
        else{
            echo "<script>alert('Invaid Login Credentials..!!!');</script>";
        }
    }
    else{
            echo "<script>alert('Invaid Login Credentials..!!!');</script>";
        }
}

?>
<style>
#tag {color:black;}
    #mtag{color:darkorange;}
    #bt{
        border-radius: 5px;
    }
#button:hover {color:green;}
    #srch{
        border-radius: 5px;
        height:40px;
        width: 500px;
        
    }
    #pg{
        height: 357px;
        width: 1349px;
        background-image:url("img1.jpg");
        
    }
    #pg:hover{
        cursor:pointer;
    }
    #pimg{
        animation:anim 300ms ease-in-out forwards;
        
    }
    
    @keyframes anim{
        0%{ opacity:0;
            transition:ease-in-out;
            background-image:url("img2.jpg");
            transform: translateX(0px);
        }
        100%{   opacity: 1;
            transition:ease-in-out;
            background-image:url("img1.jpg");
            transform:translateX(-3000px);
        }
    }
    
#para	{
		overflow:hidden;
	}
#nav ul li	{	display:block;
		color: #777676;
		text-align:center;
		padding:14px 16px;
		float:left;
		text-decoration:none;
	}
#nav ul	{	list-style:none;
		margin:0;
		padding:0;
		overflow:hidden;
		
	}


    #nav ul ul{
        display:none;
    }    
    #nav ul li:hover>ul{
        
        display:block;
        
    } 
     #nav ul ul li{
        background-color: #ddd;
        margin: 1px;
        color:black;
        width:200px;
    }
    #nav ul ul li:hover{background-color:chartreuse;}
    
    #nav ul li:hover>#inv li:nth-child(1){
	
        animation:li1 300ms ease-in-out forwards;
        }
	 #nav ul li:hover>#inv li:nth-child(2){
	animation-delay:600ms;
        animation:li1 500ms ease-in-out forwards;
        }
	 #nav ul li:hover>#inv li:nth-child(3){
	animation-delay:800ms;
        animation:li1 800ms ease-in-out forwards;
        }
    


    @keyframes li1{
        0%{
            transform:rotateY(-90deg) translate(30px);
        }
        100%{
            transform: rotateY(0deg) translate(0px);
        }
    }

    #nav ul li:hover>#li2 li:nth-child(1){
	
        animation:li2 300ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li2 li:nth-child(2){

        animation:li2 500ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li2 li:nth-child(3){
        animation:li2 800ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li2 li:nth-child(4){
        animation:li2 800ms ease-in-out forwards;
        }
    
    @keyframes li2{
        0%{
            transform:scale(0.3) translateY(-60px);
        }
        80%{  transform:scale(1.2);  }
        100%{
            transform: scale(1) translateY(0px);
        }
    }
    
    #nav ul li:hover>#li3 li:nth-child(1){
        animation:li3 300ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li3 li:nth-child(2){
      
        animation:li3 500ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li3 li:nth-child(3){
         
        animation:li3 800ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li3 li:nth-child(4){
        
        animation:li3 800ms ease-in-out forwards;
        }
    
    @keyframes li3{
        0%{
            transform:rotateX(-180deg) rotateY(-30deg);
            
        }
        25%{
            transform:rotateX(-120deg) rotateY(0deg);
            
        }
        50%{
            transform:rotateX(-90deg) rotateY(30deg);
            
        }
        75%{
            transform:rotateX(-45deg) rotateY(0deg);
            
        }
        100%{
            transform:rotateX(0deg);
        }
    }
    
    #nav ul li:hover>#li4 li:nth-child(1){
	   transform-origin: top right;
        animation:li4 300ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li4 li:nth-child(2){
         transform-origin: top right;
        animation:li4 500ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li4 li:nth-child(3){
         transform-origin: top right;
        animation:li4 800ms ease-in-out forwards;
        }
	 #nav ul li:hover>#li4 li:nth-child(4){
         transform-origin: top right;
        animation:li4 800ms ease-in-out forwards;
        }
    
    @keyframes li4{
        0%{
            transform:rotate(-30deg) translate(30px);
        }
        100%{
            transform:rotate(0deg) translate(0px);
        }
    }
    
#nav ul li:hover{	background-color:dimgrey;
		width:250px;
	transition:width 0.4s ease-in-out;
    
		} 
input[type=text]{
		width:200px;
		height:30px;
		transition:width 0.4s ease-in-out;
		}
input[type=text]:focus{
		width:400px	}
.button{	background-color:#509db7
		color:white;
		padding:10px
		}
#send:hover{
	transition:width 1s cubic-bezier(0,1,0.37,1.97),background 1s;
	background:green;
	width:100px;
	height:50px;
	background:#0AF90A;
	animation:butt 1s ease-in-out 0s infinite;
}
#send{
	background:#0AF90A;
	width:200px;
	height:50px;

}
@keyframes butt{
	0%{
		transition:width 1s ease-in-out;
		width:200px;

	}
	50%{
		transition:width 1s ease-in-out;
		width:300px;
	}
	
	100%{
		transition:width 1s ease-in-out;
		width:200px;
	}
}
#search	{	position:none;	/*absolute and relative*/
		top:none;	/*ex-10%*/
		left:none;
	}
#user:hover{
	
	transition:width 0.5s cubic-bezier(0,1,0.37,1.97),transform 0.3s;
	width:250px;
	transform:rotate(7deg);
}



	
</style>


</head>
<body style="background-color: #F2F2F2;">

<center>
<font face="showcard gothic" size=7 id="tag">WELCOME TO</font><BR><font face="snap itc" size=7 id="mtag">V-MART</font>
	
<br>
<div id="main_body">
	<div id="search">
		<input type="text" name="search" placeholder="Search this.." id="srch">
		<button class="button" id="bt">Submit</button>
	</div>
</div>


<br>
<br>
<hr color=black size=10 noshade>
<br>
<font face=Impact size=5>

	<div id="nav">
		<ul>
            <li id="home">Home
				<ul id="inv">
					<li>Main Page</li>
					<li>Shopping</li>
                    <li>Notifications</li>
                </ul>
            </li>	
			<li id="profile">Profile
                <ul id="li2">
                    <li>Visit Profile</li>
                    <li>Update to Latest</li>
                    <li>View your Cart</li>
                    <li>Earn Points</li>
                </ul>    
            </li>
			<li id="contact">Contact Us
                <ul id="li3">
                    <li>Email</li>
                    <li>Phone number</li>
                    <li>Mail us on Twitter</li>
                    <li>Facebook</li>
                </ul>
            </li>
			<li id="about"> About Us
                <ul id="li4">
                    <li>Address</li>
                    <li> Further Query</li>
                    <li>Feedback</li>
                    <li>References</li>
                </ul>
            </li>
		</ul>
	</div>

</font>
    
<br>

<div id="p">
    <img src="img1.jpg" width="1300px" style="position:absolute; left: 1px;">
</div>

<br><br><br><br><br><br>
    
    <div style="position: absolute; font-size: 25px; color: #757575; width: 500px; left: 20px; top: 580px;">
        
         V-Mart is an Indian multinational technology company based in Pune, India that focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. It is considered one of the Big Four technology companies along with Google, Apple, and Facebook. V-Mart is known for its disruption of well-established industries through technological innovation and mass scale. It is the world's largest e-commerce marketplace, AI assistant provider, and cloud computing platform.
        
    </div>
    <br>
    <div style="position: absolute; font-size: 25px; color: #757575; width: 500px; right: 170px; top: 1200px;">
        
         V-Mart is an e-commerce company based in Pune, India. The company initially focused on book sales, before expanding into other product categories such as consumer electronics, fashion, and lifestyle products. The service competes primarily with Amazon's Indian subsidiary, and the domestic rival Snapdeal as of March 2017, V-Mart held a 39.5% market share of India's e-commerce industry.
        
    </div>
    <img src="shopping.png" height="350px" style="position: absolute; top: 1100px; left: 100px;">
    
    <br>
    <style>
        span{
            position: absolute;
            right: 800px;
        }
        .frm{
            position: relative;
            top: 10px;
            width: 200px;
            height: 30px;
        }
        
    </style>
    
<form style="position: relative; top: 1100px;" method="post">
    <font face=Impact Regular size=5><center>Register Yourself</center></font><br><br>
<font face="Showcard Gothic" size=6>
    <a href="https://www.flipkart.com" target="_blank"><img src="lo.png" align=left id="user" align=left width=180></a><form method="post" action="connect.php"><fieldset>	
    <center><span>NAME :</span>     <input type=text name="name" id="nm" class="frm" placeholder="Name" required><br><br>
        <span> E-mail :</span> <input type=email name="email" class="frm" placeholder="example: abc123@gmail.com" required><br><br>
        <span>PASSWORD :</span> <input type=password name="pswd" class="frm" placeholder="Password" required><br><br>


                                <input type="submit" value="LOGIN" name="submit" id="send"></center></fieldset></form>
</font>
</form>
    </BR>
</center>
</body>
</html>