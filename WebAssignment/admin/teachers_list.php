<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("includes/functions.php");
?> 

<div class="content"><!-- this is the content div -->
        
        <?php
  
  //3.perform database query
  $query = "SELECT * FROM teachers_list";
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  
  display_teachers($result) ;
  //5.close connection to the database
  mysql_close($connection);
?>   
       </div>
       
      <?php
                 include("includes/foter.php")
             ?>
             
</body>
</html>
