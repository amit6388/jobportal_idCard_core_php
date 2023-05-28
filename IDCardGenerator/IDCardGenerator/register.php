<?php

$con = mysqli_connect("localhost","root","","student_id");

?>
<html>
<head>
<style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
			
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
        border:#666666 solid 5px;
		height:300;
		width:300;
		background-color: red;
         }
</style>
</head>
<body >
<center>
	<div class='box'>
	<div align='center'>
		<h2>Registration Form</h2>
	<table>
	<form action='index.php' method='POST' name='register_form'>
		<tr><td>Name:</td><td><input type='text' name='name'></td></tr>
		<tr><td>E-mail:</td><td><input type='email' name='email'></td></tr>
		<tr><td>Password:</td><td><input type='password' name='pass'></td></tr>
		<tr><td>Re-Password:</td><td><input type='password' name='cpass'></td></tr>
		<tr><td colspan="2"align="center"><input type='submit' value='Register' name='register_submit'></td></tr>
		
	</form>
	</table><table> 
	<form action='login.php' method='POST' name='register_login_form'>
		 <tr><td >Have Account</td><td colspan="2"align="center"><input type='submit' value='Sign In' name='register_signin_submit'></td></tr>
	</form>
	 </table> 
   	</div>
</div>
    </body>
</html>


 