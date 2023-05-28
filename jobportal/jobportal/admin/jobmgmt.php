<?php
session_start();
$admin="";
if(isset($_SESSION['admin']))
{
$admin=	$_SESSION['admin'];
}
else
{
	echo "<script>window.location.href='../adminlogin.php';</script>";
}
?>
<?php
if(isset($_REQUEST['del']))
{
$jid=$_REQUEST['jid'];
include('../connection.php');
$query3="delete from jobdetails where jid=$jid";
$res3=mysqli_query($con,$query3);
if($res3)
{
	echo "<script>alert('Job deleted successfully.');window.location.href='jobmgmt.php';</script>";
}
}
?>
<html>
<head>
<?php include('adminlink.php'); ?>
<style>
#outer1{
	padding:3%;
	margin:3%;
	border:1px solid black;
	min-height:300px;
	background:#e8e8ff;
	text-align:center;
}
</style>
</head>
<body>
<?php include('adminheader.php'); ?>
<div class="row">
<div class="COL-SM-12" STYLE="text-align:center">JOB MANAGEMENT</div>
<div class="col-sm-12">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Job Category</th>
      <th scope="col">Title</th>
      <th scope="col">Salary</th>
      <th scope="col">Experience</th>
      <th scope="col">Description</th>
      <th scope="col">Skill</th>
      <th scope="col">Location</th>
      <th scope="col">Post</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include('../connection.php');
  $ad=$_SESSION['admin'];
  //echo $ad;
  $query1="select * from jobdetails where rid='$ad' order by jid desc";
  //echo $query1;
  $data1=mysqli_query($con,$query1);
  $i=1;
  while($row1=mysqli_fetch_array($data1))
  {
  ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row1[2] ?></td>
      <td><?php echo $row1[3] ?></td>
      <td><?php echo $row1[4] ?></td>
      <td><?php echo $row1[5] ?></td>
      <td><?php echo $row1[6] ?></td>
      <td><?php echo $row1[7] ?></td>
      <td><?php echo $row1[8] ?></td>
      <td><?php echo $row1[9] ?></td>
      <td><?php echo $row1[10] ?></td>
      <td>
	  <a href="jobmgmt.php?del=1&jid=<?php echo $row1[0]?>">
	  <span class="fa fa-trash" style="color:red"></span></a></td>
    </tr>
  <?php $i++; } ?>	
  </tbody>
</table>
</div>
<br/>

</div>
<?php include('adminfooter.php'); ?>
</body>
</html>