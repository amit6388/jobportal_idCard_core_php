<?php
session_start();
if(isset($_POST['login']))
{
$uid=$_POST['uid'];
$pass=$_POST['pass'];
include('connection.php');
$query="select * from jobseekerregister where email='$uid' and pass='$pass'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_array($res);
//echo $count;
if($count>0)
{
$_SESSION['seeker']=$uid;	
$_SESSION['name']=$row[0];
$_SESSION['pic']=$row['pic'];
$_SESSION['dob']=$row['date'];
$_SESSION['mobno']=$row['mobno'];
$_SESSION['password']=$row['pass'];
$_SESSION['gender']=$row['gender'];
$_SESSION['qualification']=$row['qualification'];
$_SESSION['skill']=$row['skill'];
$_SESSION['cvname']=$row['cv'];
echo "<script>window.location.href='seeker/jobseekerdashboard.php';</script>";	
}
else
{
echo "<script>alert('Invalid Credentials .Please try again.');</script>";	
}
}
?>


<html>
<head>
<?php include('link.php');
?>
<style>

.inner
{
min-height:700px;

}
.login
{
background:white;
border:10px solid white;
font-size:20px;
box-shadow:0px 0px 10px 2px black inset;
transition:all ease 1s;
}
.form-control
{
border:2px solid red;
height:45px;
background:transparent;
}
.bt
{
height:45px;
width:100%;
border:none;
background:red;
color:white;
}

</style>
</head>
<body>
<?php include('header.php');
?>
<div class="container-fluid outer">
<div class="row">
<div class="col-sm-12 inner"style="background:url(aa.jpg);background-size:100%;">
<div class="h1 text-center pt-5 text-light"> 
<u style="color:red; text-size:45px;"> LOGIN</u><SPAN STYLE="COLOR:BLACK"> FORM </span><span style="color:black;" class="fa fa-key fa-spin">
</span></div>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4 login my-4 rounded p-5">
<form action="" method="post">
USERNAME
<input type="text" name="uid" required class="form-control"/><br/>
PASSWORD
<input type="PASSWORD" name="pass" required class="form-control"/><br/>
<a  href="seeker/jobseekerdashboard.php" >
<input type="submit" value="LOGIN" name="login" class="bt"/></a>
</form></div>
<div class="col-sm-4"></div>
</div>
</div>
</div>
</div>
<?php include('footer.php');
?>
</body>
</html>