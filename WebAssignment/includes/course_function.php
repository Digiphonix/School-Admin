<?php
    function display_course($result, $admin = true, $register_course = false)
    {
  //4.Use the returned data
  echo "<table border='1px' width='400px'>" ;
  if($admin)
  {
      echo "
      <tr>
           <td>Level</td>
           <td>Course</td>          
           <td>No of Unit</td>                                                                       
           <td>Edit</td>
           <td>Delete</td>
           
      </tr>";
  }
  else
  {
      echo "
  <tr>
       <td>Level</td>
       <td>Course</td>          
       <td>No of Unit</td>
       <td>Task</td>                                                                       
  </tr>";
  }
  //looping through all the courses in a present level of the login student
  while($row = mysql_fetch_array($result))
  {
      $reg_course = false;
      //looping through al the registered courses by the student
      while( $courses = mysql_fetch_array($register_course))
      {
          if($row["Id"] == $courses["CourseId"])
          {
                $reg_course = true;
                break;
          }
      }
      /*echo "Name ". $row[1] ."<br>";
      echo "Price ". $row[2] ."<br>";
      echo "Category ". $row[3] ."<br>"; */
      echo "<tr>";
  
      echo "<td>". $row["Level"] ."</td>"  ;
      echo "<td>". $row["Coursename"] ."</td>"  ;
      echo "<td>". $row["Unit"] ."</td>"  ;
      if($admin)
      {
          echo "<td><a href='EditCourse.php?id=$row[Id]'>Update</td></td>";
          echo "<td><a href='DeleteCourse.php?id=$row[Id]'>Delete</td></td>";
      }
      if($reg_course)
      {
        echo "<td>Already Registered</td></td>";
      }
      else
      {
           echo "<td><a href='RegisterCourse.php?id=$row[Id]'>Register</td></td>";
      }
      echo "</tr>";
  }
  echo "</table>" ;
    }
?>
