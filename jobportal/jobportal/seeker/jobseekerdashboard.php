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

<html>
<head>
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
<div class="container-fluid">
<div class="row ">

<div class="col-sm-12 bg-light" style="min-height:400px;text-align:center;">
<h2 style="text-align:center;color:orange;margin-top:50px;">DASHBOARD</h2><h5>code your prosperous career</h5>
<div class="row pl-5">

<div class="col-sm-2 hvr-pulse" >
<a href="jobseekerdashboard.php" style="text-decoration:none;"><div class="row  "style="background:#28a744;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:40Px;margin-left:50px;color:white;"> DASHBOARD</b>
<div class="col-sm-12" > </div>
</div></a></div>

<div class="col-sm-2 hvr-pulse" ><a href="findjob.php" style="text-decoration:none;"><div class="row"style="background:#868f96;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:40px;margin-left:70px;color:white;">FIND JOB</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse"style="text-align:center;" ><a href="appliedjob.php" style="text-decoration:none;"><div class="row"style="background:#f8ca37;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
 <b style="margin-top:30px;margin-left:70px;color:white;">APPLIED<BR/>JOBS</b>
<div class="col-sm-12"> </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="myprofile.php" style="text-decoration:none;"><div class="row"style="background:#17a3b5;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:30px;margin-left:70px;color:white;">MY<BR>PROFILE</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse"><a href="changepassword.php" style="text-decoration:none;"><div class="row"style="background:#353a40;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" > 
<b style="margin-top:35px;margin-left:60px;color:white;">CHANGE<BR>PASSWORD</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../loginform.php" style="text-decoration:none;"><div class="row"style="background:#007bff;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" > 
<b style="margin-top:40px;margin-left:70px;color:white;">LOGOUT</b>
<div class="col-sm-12" > </div>
</div></a></div>




</div></div></div>
<?php include ('seekerfooter.php')         ?>
</div>
</body>
</html>