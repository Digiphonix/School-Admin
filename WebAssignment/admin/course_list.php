<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("../includes/course_function.php");
?> 

<div class="content"><!-- this is the content div -->
        
        <?php
  
  //3.perform database query
  $query = "SELECT * FROM course";
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  
  display_course($result, true) ;
  //5.close connection to the database
  mysql_close($connection);
?>   
       </div>
       
      <?php
                 include("includes/foter.php")
             ?>
             
</body>
</html>
