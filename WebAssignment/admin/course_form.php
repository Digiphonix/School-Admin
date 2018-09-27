<?php
  $supply_level = $_POST["level"]; 
  $supply_coursename = $_POST["coursename"];
  $supply_unit = $_POST["unit"];
  
  
   $connection = mysql_connect("localhost","root","");
  if(!$connection)
  {
      die("Database connection failed :". mysql_errno());
  }
  
  //2.select database
  $db_select = mysql_select_db("academic", $connection);
  if(!$db_select)
  {
      die("Database selection Failed :". mysql_errno());
  }
  
  //3.perform database query
  $query = "INSERT INTO course(Level, Coursename, Unit) "; 
  $query .= "VALUES('$supply_level','$supply_coursename','$supply_unit')" ;
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      // insert query is successful
      header("Location: RegisterForCourse.php?insert=true");
  }                                                                                                                                                
  
  //4.Use the returned data
?>
<p><a href="index_3.php?action=1">Home Page</a></p>