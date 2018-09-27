<?php
    include("includes/header.php");
?> 

<div class="content"><!-- this is the content div -->
        <form action="teachers_form.php" method="post">
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
                <td style=" text-align:center;"><input type="text" name="surname" style="width:200px"/></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td style=" text-align:center"><input type="text" name="firstname" style="width:200px" /></td>
            </tr>
            <tr>
                <td>State</td>
                <td style=" text-align:center">
                    <select name="state" style="width:200px">
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
                <td style="text-align:center"><input type="password" name="password" style="width:200px"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit" value="SUBMIT HERE" /></td>
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
