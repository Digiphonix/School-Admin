 <?php
    include("includes/header.php");
?> 

<div style="float:left; width:500px; padding-left:10px; text-align:justify; "><!-- this is the content div -->
        <?php    //1.connect to database
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
              $query = "SELECT * FROM student WHERE Id =$_GET[id] ";
              $result = mysql_query($query,$connection);
              if(!$result)
              {
                 die("Database query Failed :". mysql_errno());  
              }
              $student = mysql_fetch_array($result);
  ?>
  
        <form action="UpdateStudent.php?id=<?php echo $_GET['id']?>" method="post">
        <table style=" width:500px; alignment-adjust:central">
           <tr>
            <td colspan="2">
            <?php
                if(isset($_GET['insert']) && $_GET['insert'] == 'true')
                {
                    echo "Record inserted Sucesfully";
                }
            ?>
            </td>
            </tr>
            <tr>
                <td>Surname</td>
                <td style=" text-align:center;"><input type="text" name="surname" style="width:200px" value="<?php echo $student['Surname']; ?>"/></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td style=" text-align:center"><input type="text" name="firstname" style="width:200px" value="<?php echo $student['Firstname']; ?>"/></td>
            </tr>
            <tr>
                <td>State</td>
                <td style=" text-align:center">
                    <select name="state" style="width:200px">
                        <option><?php echo $student['State']?></option>
                        <option> Kwara </option>
                        <option> Lagos </option>
                        <option> Kogi </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td style="text-align:center">
                    Male<input type="radio" name="gender" value="male" checked="checked" style="width:50px" />
                    Female<input type="radio" name="gender" value="female"  style="width:50px" />
                </td>
            </tr>
            <tr>
                <td>Create Password</td>
                <td style="text-align:center"><input type="password" name="password" style="width:200px" 
                value="<?php echo $student['Password']; ?>"/></td>
            </tr>
             <tr>
                <td>Level</td>
                <td style="text-align:center"><input type="text" name="level" style="width:200px"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit" value="Update" /></td>
            </tr>
        </table>
        </form>
        <!--<form>
           <P> Surname : <input type="text" name="surname"/></P>
        <P>FirstName : <input type="text" name="fristname" /></P>
        <P><input type="submit" value="SUBMIT HERE" /></P>
        </form>-->
              </div>
      
             <?php
                 include("includes/foter.php")
             ?>
</body>
</html>
