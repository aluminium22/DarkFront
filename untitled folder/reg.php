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