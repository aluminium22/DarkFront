<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Prison to Prison Triathlon</title>
<link href="/assessments/_css/nav.css" rel="stylesheet">
<link href="/assessments/_css/.css" rel="stylesheet">


</head>
<body>
<nav>
	<ul>
		<li><a href="/triathlon/index.php">Home</a></li>
		<li><a href="/triathlon/route.html">Route</a>
			<ul>
				<li><a href="/triathlon/swim.html">Swim</a></li>
				<li><a href="/triathlon/bike.html">Bike</a></li>
				<li><a href="/triathlon/run.html">Run</a></li>
			</ul>
		</li>
		<li><a href="/triathlon/registration.php">Registration</a>
			<ul>
				<li><a href="/triathlon/rules.html">Rules</a></li>
				<li><a href="/triathlon/fee.html">Fees</a></li>
			</ul>
		</li>
		<li><a href="/triathlon/history.html">History</a></li>
	</ul>
</nav>
    <div id="logo">
       
   
     <img src="/assessments/pictures/t2tt.png" height='200'width='485'alt='logo'>

    </div>
    <br>
    <br>
  <h2> Registration </h2>
  <p>NOTE:this is not a real race, it's all just a lie</p>
  <br>
  <form>
  <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    
    First name:<br> 
    <input name="fname" type="text" value="" size="30"/><br> 
    Last name:<br> 
    <input name="lname" type="text" value="" size="30"/><br>
    Your email:<br>
     <input name="email" type="tex" value="" size="30"/><br>
    Regular tri:<br>
    <input name="persons" type="checkbox" value="" size="30"/><br>
    If not indicate:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($fname=="")||($email=="")||($message=="")||($lname="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $fname$lname<$email>\r\nReturn-path: $email"; 
        $subject="Triathlon"; 
        $persons="regular tri";
        mail("aluminiumloch@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 

</body>
<footer><a href="/triathlon/contact.php">Contact Us</a>
   <a href="/triathlon/copy.html"> Copyright</a>
   <a href="/triathlon/cite.html"> Cited Sources</a>
   <a href="/triathlon/siteplanalc.html"> Site Plan</a>
</footer>
</html>