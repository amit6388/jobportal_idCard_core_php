<?php
session_start();
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
$con=mysqli_connect("localhost","root","","jobportal");
//mysqli_connect(server_name,username,password,database_name);
$query="select cname from category order by cname";
$data=mysqli_query($con,$query);
//print_r($data);
$cat="";
while($rec=mysqli_fetch_array($data))
{
$cat=$cat."<option>$rec[0]</option>";
//echo "<script>alert('$cat');</script>";
}
if(isset($_POST['sub']))
{
$category=$_POST['category'];
$title=$_POST['title'];
$salary=$_POST['salary'];
$exp=$_POST['exp'];
$desc=$_POST['desc'];
$skill=$_POST['skill'];
$location=$_POST['location'];
$requirement=$_POST['requirement'];

$user=$_SESSION['admin'];

$query1="insert into jobdetails(rid,jcategory,title,salary,experience,jdesc,skill,location,post,date,status) values('$user','$category','$title',$salary,$exp,'$desc','$skill','$location',$requirement,curdate(),'True')";
$res=mysqli_query($con,$query1);
if($res)
{
	echo "<script>alert('Job Added Successfully.');</script>";
}
else
{
	echo "<script>alert('Not Added . Please Try Again.');</script>";
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
}
</style>
</head>
<body>
<?php include('adminheader.php'); ?>
<div class="container">
<div class="row">
<div class="col-sm-12">
<form action="" method="post">
<div class="row" id="outer1">
<div class="col-sm-12" style="text-align:center;font-size:24px;font-weight:bold;">
ADD NEW JOB</div>

<div class="col-sm-6">
Job Category :<br/>
<select class="form-control" name="category">
<?php echo $cat; ?>
</select>
</div>
<div class="col-sm-6" >
Job Title :<br/>
<input type="text" class="form-control" required name="title"/>
</div><br/>
<div class="col-sm-6"><br/>
Salary :<br/>
<input type="number" class="form-control" required name="salary"/>
</div>
<div class="col-sm-6"><br/>
Job Experience :<br/>
<input type="text" class="form-control" required name="exp"/>
</div><br/>
<div class="col-sm-6"><br/>
Job Description :<br/>
<textarea class="form-control" rows="5" required name="desc"></textarea>
</div>
<div class="col-sm-6"><br/>
Minimum Skills ? :<br/>
<textarea class="form-control" rows="5" required name="skill"></textarea>
</div>
<div class="col-sm-6"><br/>
Job Location :<br/>
<input type="text" class="form-control" required name="location"/>
</div>
<div class="col-sm-6"><br/>
Post Recuirement :<br/>
<input type="number" class="form-control" required name="requirement"/>
</div>
<div class="col-sm-6"><br/>
<input type="submit" class="form-control btn btn-info" name="sub" value="ADD NOW"/>
</div>
</div>
</form>
</div>

<div class="col-sm-7"></div>
</div></div>
<?php include('adminfooter.php'); ?>
</body>
</html>