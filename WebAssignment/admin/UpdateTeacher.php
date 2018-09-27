<?php
    
  $supply_surname = $_POST["surname"]; 
  $supply_firstname = $_POST["firstname"];
  $supply_state = $_POST["state"];
  $supply_gender = $_POST["gender"];
  $supply_createpassword = $_POST["password"];
  
  //1.connect to database
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
  $query = "UPDATE teachers_list SET ";
  $query .= "Surname ='$supply_surname', ";
  $query .= "Firstname ='$supply_firstname', ";
  $query .= "State ='$supply_state', ";
  $query .= "Gender ='$supply_gender', ";
  $query .= "Password ='$supply_createpassword' ";
  $query .= "WHERE Id =$_GET[id]";
  
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      //update is successful
      header("Location:teachers_list.php?update=true");
  }
  
  //5.close connection to the database
  mysql_close($connection);
?>
