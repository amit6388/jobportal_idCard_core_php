<?php
session_start();
if(isset($_POST['login']))
{
$uid=$_POST['uid'];
$pass=$_POST['pass'];
include('connection.php');
$query="select * from rregister where email='$uid' and password='$pass'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
//echo $count;
if($count>0)
{
$_SESSION['password']=$pass;
$_SESSION['admin']=$uid;	
echo "<script>window.location.href='admin/dashboard.php';</script>";	
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
.outer
{
min-height:700px;
//background:aqua;
background: rgba(255,255,255,.2);
background-size:100% 100%;
}
.inner
{
min-height:700px;

}
.login
{
background:white;
border:2px solid black;
font-size:20px;
box-shadow:0px 0px 10px 2px black inset;
transition:all ease 1s;
}
.form-control
{
border:2px solid black;
height:45px;
background:transparent;
}
.bt
{
height:45px;
background:blue;
width:100%;
border:2px solid black;
background: rgba(255,255,255,.5);
color:black;
}
//.bt:hover
{
	box-shadow:0px 0px 10px 2px white inset;
background:linear-gradient(45deg,aqua,purple);
color:red;
//border:10px solid red;
transition:all ease 1s;
}
.login:hover
{
box-shadow:0px 0px 10px 2px black inset;
background:rgba(255,255,255,.6);
color:black;
//border:10px solid red;
transition:all ease 1s;
}
</style>
</head>
<body>
<?php include('header.php');
?>
<div class="container-fluid outer">
<div class="row">
<div class="col-sm-12 inner" style="background:url('a.jpg');background-size:100%;">
<div class="h1 text-center pt-5 text-light"> 
  <SPAN STYLE="COLOR:BLACK">ADMIN LOGIN</SPAN> <span style="color:black;"><span style="color:white;" class="fa text-info fa-key fa-spin">
</span></span></div>
<div class="row">
<div class="col-sm-4"></div>

<div class="col-sm-4 login my-4 rounded p-5">
<form action="" method="post">
USERNAME
<input type="text" required name="uid" class="form-control"/><br/>
PASSWORD<input required type="PASSWORD" name="pass" class="form-control"/><br/>
<a  href="admin/dashboard.php" >
<input type="submit" value="LOGIN" name="login" class="bt bg-info text-light"/></a>
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