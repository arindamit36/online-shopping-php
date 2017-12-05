

<?php
include("connect.php")
?>
<br />
<body background="bg4.jpg">
<h1 align="center">Administrator Panel</h1>

 <div id="login">
  <fieldset>
  <legend><font size="+3" face="Palatino Linotype, Book Antiqua, Palatino, serif"><font color="#CCCCFF">Login</font></legend>
        <form  method="post" name="form">
       
        
          <table height="196" id='mytable' style="background-color:#55BFAA" align="center">
            <tr>
              <td rowspan="5" align="center" style="padding-top:12px;padding-left:12px; border:none;"><img src="images/people.png" height="200" width="200"   /></td>
            </tr>
           
              <td>Username</td>
              <td>&nbsp;</td>
              <td><input type="text" name="username"  size="30"  id="in" required /></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>&nbsp;</td>
              <td><input type="password" name="password" size="30" id="in" required  /></td>
              <td><a href="forget.php">Forget password</a>
            </tr>
            <tr>
              <td></td>
              <td>&nbsp;</td>
              <td><input type="submit" name="login" value="Login"  /> 
                <input type="reset" value="Reset" name="clear"  /></td>
            </tr>
          </table>
        </form>
         </fieldset>

<?php
 if(isset($_POST["login"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	 $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password';";
	$result = mysql_query($sql); 

    $no_of_row=mysql_num_rows($result);
    echo($no_of_row);
		if($no_of_row>0)
		{
			session_start();
			$_SESSION['username']=$username;
			header("location:dashboard.php");
		}
		else
		?>

<?php

	{
		?>
	<p align="center">Login Failed</p>
        <br />
        <br />
        <?php
	}
}
?>		