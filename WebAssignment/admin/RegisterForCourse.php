<?php
    include("includes/header.php");
?>              
<div class="content"><!-- this is the content div -->
    <form action="course_form.php" method="post">
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
                <td style=" text-align:center;"><input type="text" name="level" style="width:200px"/></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td style=" text-align:center"><input type="text" name="coursename" style="width:200px" /></td>
            </tr>
            
            <tr>
                <td>No of Unit</td>
                <td style=" text-align:center"><input type="text" name="unit" style="width:200px" /></td>
            </tr>
           
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="SUBMIT HERE" /></td>
            </tr>
        </table>
        </form>
              </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
