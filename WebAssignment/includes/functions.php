<?php

    function display_teachers($result)
    {
  //4.Use the returned data
  echo "<table border='1px' width='400px'>" ;
  echo "
  <tr>
       <td>Surname</td>
       <td>Firstname</td>          
       <td>State</td>   
       <td>Gender</td>
       <td>Password</td>                                                                     
       <td>Edit</td>
       <td>Delete</td>
  </tr>";
  while($row = mysql_fetch_array($result))
  {
      /*echo "Name ". $row[1] ."<br>";
      echo "Price ". $row[2] ."<br>";
      echo "Category ". $row[3] ."<br>"; */
      echo "<tr>";
  
      echo "<td>". $row["Surname"] ."</td>"  ;
      echo "<td>". $row["Firstname"] ."</td>"  ;
      echo "<td>". $row["State"] ."</td>"  ;
      echo "<td>". $row["Gender"] ."</td>"  ;
      echo "<td>". $row["Password"] ."</td>"  ;
      echo "<td><a href='EditTeacher.php?id=$row[Id]'>Update</td></td>";
      echo "<td><a href='DeleteTeacher.php?id=$row[Id]'>Delete</td></td>";
      echo "</tr>";
  }
  echo "</table>" ;
    }
?>
