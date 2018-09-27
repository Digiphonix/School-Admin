<?php
    session_start();
    
    //access control
    if(!isset($_SESSION["username"]) && $_SESSION["user"] != "student")
    {
        //invalid login
      header("Location: ../index.php?login=invalid");
    }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contoso University</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

        <div class="box"><!-- this is the box div -->
 
        <div class="social_media"> <!-- this is the social media div -->
        
        <span>
        <img src="../images 2/Facebook.PNG"/>
        <img src="../images 2/Google.PNG" />
        <img src="../images 2/Instagram.PNG"/>
        <img src="../images 2/Linkedin.PNG"/>
        <img src="../images 2/Snapchat.PNG" />
        <img src="../images 2/Twitter.PNG"/>
        <img src="../images 2/Whatsapp.PNG"/>
        <img src="../images 2/YouTube.PNG" />
        
      </span>
     </div>
       
       <div class="menu"><!-- this is the menu div -->
        
        <ul>
               <li><a href="index.php">Home </a></li>
            <li>Course</li>
            <li><a href="AboutUs.php">About Us </a></li>
            <li>Contact Us</li>  
            <li style="padding-left: 500px;"><a href="../includes/logout.php">Logout</a></li>
         </ul>
           
    </div>
           <div class="navigation"><!-- this is the horizontal navigation div -->
                   
                <ul>
                    <li><a href="RegisterForCourse.php">Register Course</a></li>
                    <li><a href="course_list.php">Course List</a></li>
                    <li><a href="result.php">Check Result</a></li>
                    
                    
                </ul>
</div>
