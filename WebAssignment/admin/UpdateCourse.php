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
  $query = "UPDATE course SET ";
  $query .= "Level ='$supply_level', ";
  $query .= "Coursename ='$supply_coursename', ";
  $query .= "Unit ='$supply_unit' ";
  $query .= "WHERE Id =$_GET[id]";
  
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      //update is successful
      header("Location:course_list.php?update=true");
  }
  
  //5.close connection to the database
  mysql_close($connection);
?>
