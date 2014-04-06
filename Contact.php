<!DOCTYPE html>
<html>
<head>
<link href=”assessments/_css/media.css” rel=”stylesheet” media=”screen”>   
<meta charset="utf-8" name="viewport">
<title>Page Name | Site Name - Description</title>
Dark Front 
</head>
<body class='home'>
    <header>
        <h1>
           Dark Front Saga
        </h1>
    </header>
    <link href="/assessments/_css/index.css" rel="stylesheet">
    <nav>
    	<ul>
        	<li>
      <a class="a-home active" href="/index.php" title=”View index”><span>Dark</span> Front</a>
      		</li>
      		<li>
      <a class="a-characters" href="/Character.php" title=”View”><span>Characters</span></a>
      		</li>
           <li>
      <a class="a-story" href="/Story.php" title=”View”><span>Story</span></a>
   		  </li>
            <li>
      <a class="a-art" href="/Art.php" title=”View”><span>Art</span></a>
      		</li>
            <li>
      <a class="a-episodes" href="/Episodes.php" title=”Episodes”><span>Episode</span></a><a class="a-support" href="/Support.php" title=”View”><span>Support</span></a>
      		</li>
      		<li>
      <a class="a-contact" href="/Contact.php" title=”View”><span>About Us</span></a>
      		</li>
            <li>
      <a class="a-new" href="/New.php" title=”View”><span>New</span></a>
      		</li>
             </ul>
    </nav>
    <img class ="header" src="/assessments/pictures/header graphic.jpg" alt="header graphic" />
    
    <h3>About Us</h3>
    <div>
    <p>
    Lorin Lochridge and Rulon Leman are the founders of the Dark Front project. With these
    two working together between their never ending studies and full time work they hope to create
    a timeless and memorable collection of 3d animation and masterful story telling with accomplished
    soundtracks and eventual fans
    <br>
    Lorin Lochridge and Rulon Leman started out with the idea over long distances. Lorin working the art 
    and Rulon working the music while they both worked from Lorin's vision to create with Rulon's sharp eye 
    a detailed and rich fantasy universe
    </p>
 
  <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("aluminiumloch@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 

    <p><strong>Email: aluminiumloch@gmail.com</strong></p>
    Contact form:<a href="http://darkfrontsaga.com/contact.html" title=”Viewsiteplan”>CLICK HERE</a>
    
    </div>
</body>
<footer>
    <a href="/assessments/siteplan.php" title=”Viewsiteplan”>Site Plan</a>
    <a href="/assessments/practice week02.php" title=”ViewPractice”>Persona & plan</a>
    <a href="/assessments/practice.php" title=”View the Deliberate Practice Plan”>Home</a>
    <a href="/assessments/journal.php" title=”viewjournal">journals</a>
    <a href="/index.php" title=”View the Deliberate Practice Plan”>Home Page</a>
        <a href="/assessments/practice.php" title=”View the Deliberate Practice Plan”>Deliberate Practice</a>
</footer>
</html>

