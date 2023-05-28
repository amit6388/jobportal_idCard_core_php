<?php
if(isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cname=$_POST['cname'];
	$ctype=$_POST['ctype'];
	$fields=$_POST['fields'];
	$location=$_POST['location'];
	$tmpname=$_FILES['logo']['tmp_name']; //tmp_name of file
	$fname=$_FILES['logo']['name'];  //filename
	$ftype=$_FILES['logo']['type']; // type of file
	include('connection.php');
	$query="insert into rregister values('$name','$mobno','$email','$pass','$cname','$fname','$location','$ctype','$fields',curdate())";
	//echo $query;
	$res=mysqli_query($con,$query);
	if($res)
{
	move_uploaded_file($tmpname,"companylogo/$fname");
	echo "<script>alert('Register Successfully . Go for Login .');</script>";
}
	else
{
	echo "<script>alert('Register not Successful .Try Again.');</script>";
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
<div class="row"  style="background:#e8e8ff;border:1px solid black;" >

<form action="" method="post" enctype="multipart/form-data">
<div class="col-sm-12"> 
<fieldset style="border-radius:40px;"/>
	<center><h1><span style="color:black;text-align:center;">Recuiter Registration</span>
	</h1></center>
	<hr style="background:black;width:400px;height:3px;margin-top:2px"/>
	
	<div class="col-sm-12"><div class="row">
	<div class="col-sm-6"></br>
	
	<label><b>NAME :</b></label></br>
	<input class="text" name="name" required type="text"/></div><br/>
	<div class="col-sm-6"><br/>
    <label><b>CONTACT NO :</b></label><br/><input style="width:400px;" name="mobno" required type="number"/></div><br/>
<div class="col-sm-6"><br/>
   <label for="exampleFormControlInput1"><B>EMAIL ID :</B></label>
    <input type="email" name="email" required  class="form-control" id="email" style="width:400px;" placeholder="name@example.com"></div> 
	<div class="col-sm-6"><br/>
	<label><b>PASSWORD :</b></label><br/>   <input   type="password" name="pass" required style="width:400px;"/> </div><BR/>	
	<div class="col-sm-6"><br/>
	<label><b>COMPANY NAME :</b></label></br>
	<input class="text" name="cname" required type="text"/></div><br/>
	<div class="col-sm-6"><br/>
	<label><b>COMPANY LOGO :</b></label></br>
	<input class="text" name="logo" required type="file"/></div><br/>
	<div class="col-sm-6"><br/>
	<label><b>LOCATION :</b></label></br>
	<input class="text" name="location" required type="text"/></div><br/><br/>
	<div class="col-sm-6"><br/>
	<label><B>COMPANY TYPE :</B></label></br>
	<select name="ctype"  style="width:400px;height:40px"></br></br>
	
	<option>COMPANY TYPE</option>
	<option>PRIVATE</option>
	<option>GOVERNMENT</option>
	<option>PUBLIC SECTOR</option>
	<option>SEMI-GOVERNMENT</option>
	</select></div><br/><br/>
	<div class="col-sm-6"><br/>
	 <label  for="exampleFormControlTextarea1"><B STYLE="COLOR:BLACK;">WORKING FIELDS :</B></label>
    <textarea name="fields" required  class="form-control" id="exampleFormControlTextarea1" style="width:400px;" rows="2"></textarea></div><br/><br/><br/>
	<div class="col-sm-6"><br/><br/></br>
	<input type="submit" name="submit1" style="background:green;color:white; height:40px;border-radius:10px; width:400px" value="SUBMIT" class="bt"/></div><br/>
</div></br></form>
	</fieldset>
	</div>
	</div>
	
	</div>
	<?php include('footer.php');
?>
</body>
</head>