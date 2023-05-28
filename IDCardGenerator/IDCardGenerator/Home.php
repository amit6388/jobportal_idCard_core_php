<?php

$con = mysqli_connect("localhost","root","","student_id");

?>
<html>
   <head>
	<style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
			background:url("images/aa.jpg");
			//	background-repeat:no-repeat;
		      //  background-size:100% 100%;
				
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:black solid 9px;
			height:400;
			width:400;
			margin:80px auto;
				background:url("images/9.jpeg");
				background-repeat:no-repeat;
		        background-size:100% 100%;
				
         }
		 
		  .box:hover {
            border:blue solid 9px;
			height:400;
			width:400;
			margin:80px auto;
				background:url("images/12.jpeg");
				background-repeat:no-repeat;
		        background-size:100% 100%;
				
         }
		 
      </style>
   
   </head>
     <body>
	<center>

       <a href='Home.php' style='float:right'><Button>logout</Button></a>
	<div class='box'>
	  <div align="center">
       <table>
	    <form method="post" action="Home.php" enctype="multipart/form-data" name='index_form'>
	    <h1>ID Card Form</h1>
		<tr><td>Profile Pic:</td><td><input type="File" name="pic" ></td></tr>
		<tr><td>Name:</td><td><input type="text" name="name" ></td></tr>
		<tr><td>Father Name:</td><td><input type="text" placeholder="Mr." name="f_name"></td></tr>
		<tr><td>Mother Name:</td><td><input type="text" placeholder="Mrs." name="m_name"></td></tr>
		<tr><td>Date Of Birth.:</td><td><input type="date" name="dob"></td></tr>
		<tr><td>Enrolment no:</td><td><input type="text" maxlength="14"    name="e"></td></tr>
		<tr>
		<td>Branch</td>
		<td>
		<select name="class">
		    <option value="Computer Science Eng. 1st Y">CSE 1st Y</option>
		    <option value="Computer Science Eng. 2nd Y">CSE 2nd Y</option>
			<option value="Computer Science Eng.3rd Y">CSE 3rd Y  </option>
	        <option value="Electrical Eng. 1st Y">Electrical Eng. 1st Y</option>
	        <option value="Electrical Eng.2nd Y">Electrical Eng. 2nd Y</option>
			<option value="Electrical Eng. 3rd Y">Electrical Eng. 3rd Y</option>
            <option value="Civil Eng.1st Y">Civil Eng. 1st Y</option>
		    <option value="Civil Eng.2nd Y">Civil Eng. 2nd Y</option>
			<option value="Civil Eng. 3rd Y">Civil Eng. 3rd Y</option>
  
 
		</select>
		</td>
		</tr>
		<tr><td>Contact No.:</td><td><input type="text" maxlength="10" name="mob"></td></tr>
		<tr><td colspan="2"align="center"><input type="submit" name="index_submit" style="background: blue;color:white; width:78px;" value="Submit"  ></td></tr>
	   </form>
	   <tr><td rowspan="2" colspan="2" align="center"><a href='result.php' style='float:center'><Button style="background: blue;color:white;"  >View Id Vr</Button></a> </td></tr>   
	    
	 </table>
					
      
    </div>
	<a href='result1.php' style='float:center'><Button style="background: blue;color:white;">View Id  hr</Button></a>  
</div>


</body>
</html>
	
 
<?php
//insert register page data into admin table with respect to the student_id database.  
if(isset($_POST['register_submit']))
{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
	
		$insert_clint="insert into admin (name,email,password)values('$name','$email','$pass')";
	  
		$run_costumer = mysqli_query($con, $insert_clint);
		if($run_costumer)
		{
			echo"<script>alert('Admin Registered successfully')</script>";
		}
		else
		{
			echo"<script>alert('Something Wrong')</script>";
		}
}

                   
//generate id on index.php page
if(isset($_POST['index_submit']))
  {
	  $name=$_POST['name'];
	  $f_name=$_POST['f_name'];
	  $m_name=$_POST['m_name'];
	  $dob=$_POST['dob'];
	  $class=$_POST['class'];
	  $mob=$_POST['mob'];
	  $n=$_POST['e'];
	  
	//  $u_id=mt_rand(1,100);
	 

	   $st_pic=$_FILES['pic']['name'];

	  
	   $temp_name=$_FILES['pic']['tmp_name'];
	   
	   $f_extension1 = explode('.',$st_pic);
	  
	   $f_extension1 = strtolower(end($f_extension1));
	   
	   $f_newfile1 = uniqid().'.'.$f_extension1;
	  
	   if($f_newfile1==''OR $name=='' OR $f_name=='' OR $m_name=='' OR $mob=='' OR $dob=='' OR $class==''){
		  
		  echo"<script>alert('please fill all the fields !')</script>";
		  exit();
		   }
	  
	  else{
	   // uploading images to ist folder
	   
	   move_uploaded_file($temp_name,"student_images/$f_newfile1");

	  $insert_clint="insert into students (profile,name,f_name,m_name,dob,class,mobile,u_id,n)values('$f_newfile1','$name','$f_name','$m_name','$dob','$class','$mob','$u_id','$n')";
	  
	  $run_costumer = mysqli_query($con, $insert_clint);
	  if($run_costumer){
		                echo"<script>alert('Student Registered successfully')</script>";
	                    }
	  else{
		   echo"<script>alert('somethig went wrong !')</script>";
	     }
    
    }
  }
?>
 