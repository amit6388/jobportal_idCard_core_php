<!DOCTYPE>
<html>
<head>
<?php include('link.php'); ?>
</head>
<style>
a
{
text-decoration:none;
color:#3aab47;
}
.outer
{
min-height:1000px;
}

.slider
{
min-height:670px;
background: url(images/home-2/banner.jpg);
background-size:100% 100%;
}
.inner
{
min-height:670px;
background:rgba(0,0,0,.5);
}
.dvsearch
{
height:100px;
background:rgba(255,255,255,.3);
}
.inputgroup
{
min-height:50px;
border:none;
background:transparent;
border:2px solid black;
}
.bt
{
font-size:17px;
border-radius:0px;
padding:10px;
}
.recent
{
border:none;
box-shadow:0px 0px 15px 4px #f2f2f2 ;
}
</style>
<body>
<div class="container-fluid outer" style="background:#f7faf7;">
<?php include('header.php'); ?>
<div class="row">
<div class="col-sm-12 slider">
<div class="row">
<div class="col-sm-12 inner" style="padding:8%; padding-top:13%">
<span style="font-size:50px; font-weight:bold; color:white;">&nbsp;Get Your <span style="color:#4bcc5a;">Prefer</span> Jobs</span><br/>
<span style="font-size:20px;color:white">&nbsp;&nbsp; Jobs Employment Future Career Opportunties</span><br/><br/>
<div class="col-sm-12 dvsearch">
<div class="row py-4">
<div class="col-sm-5">
<div class="input-group mb-3 inputgroup">
  <input type="text" class="form-control inputgroup" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><span class="fa fa-search"></span></span>
  </div>
</div>
</div>
<div class="col-sm-5">
<div class="input-group mb-3 inputgroup">
  <input type="text" class="form-control inputgroup" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><span class="fa fa-map-marker"></span></span>
  </div>
</div>
</div>
<div class="col-sm-2">
<button class="btn btn-info form-control" style="min-height:50px;">Search Now</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!----start of services---->
<div class="row">
<div class="container" style="min-height:160px; background:rgba(255,255,255,.5);padding:3%; transform:translateY(-100px)">
<div class="row">
<div class="col-sm-6">
<div class="row py-4 mr-2" style="min-height:140px; background:#3cb04a;">
<div class="col-sm-2 pt-3"><img src="images/icon1.png"/></div>
<div class="col-sm-6 pt-2">
<span style="font-size:23px; color:white;"><b>Jobseekar</b></span><br/>
<span style="font-size:17px; color:white;">Looking For a Job?</span><br/>
</div>
<div class="col-sm-4 " style="padding:3%; color:white"> Apply Now <span class="fa fa-arrow-right"></div>
</div>
</div>
<div class="col-sm-6">
<div class="row py-4" style="min-height:140px; background:#3cb04a;">
<div class="col-sm-2 pt-3"><img src="images/icon2.png"/></div>
<div class="col-sm-6 pt-2">
<span style="font-size:23px; color:white;"><b>Recuriter</b></span><br/>
<span style="font-size:17px; color:white;">Are you recuriting?</span><br/>
</div>
<div class="col-sm-4" style="padding:3%; color:white">Post a Job <span class="fa fa-arrow-right"></div>
</div>
</div>
</div>
</div>
</div>
<!----end of services---->



<!----start of catagory---->
<div class="row">
<div class="col-sm-12 category">
<h1 style="text-align:center;">Choose Your Desired Catagory</h1><br/>
</div>
<div class="col-sm-1"></div>
<?php
include('connection.php');
$query="select * from category order by cid desc limit 10";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{ ?>

<div class="col-sm-2">
<div class="row" style="min-height:180px; background:white; margin:2px; text-align:center;">
<div class="col-sm-12" style="min-height:50px; margin-top:10%; text-align:center;">
<img src="admin/categoryimage/<?php echo $row[2] ?>" height="100px" width="100px" style="padding:15px;border-radius:10px;"></span><br/>
<span style="font-size:16px;margin-bottom:10px;font-weight:bold;color:#333333;">
<?php echo $row[1] ?>
</span>
</div>
</div>
</div>

<?php	
}
?>

</div><br/><br/><br/>
<!----end of catagory---->




