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

<html>
<head>
<?php include ('adminlink.php')?>
</head>
<body>
<div class="container-fluid">
<div class="row" style="min-height:50px;background:black;color:orange;text-align:center;">
<div class="col-sm-12 pt-2" style="text-align:center;"><h1>WELCOME ADMIN(<?php echo $admin ?>)</h1></div>
</div>
</div>
<?php include ('adminheader.php')         ?>
</body>
<div class="container-fluid">
<div class="row ">

<div class="col-sm-12 bg-light" style="min-height:600px;text-align:center;">
<h2 style="text-align:center;color:orange;margin-top:50px;">DASHBOARD</h2><h5>code your prosperous career</h5>
<div class="row pl-5">

<div class="col-sm-2 hvr-pulse" >
<a href="../index.php" style="text-decoration:none;"><div class="row  "style="background:#28a744;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:50px;color:white;"> REGISTRATION<BR/>MANAGEMENT</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#868f96;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:50px;color:white;">ENQUIRY<BR/>MANAGEMENT</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse"style="text-align:center;" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#f8ca37;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
 <b style="margin-top:35px;margin-left:50px;color:white;">FEEDBACK<BR/>MANAGEMENT</b>
<div class="col-sm-12"> </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#17a3b5;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:50px;color:white;">ADD<BR>CERTIFICATE</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse"><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#353a40;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" > 
<b style="margin-top:35px;margin-left:55px;color:white;">ADD<BR>PLACEMENT</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#007bff;margin-top:100px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" > 
<b style="margin-top:35px;margin-left:60px;color:white;">ADD<BR>GALLERY</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#007bff;margin-top:50px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:70px;color:white;">ADD<BR>VIDEO</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#28a744;margin-top:50px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:70px;color:white;">ADD<BR>COLLEGE</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#868f96;margin-top:50px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" > 
<b style="margin-top:35px;margin-left:70px;color:white;">ADD<BR>EVENT</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#f8ca37;margin-top:50px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:80px;color:white;">SEND<BR>MAIL</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row"style="background:#17a3b5;margin-top:50px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" >
<b style="margin-top:35px;margin-left:55px;color:white;">ADD<BR>PROMO CODE</b>
<div class="col-sm-12" > </div>
</div></a></div>


<div class="col-sm-2 hvr-pulse" ><a href="../index.php" style="text-decoration:none;"><div class="row" style="background:#353a40;margin-top:50px;height:120px;margin-right:10px;border-radius:10px;border:5px double white;" > 
<b style="margin-top:35px;margin-left:70px;color:white;">LOGOUT</b>
<div class="col-sm-12" > </div>
</div></a></div>


</div>
</div>
</div>
</div>

<?php include ('adminfooter.php')         ?>
</html>