<?php
  $supply_surname = $_POST["surname"]; 
  $supply_firstname = $_POST["firstname"];
  $supply_state = $_POST["state"];
  $supply_gender = $_POST["gender"];
  $supply_createpassword = $_POST["password"];
  
 /* echo "surname = ".$supply_surname."<br>";
  echo "firstname = ".$supply_firstname. "<br>";
  echo "state = ".$supply_state. "<br>";
  echo "gender = ". $supply_gender. "<br>";
  echo "create password".$supply_createpassword. "<br>";
  */
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
  $query = "INSERT INTO teachers_list(Surname, Firstname, State, Gender, Password) "; 
  $query .= "VALUES('$supply_surname','$supply_firstname','$supply_state','$supply_gender','$supply_createpassword')" ;
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      // insert query is successful
      header("Location: registration.php?insert=true");
  }                                                                                                                                                
  
  //4.Use the returned data
?>
<p><a href="index_3.php?action=1">Home Page</a></p>