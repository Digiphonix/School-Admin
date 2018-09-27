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
              $query = "SELECT * FROM course WHERE Id =$_GET[id] ";
              $result = mysql_query($query,$connection);
              if(!$result)
              {
                 die("Database query Failed :". mysql_errno());  
              }
              $course = mysql_fetch_array($result);
  ?>
  
        <form action="UpdateCourse.php?id=<?php echo $_GET['id']?>" method="post">
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
                <td>Level</td>
                <td style=" text-align:center;"><input type="text" name="level" style="width:200px" value="<?php echo $course['Level']; ?>"/></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td style=" text-align:center"><input type="text" name="coursename" style="width:200px" value="<?php echo $course['Coursename']; ?>"/></td>
            </tr>
             <tr>
                <td>No of Unit</td>
                <td style=" text-align:center"><input type="text" name="unit" style="width:200px" value="<?php echo $course['Unit']; ?>"/></td>
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
