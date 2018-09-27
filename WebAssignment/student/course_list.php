<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("../includes/course_function.php");
?> 

<div class="content"><!-- this is the content div -->
        
        <?php
      $registered_course_query = "SELECT * FROM studentcourse WHERE StudentId=$_SESSION[Id] ";
          
      $register_result = mysql_query($registered_course_query, $connection);
  
  if(!$register_result)
  {
      echo "Database Eroor: " . mysql_errno();
  }
  else
  {
      //query is successful
     
  }
  
  //3.perform database query
  $query = "SELECT * FROM course WHERE Level='$_SESSION[Level]'";
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  
  display_course($result, false,  $register_result) ;
  //5.close connection to the database
  mysql_close($connection);
?>   
       </div>
       
      <?php
                 include("includes/foter.php")
             ?>
             
</body>
</html>
