
<?php

$con = mysqli_connect("localhost","root","","student_id");

?>

<html>
<head>
 <title>school id</title>
       
		</head>
<style>

 //body
   {
	   background:url("images/9.jpeg");
	   
   }
#outer
{
height:350px;
margin:10px auto;
width:250px;
//background:skyblue;
	   -webkit-print-color-adjust: exact;
border:1px solid black;
 background:url("images/12.jpeg");
 background-size:100% 100%;
}
#t1
{
height:25px;
width:250px;
//background:red;
//background:url('a.png');
}

#ta
{
height:25px;
width:50px;
float:left;
background:blue;
//background:url('a.png');
}
#tb
{
height:25px;
width:50px;
float:left;
transform:translateX(12px);
//background:red;
//background:url('a.png');
}
#tc
{
height:25px;
width:150px;
float:left;
LINE-HEIGHT:25PX;
//background:navy;
//background:url('a.png');
}
#t2
{
height:50px;
width:250px;
//background:#f50ce8;
 font-size:24px;
 color:red;
LINE-HEIGHT:50PX;
text-align:center;
text-shadow:0px 0px 1px black;
transform:scale(1.65);
transform:translateY(-8px);
}
#t3
{
height:25px;
width:250px;
//background:blue;
 font-size:22px;
 color:red;
//LINE-HEIGHT:25PX;
text-align:center;
text-shadow:0px 0px 1px black;
transform:translateY(-24px);

}
#x
{
height:15px;
width:250px;
background:blue;
transform:translateY(-24px);
}
#p
{
height:100px;
width:250px;
//background:green;

}
#pa
{
height:100px;
width:130px;
//background:green;
margin:0px auto;
border-radius:50%;
transform:translateY(-17px);
border:2px solid black;
box-sizing:border-box;
//background:yellow;
}
#p1
{
height:130px;
width:250px;
transform:translateY(-17px);
//background:url('b.png');
 
}

#p2
{
height:130px;
width:55px;
//transform:translateY(-17px);
//background:red;
float:left;

}#p3
{
 float:left;
height:130px;
width:195px;
transform:translateY(-2.6px);
//background:aqua;

}
#f
{
height:30x;
width:250px;
background:red;
transform:translateY(-15px);
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
			$sr = $row_costumers['sn'];
			$r = $row_costumers['n'];
			$class = $row_costumers['class'];
			$st_id = $row_costumers['u_id'];
			$i++;
			
		?>

<body>
 <div id="outer">
 
 <div id="t1">  <center>      
 <div id="ta" style="background:none;text-align:center;line-height:25px;">Sr.no.:<?php echo $sr; ?></div>
 <div id="tb">  <img src="images/a.png" height="25px" width="50px" alt=""/>        </div>
 <div id="tc">   Session:2021-22       </div></center>
 </div>
 <div id="t2"> GOVT. POLYTECHNIC</div>
 <div id="t3"> MOHAMMADI</div>
 <div id="x" style="color:white; text-align:center">Identy-card</div>
 <div id="p"> <div id="pa">  <img src="student_images/<?php echo $img; ?>"width="130px"height="100px" style="border-radius:50%;"/>   </div></div>
 <div id="p1">		
  <div id="p2"><table style="text-align:center;padding:1px;">
  <tr><td> Name </td></tr>
  <tr><td>Father</td></tr>
  <tr><td>Dob</td></tr>
  <tr><td>Branch</td></tr>
  <tr><td>Mo.no.</td></tr>
  <tr><td>Enr. no.</td></tr>
  </table>
  </div>
   <div id="p3">
   <table>
   <tr><td>   </td></tr>
  <tr><td>: <?php echo $st_name; ?></td></tr>
  <tr><td>: <?php echo $f_name; ?></td></tr>
  <tr><td>: <?php echo $dob; ?></td></tr>
  <tr><td>: <?php echo $class; ?></td></tr>
  <tr><td>: <?php echo "+91 ",$mob; ?> </td></tr>
  <tr><td>: <?php echo "E",$r; ?></td></tr>  
    </table>
  </div>
 </div>
 <div id="f" style="text-align:center;color:white;">Dilawalpur, Mohammadi,(Kheri), U.P.</div>
  </div>
  <?php } ?>
</body>
</head>
</html>
