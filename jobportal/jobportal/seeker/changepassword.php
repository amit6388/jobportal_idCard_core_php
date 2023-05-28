<?php
session_start();
if(isset($_POST['sub']))
{
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	$realoldpassword=$_SESSION['password'];
	$user=$_SESSION['seeker'];
	if($realoldpassword==$opass)
	{
	if($npass==$cpass)
	{
		include('../connection.php');
		$query="update jobseekerregister set pass='$npass' where email='$user'";
		mysqli_query($con,$query);
		echo "<script>alert('Password changed.Login again.');window.location.href='../loginform.php';</script>";
	}
	else
	{
		echo "<script>alert('New password and conform password not matched.');</script>";
	}
	}
	else
	{
		echo "<script>alert('Your old password not matched.');</script>";
	}
}
?>
<html>
<head>
<?php include ('seekerlink.php')?>
</head>
<body>
<?php include ('seekerheader.php')?>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="row" style="margin:2%;padding:3%;background:#f8e5e1;border:4px solid #26365a;font-size:14px;font-weight:bold;min-height:300px;">
<FORM action="" method="post">
<div class="col-sm-12" style="text-align:center;font-size:22px">CHANGE YOUR PASSWORD</div>
Old Password: <br/>
<input type="password" name="opass" class="form-control" placeholder="Your current password.."/><br/>
New Password: <br/>
<input type="text" name="npass" class="form-control" placeholder="Enter new password.."/><br/>
Re-enter Password: <br/>
<input type="password" name="cpass" class="form-control" placeholder="Re-enter new password.."/><br/><br/>
<input type="submit" style="background:#26365a;border:none;color:white" class="form-control btn btn-success" name="sub" value="Change Password"/>
</form>
</div>
</div>
</div>
<?php include ('seekerfooter.php')?>
</body>
</html>