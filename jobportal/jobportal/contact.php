<?php
if(isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	
	include('connection.php');
	$query="insert into contact values('$name','$email','$subject','$message',curdate())";
	//echo $query;
	$res=mysqli_query($con,$query);
	if($res)
{
	echo "<script>alert('Send Successfully');</script>";
}
	else
{
	echo "<script>alert('.Try Again.');</script>";
}
}
?> 


<html>
<head>

<?php include ('link.php')         ?>
</head>
<body>
<?php include ('header.php')         ?>
<div class="container" style="margin-left:330px;"><h3><span style="color:orange;padding-left:220px;">Cont<u>act</span> With</u> Us</h3>
<br style="margin-left:400px;"><b style="padding-right:100px;">You may contact us by contact number or filling in this form any time you need professional</b><br> 
<b style="padding-left:200px;">support or have any question</b>
<div class="rowb"></div>
</div>
<div class="container">
<div class="row">
<!-- Section: Contact v.2 -->
<section class="my-5">
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-9 mb-md-0 mb-5">

      <form action="" method="post">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form mb-0">Your name
              <input type="text" id="contact-name" name="name" required class="form-control">
              <label for="contact-name" class=""></label>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form mb-0">Your email
              <input type="text" id="contact-email" name="email" required class="form-control">
              <label for="contact-email" class=""></label>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">
            <div class="md-form mb-0">Subject
              <input type="text" id="contact-Subject" name="subject" required class="form-control">
              <label for="contact-Subject" class=""></label>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">
            <div class="md-form">Your message
              <textarea id="contact-message" name="message" required class="form-control md-textarea" rows="3"></textarea>
              <label for="contact-message"></label>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      

       <div class="form-group"><br/>
<center><input type="submit"style="background:orange;color:black" name="submit1" value="SUBMIT" class="bt"/></center>
</div></form>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 text-center mt-2">
      <ul class="list-unstyled mb-0">
        <a href="https://www.google.com/maps/place/Techpile+Technology+Pvt.+Ltd./@26.8983641,80.964192,17z/data=!3m1!4b1!4m5!3m4!1s0x39995785d5f7f1a5:0xffa47f1efe103f0d!8m2!3d26.8983641!4d80.9663807" target="blank" style="text-decoration:none;"><li>
          <i class="fa fa-map-marker fa-2x blue-text"></i>
          <p>LUCKNOW, CA 262903, INDIA</p>
        </li></a>
        <a href="tel:+918081345349" style="text-decoration:none;"><li>
          <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
          <p>+ 91 6388246712</p>
        </li></a>
       <a href="mailto:sharmashiv20020328@gmail.com" style="text-decoration:none;"> <li>
       <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
          <p class="mb-0">amitpoly2020@.gmail.com</p>
        </li></a>
      </ul>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.2 -->
</div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.161660587294!2d80.9641920148828!3d26.898364083133746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995785d5f7f1a5%3A0xffa47f1efe103f0d!2sTechpile%20Technology%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1607670876907!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php include ('footer.php')         ?>
</body>
</html>