<?php
if(isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$date=$_POST['date'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$gender=$_POST['a'];
	$qualification=$_POST['q'];
	$skill=$_POST['skill'];
	$pictmpname=$_FILES['pic']['tmp_name']; //tmp_name of file
	$picfname=$_FILES['pic']['name'];  //filename
	$picftype=$_FILES['pic']['type']; // type of file
	
	$cvtmpname=$_FILES['picture']['tmp_name']; //tmp_name of file
	$cvfname=$_FILES['picture']['name'];  //filename
	$cvftype=$_FILES['picture']['type']; // type of file
	
	include('connection.php');
	$query="insert into jobseekerregister values('$name','$date','$mobno','$email','$pass','$gender','$qualification','$skill','$picfname','$cvfname',curdate())";
	//echo $query;
	$res=mysqli_query($con,$query);
	if($res)
{
	move_uploaded_file($pictmpname,"picture/$picfname");
	move_uploaded_file($cvtmpname,"cv/$picfname");
	echo "<script>alert('Register Successfully . Go for Login .');</script>";
}
	else
{
	echo "<script>alert('Register not Successful . Try Again.');</script>";
}
}
?> 

 <html>
<head>
 <?php include('link.php');
?>
 <style>
 .shivam
 {
	 min-height:500px;
	 width:900px;
	 
	 padding-left:40px;
 }
 .text
 {
	 width:400px;
 }
 </style>
 
</head>
<body>
<?php include('header.php');
?>
<div class="container shivam">
<div class="row"  style="background:#e8e8ff;border:1px solid black" >

<form action="" method="post" enctype="multipart/form-data">
<div class="col-sm-12">

<fieldset style="border-radius:40px;"/>
	<center><h1><span style="color:black;text-align:center;">Jobseeker Registration</span>
	</h1></center></div>
	<hr style="background:black;width:430px;height:3px;margin-top:2px"/>
	<br/>
	<div class="col-sm-12"><div class="row">
	<div class="col-sm-6">
	<b>NAME</b></br>
	<input class="text" name="name" type="text"/></div><br/>
	<div class="col-sm-6">
<b>DOB</b>  &nbsp; &nbsp;<br/><input  style="width:400px;" name="date" required type="date"/></div><br/><br/><br/>
<div class="col-sm-6">
<label><b>MOBILE</b></label><br/><input style="width:400px; height:40px;" name="mobno" required type="number"/></div><br/><br/><br/></br>
<div class="col-sm-6">
   <label for="exampleFormControlInput1"><B>EMAIL ID</B></label>
    <input type="email" class="form-control" id="email" style="width:400px;" name="email" required placeholder="name@example.com"></div><br/><br/><br/>
	<div class="col-sm-6">
<label><b>PASSWORD</b></label></br>
	<input class="text" name="pass" required type="PASSWORD"/></div><br/> 
    <div class="col-sm-6">
	<label><b>GENDER  </b> </label> <br/>   <input   type="radio" value="MALE" name="a"/>  &nbsp; <b>MALE</b>&nbsp; &nbsp;
	<input   type="radio" value="FEMALE" name="a">  &nbsp; <b>FEMALE</b></div><br/><br/><br/> 
    <div class="col-sm-6">	
	<label><b>QUALIFICATION</b></label><br/>
	<input name="q" value="10" type="checkbox"/> 10<sup>th</sup>
	<input name="q" value="12" type="checkbox"/> 12<sup>th</sup>
	<input name="q" value="DIPLOMA" type="checkbox"/> diploma<br/>  
	<input name="q" value="B.TECH" type="checkbox"/> b.tech<br/>
	<input  name="q" value="M.TECH" type="checkbox"/> m.tech</div><br/>
	 <div class="col-sm-6">
	 <label for="exampleFormControlTextarea1"><B STYLE="COLOR:BLACK;"> SKILL </B></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="skill" required style="width:400px;" rows="2"></textarea></div><br/><br/><br/><br/><br/>
	<div class="col-sm-6">
	<label><b> PHOTO UPLOAD  &nbsp;</b></label></br><input type="file" name="pic" required></div><br/> <div class="form-group"></div></BR>
	<div class="col-sm-6">
	 <label><B STYLE="COLOR:BLACK;"> UPLOAD YOUR CV</B></label><br/>
   <input type="file" name="picture" required></div><br/> <div class="form-group"></div><br/><br/><br/><br/>
   <div class="col-sm-12">
<center><input type="submit"style="background:green;color:white;height:40px;font-size:20px;width:150px;border-radius:10px" name="submit1" value="SUBMIT" class="bt"/></center></div><br/><br/>
</div>
	</fieldset>
	</div>
	</div></div></div></form>
	
	</div>
	<?php include('footer.php');
?>
</body>
</head>