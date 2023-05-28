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
//coding to apply for a job
if(isset($_REQUEST['jid']))
{
	$jid=$_REQUEST['jid'];
	$jsid=$_SESSION['seeker'];
	include('../connection.php');
	$query="insert into appliedjob(jid,jseekerid,adate,status) values($jid,'$jsid',curdate(),'True')";
	$res=mysqli_query($con,$query);
	if($res)
	{
		echo "<script>alert('Applied Successfully. Wait for the Admin response.');window.location.href='findjob.php';</script>";
	}
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
<img src="../picture/<?php echo $_SESSION['pic'] ?>" height="60px" width="60px" style="border-radius:50%"/>&nbsp;&nbsp;<a href="seekerlogout.php"><span class="fa fa-sign-out" style="color:white;font-size:20px;  padding-left:30px;"></span></a>
</div>
</div>

<?php include ('seekerheader.php')         ?>

<div class="row"id="job" style="padding-top:5%; background:#ffffff;">
<div class="col-sm-12">
<h1 style="text-align:center;">Recent Jobs</h1><br/>
</div>
<div class="container" style="min-height:100px;">
<div class="row ">
<div class="col-sm-2"></div>
<div class="col-sm-8 py-3 pr-2 pl-4 recent">
<span class="btn btn-success bt" Style="width:10%;">All</span>
<span class="btn btn-outline-success bt hvr hvr-sweep-to-right" Style="width:12%;">New</span>
<span class="btn btn-outline-success bt hvr hvr-sweep-to-right" Style="width:18%;">Featured</span>
<span class="btn btn-outline-success bt hvr hvr-sweep-to-right" Style="width:15%;">Recent</span>
<span class="btn btn-outline-success bt hvr hvr-sweep-to-right" Style="width:20%;">Full Time</span>
<span class="btn btn-outline-success bt hvr hvr-sweep-to-right" Style="width:20%;">Part Time</span>
</div>
<div class="col-sm-2"></div>
</div>
</div>
</div>
<div class="container-fluid" style="background:white;padding-bottom:5%;">
<div class="container">
<div class="row" style="min-height:180px;">

<?php
include('../connection.php');
$query3="select j.*,r.* from jobdetails j,rregister r where j.rid=r.email order by j.jid desc limit 20";
$data3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($data3))
{
$query4="select * from appliedjob where jid=$row3[0] and jseekerid='$seeker'";
$data4=mysqli_query($con,$query4);
$rows=mysqli_num_rows($data4);
?>

<div class="col-sm-6">
<div class="row p-3 m-2" style="min-height:180px;border:1px solid rgba(0,0,0,0.3);">
<div class="col-sm-2 pt-5">  <img src="../companylogo/<?php echo $row3['clogo']?>" height="60px" width="70px"/>
</div><div class="col-sm-7"><b style="font-size:16px;"><?php echo $row3['title']?></b><br/>
<a href="#"><b><?php echo $row3['cname']?></b></a><br/><span><?php echo "Salary :".$row3['salary']?></span><br/>
<span><span class="fa fa-map-marker text-success"></span> <?php echo $row3['location']?></span><br/>
</div><div class="col-sm-3 p-3">
<?php
if($rows>0)
{
?>
<button class="btn btn-outline-success hvr hvr-sweep-to-right">Applied</button>
<?php } 
else
{
?>
<a href='findjob.php?jid=<?php echo $row3['jid'] ?>'><button class="btn btn-outline-success hvr hvr-sweep-to-right">Apply</button></a>
<?php  } ?>

<br/><br/>
<button class="btn btn-success"> <?php echo $row3['post']?> seats</button>
</div></div></div>
<?php } ?>


</div>
</div>
</div>
<!----end of recent job---->

<?php include ('seekerfooter.php')         ?>
</div>
</body>
</html>