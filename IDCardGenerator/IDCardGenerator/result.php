<?php

$con = mysqli_connect("localhost","root","","student_id");

?>

<html>
    <head>
        <title>school id</title>
        <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>
    </head>
   <style>
   body
   {
	   background:url("images/9.jpeg");
	   
   }
   #card{
	   float:left;
	   width:360px;
	   height:230px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("images/a.jpg");
	   background-repeat: no-repeat;
	   background-size: 360px 230px;
	   -webkit-print-color-adjust: exact;
   }
   #c_left{
	   margin-top:65px;
	   margin-left:10px;
	   float:left;
	   width:80px;
	   height:120px;

	   
   }
   #c_box{
	  width:80px; 
	  height:20px;
	  //COLOR:RED;
	  padding:5px;

   }
  #c_right{
	   
	   margin-left:120px;
	   width:220px;
	   height:200px;

   }
   td{
	   font-size:12px;
   }

   </style>
   <?php

       $i=0;
		$get_costumers="select*from students order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			if($i==0)
			{
			echo "<a href='login.php' style='float:right'><Button>logout</Button></a>";
			}
			 
			$img = $row_costumers['profile'];
			$st_name = $row_costumers['name'];
			$f_name = $row_costumers['f_name'];
			$m_name = $row_costumers['m_name'];
			$mob = $row_costumers['mobile'];
			$dob = $row_costumers['dob'];
			$r = $row_costumers['n'];
			$class = $row_costumers['class'];
			$st_id = $row_costumers['u_id'];
			$i++;
			
			
		
			
		
		?>
   
   
   
     <body>
	
	 <div id="card">
	  <div id="c_left">
	  <img src="student_images/<?php echo $img; ?>"width="80px"height="100px"style="border:1px solid black;"><br>
	  <div id="c_box">
	<i style="font-size:13px; ">Dob:</i><I STYLE="COLOR:;font-size:13px;"><?php echo $dob; ?></I>
	  </div>
	  </div>
	  <div id="c_right">
	  <div style="margin-top:2px;margin-left:117px;color:#fff;font-size:10px;">Contact No. 6388246712 <br></div>
	   <div style="margin-left:168px;color:#fff;font-size:10px;"> 830370327 <br></div>
	  <div style="margin-top:4px;margin-left:90px;color:#fff;">Mob:<?php echo "+91 ",$mob; ?> <br></div>
	  <table style="margin-top:23px;">
	  <tr>
	  <td><b>Name</b></td><td><b>: <?php echo $st_name; ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Father's Name</b></td><td>: Mr. <?php echo $f_name; ?></td>
	  </tr>
	  <tr>
	  <td><b>Mother's Name</b></td><td>:Mrs.  <?php echo $m_name; ?></td>
	  </tr>
	  <tr>
	  <td><b>Branch</b></td><td >: <?php echo $class; ?></td>
	  </tr>
	  <tr>
	  <td><b>Enrollment No.</b></td><td>: <?php echo "E",$r; ?></td>
	  </tr>
	  <tr>
	  <td><i>Principal :-</i></td><td><img src="images/sign.jpg"width="100px"height="30px"></td>
	  </tr>
	  </table>
	  
	  </div>
	 <!--  <div style="margin-top:10px;margin-left:5px;color:#fff;font-size:12px;"> Government Polytechnic Awasari[KH],Boys Hostel 412405</div>  -->
	 </div>
	 <?php } ?>
	 	
	 </body>
   </head>
</html   