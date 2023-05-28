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
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:black solid 5px;
			margin:80px auto;
		height:300;
		width:300;
		background:url("images/9.jpeg");
		background-repeat:no-repeat;
		background-size:100% 100%;;
         }
		 .box:hover {
            border:blue solid 5px;
			margin:80px auto;
		height:300;
		width:300;
		background:url("images/12.jpeg");
		//background-repeat:no-repeat;
		//background:blue;
         }
      </style>
   
   </head>
	<body>
	<center>
	<div class='box'>
	<h2>College management </h2>
	<form action='login.php' method='POST' name='login_form'>
		UserName:<input type='text' name='un'><br><br>
		Password:<input type='password' name='pass'><br><br>
		<input type='submit' value='Login' name='login_submit'><br><br>
		
	</form>
	<form action='register.php' method='POST' name='login_signup_form'>
		Don't Have Account <input type='submit' value='Sign Up' name='login_signup_submit'>
	</form>
	  
   	</div>

    </body>
</html>
<?php
//login check
	if(isset($_POST['login_submit']))
	{
		$i=0;
		$flag=0;
		$n=$_POST['un'];
		$p=$_POST['pass'];
		$get_costumers="select*from admin order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers))
		{
			
			
			$st_name = $row_costumers['name'];
			$email = $row_costumers['email'];
			$password = $row_costumers['password'];
			if($email==$n && $password==$p)
			{
				$flag=1;
				break;
				
			}
			$i++;
		}
		if($flag==1)
		{
			
			//ob_end_clean();
			echo "<script>alert('Login Succesfully done');</script>";
			//include('Home.php');
		}
		else
		{
			ob_end_clean();
			echo "<script>alert('Valid UserName & Password');</script>";
			include('Home.php');
		//exit();
		}
		
		
		
		
	}
			
?>

 