<!----start of recent job---->
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
$query3="select j.*,r.* from jobdetails j,rregister r where j.rid=r.email order by j.jid desc limit 8";
$data3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($data3))
{
?>

<div class="col-sm-6">
<div class="row p-3 m-2" style="min-height:180px;border:1px solid rgba(0,0,0,0.3);">
<div class="col-sm-2 pt-5"><img src="companylogo/<?php echo $row3['clogo']?>" height="60px" width="70px"/>
</div><div class="col-sm-7"><b style="font-size:16px;"><?php echo $row3['title']?></b><br/>
<a href="#"><b><?php echo $row3['cname']?></b></a><br/><span><?php echo "Salary :".$row3['salary']?></span><br/>
<span><span class="fa fa-map-marker text-success"></span> <?php echo $row3['location']?></span><br/>
</div><div class="col-sm-3 p-3">
<a href='loginform.php'><button class="btn btn-outline-success hvr hvr-sweep-to-right">Apply</button></a><br/><br/>
<button class="btn btn-success"> <?php echo $row3['post']?> seats</button>
</div></div></div>
<?php } ?>


</div>
</div>
</div>
<!----end of recent job---->




<!----start of cetification---->
<div class="row">
<div class="col-sm-12 popular job"></div>
</div>
<!----end of cetification-------->




<!----start of popular job---->
<div class="row">
<div class="container-fluid " style="background:white">
<div class="row" style="min-height:550px;">
<div class="col-sm-1 " ></div>
<div class="col-sm-10 " >
<div class="row"style="min-height:550px;">
<div class="col-sm-6 " >
<img src="images/slider1.png" style="background-cover"/>
</div>
<div class="col-sm-6 p-5" >
<span style="font-size:40px"><b>Trusted & Popular Jobs Portal</b> </span>
</br>
</br>

<span style=" font-size:17px;text-align:justify;">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.</span>
<div class="row " style="min-height:90px;">
<div class="col-sm-4 "><center><span style="font-size:28px; color:#46c154; "><b>14K+</b></span></br><span>Job Available</span></center></div>
<div class="col-sm-4 "><center><span style="font-size:28px; color:#46c154; "><b>18K+</b></span></br><span>Submitted CV</span></center></div>
<div class="col-sm-4 "><center><span style="font-size:28px; color:#46c154; "><b>9K+</b></span></br><span>Company</span></center></div>
</div>
<div class="row " style="min-height:90px;">
<div class="col-sm-6 "><center><span style="font-size:30px; color:#46c154; "><b>22K+</b></span></br><span>Registered Member</span></center></div>
<div class="col-sm-6 "><center><span style="font-size:30px; color:#46c154; "><b>55K+</b></span></br><span>Appoint to Job</span></center></div>
</div>
</div>
</div>
</div>
<div class="col-sm-1" ></div>
</div>
</div>
</div>
<!----end of popular job---->




<!----start of popular companies---->

<div class="container py-4">
<div class="row">
<div class="col-sm-12 " id="popularcompanies">
<h1 style="text-align:center;">Popular Companies</h1><br/>
</div>

<?php
$query1="select * from rregister order by rdate desc limit 8";
$data=mysqli_query($con,$query1);
while($r1=mysqli_fetch_array($data))
{
?>
<div class="col-sm-3" >
<div class="row" style="min-height:200px; background:white; margin:2px; text-align:center;">
<div class="col-sm-12 p-4">
<img src="companylogo/<?php echo $r1[5]?>" height="40px" width="100px"/><br/><br/>
<a href="#" style="font-weight:bold;font-size:14px;color:black;"><?php echo $r1['cname'] ?></a><br/>
(<?php echo $r1['ctype'] ?>)
<br/><br/>
<span class="fa fa-map-marker"></span><span><?php echo $r1['location'] ?> </span><br/><br/>
<button class="btn btn-outline-success hvr hvr-sweep-to-right">Hiring</button>
</div>
</div>
</div>
<?php
}
?> 
</div>
</div>
<!----end of popular companies---->




