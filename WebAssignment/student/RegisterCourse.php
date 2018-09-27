<?php
   session_start();
    
    require_once("includes/connection.php");
    
    if(isset($_GET["id"]))
    {
        $supply_course_id = $_GET["id"];
        $supply_student_id = $_SESSION["Id"];
    }
    
    //3.perform database query
  $query = "INSERT INTO studentcourse(StudentId, CourseID, Date) "; 
  $query .= "VALUES($supply_student_id, $supply_course_id,'')" ;
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      // insert query is successful
      header("Location: course_list.php?insert=true");
  }             
?>
