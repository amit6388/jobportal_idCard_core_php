<?php
session_start();
if(isset($_SESSION['seeker']))
{
$seeker=$_SESSION['seeker'];
}
else
{
	echo "<script>window.location.href='../loginform.php';</script>";
}
?>
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$mobno=$_POST['mobno'];
	$gen=$_POST['gen'];
	$quali=$_POST['quali'];
	$skill=$_POST['skill'];
	include('../connection.php');
	$seeker=$_SESSION['seeker'];
	$query="update jobseekerregister set name='$name',date='$dob', mobno='$mobno',gender='$gen',qualification='$quali',skill='$skill' where email='$seeker'";
	mysqli_query($con,$query);
$_SESSION['name']=$name;
$_SESSION['dob']=$dob;
$_SESSION['mobno']=$mobno;
$_SESSION['gender']=$gen;
$_SESSION['qualification']=$quali;
$_SESSION['skill']=$skill;
}
?>
<html>
<head>
<style>
#outer1{
	padding:3%;
	margin:3%;
	border:1px solid black;
	min-height:300px;
	background:#e8e8ff;
}
</style>
<?php include ('seekerlink.php')?>
</head>
<body>
<div class="container-fluid">
<div class="row" style="min-height:50px;background:black;color:orange;">

<div class="col-sm-10 pt-3 pl-5"><h4>Welcome, <?php echo $_SESSION['name'] ?></h4></div>
<div class="col-sm-2" >
<img src="../picture/<?php echo $_SESSION['pic'] ?>" height="60px" width="60px" style="border-radius:50%"/>&nbsp;&nbsp;<a href="seekerlogout.php"><span class="fa fa-sign-out" style="color:white;font-size:20px; padding-left:30px;"></span></a>
</div>
</div>

<?php include ('seekerheader.php')         ?>


<div class="container">
<div class="row">
<div class="col-sm-12">
<form action="" method="post">
<div class="row" id="outer1">
<div class="col-sm-12" style="text-align:center;font-size:24px;font-weight:bold;">
<h3 style="font-size:40px;">MY PROFILE<h3/><br/></div>

<div class="col-sm-2 pt-3">
<iMG src="../picture/<?php echo $_SESSION['pic'] ?>" height="130px" width="130px" style="padding:2%; border:2px double black;"/>
</div><div class="col-sm-10"><div class="row">
<div class="col-sm-6" >
Name :<br/>
<input type="text" class="form-control" value="<?php echo $_SESSION['name'] ?>" required name="name"/>
</div>
<div class="col-sm-6">
Date of Birth :<br/>
<input type="text" value="<?php echo $_SESSION['dob'] ?>" class="form-control" required name="dob"/>
</div>
<div class="col-sm-6"><br/>
Mobile Number:<br/>
<input type="text" class="form-control" value="<?php echo $_SESSION['mobno'] ?>" required name="mobno"/>
</div><br/>
<div class="col-sm-6"><br/>
Email :<br/>
<input type="text" readonly class="form-control" required name="email" value="<?php echo $_SESSION['seeker'] ?>"/>
</div></div></div>
<div class="col-sm-6"><br/>
Gender :<br/>
<input type="text" value="<?php echo $_SESSION['gender'] ?>" class="form-control"  required name="gen"/>
</div>
<div class="col-sm-6"><br/>
Qualification:<br/>
<input type="text" class="form-control" value="<?php echo $_SESSION['qualification'] ?>" required name="quali"/>
</div>
<div class="col-sm-6"><br/>
Skill :<br/>
<input type="text" class="form-control" value="<?php echo $_SESSION['skill'] ?>" required name="skill"/>
</div>
<div class="col-sm-6"><br/><br/>
<input type="submit" class="form-control btn btn-info" name="sub" value="UPDATE PROFILE"/>
</div>
</div>
</form>
</div>

<div class="col-sm-7"></div>
</div></div>


<?php include ('seekerfooter.php')         ?>
</div>
</body>
</html>