<!----start of why we are most popular----->
<div class="row">
<div class="container-fluid " style="min-height:520px; margin-top:100px;background:white;">
<div class="row " style="min-height:520px;">
<div class="col-sm-1 "></div>
<div class="col-sm-10 " style="min-height:520px;">
<div class="row" style="min-height:520px;">
<div class="col-sm-6  "><img src="images/slider2.png" style="height:100%;width:100%"/></div>
<div class="col-sm-6 pl-3 py-5 "><span><b style="font-size:43px">Why We are Most Popular</b></span>
<br/>
<br/>
<br/>
<span style="font-size:19px; line-height:28px;">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida</span<</div>
<div class="row  mt-5" style="min-height:70px">
<div class="col-sm-6 " ><span class="fa fa-id-card " style="font-size:30px;background:#c0f3c6;color:#047211; padding:13px; border-radius:15px;"></span>
<span style="font-size:20px;font-weight:bold;">Trusted & Quality Job</span></div>
<div class="col-sm-6 " ><span class="fa fa-building " style="font-size:30px;background:#c0f3c6;color:#047211; padding:13px; border-radius:15px;"></span>
<span style="font-size:20px;font-weight:bold;">Top Companies</span></div>
</div>
<div class="row  mt-5" style="min-height:95px">
<div class="col-sm-6 " ><span class="fa fa-id-card " style="font-size:30px;background:#c0f3c6;color:#047211; padding:13px; border-radius:15px;"></span>
<span style="font-size:20px;font-weight:bold;">No Extra Charges</span></div>
<div class="col-sm-6 " ><span class="fa fa-users " style="font-size:30px;background:#c0f3c6;color:#047211; padding:13px; border-radius:15px;"></span>
<span style="font-size:20px;font-weight:bold;">International Jobs</span></div>
</div>
</div>
</div>
<div class="col-sm-1 "></div>
</div>
</div>
</div>
<!--------end of why we are most popular---->




<!-------start of featuerd Profiles--------->
<span style="font-size:43px;font-weight:bold;text-align:center;padding-left:500px;padding-top:90px;">Featured Profiles</span>
<div class="row">
<div class="container-fluid ">
<div class="row" style="min-height:400px; margin-top:40px;">
<div class="row">
<div class="col-sm-3 " style="min-height:400px">
<div class="row" style="min-height:400px">
<div class="col-sm-1" ></div>
<div class="col-sm-10 " style="min-height:400px"><img src="images/home-1/profile/1.jpg" style="height:100%;width:100%;"/></div>
<div class="col-sm-1"></div>
</div>
</div>
<div class="col-sm-3	" style="min-height:400px">

<div class="row" style="min-height:400px">
<div class="col-sm-1" ></div>
<div class="col-sm-10 " style="min-height:400px"><img src="images/home-1/profile/2.jpg" style="height:100%;width:100%;"/></div>
<div class="col-sm-1"></div>
</div>
</div>
<div class="col-sm-3 " style="min-height:400px">

<div class="row" style="min-height:400px">
<div class="col-sm-1" ></div>
<div class="col-sm-10 " style="min-height:400px"><img src="images/home-1/profile/3.jpg" style="height:100%;width:100%;"/></div>
<div class="col-sm-1"></div>
</div>
</div>
<div class="col-sm-3 " style="min-height:400px">

<div class="row" style="min-height:400px">
<div class="col-sm-1" ></div>
<div class="col-sm-10 " style="min-height:400px"><img src="images/home-1/profile/4.jpg" style="height:100%;width:100%;"/></div>
<div class="col-sm-1"></div>
</div>
</div>


<!-------End of featuerd Profiles--------->



<!----start of subscribe newspaper---->

<div class="container subscribe" style="min-height:200px; background:white; text-align:center;transform:translateY(80px);">
<div class="row "style="padding:100px;">
<div class="col-sm-12">
<h1>Subscribe Newslatter</h1><br/>
<div class="input-group mb-3" style="padding:0% 20%; height:60px;">
  <input type="email" class="form-control" placeholder="Enter Your Email" aria-describedby="button-addon2" style="border:1px solid green; height:60px;">
  <div class="input-group-append">
    <button class="btn btn-success" type="button" id="button-addon2">Subscribe</button>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!----end of subscribe newspaper---->




<!----start of subscribe footer---->
<?php include('footer.php'); ?>
<!----end of subscribe footer---->




<div class="row">
<div class="col-sm-12 bfooter"></div>
</div>
</div>
</body>
</html> 


















