<?php
session_start();

include("config.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$name = $_POST['name'];
	$email_id = $_POST['email-id'];
	$feedback = $_POST['feedback'];
	if(!empty($name) && !is_numeric($name) && !empty($email_id) &&  !empty($feedback))
	{

		//save to database
		$user_id = random_num(20);
		$query = "insert into feedback (id,name,email-id,feedback) values ('$user_id','$name',
		'$email_id','$feedback')";

		mysqli_query($con, $query);

		header("Location: feedback.php");
		die;
	}else
	{
		echo "<script> alert('Please enter the details required');window.location='registerstudent.php'</script>";
	}
}
?>




<!DOCTYPE html>  
<html>  
<head>  
<title>Feedback page</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

<body style="background-image: url(../img/feedback.png);background-size:cover;">
 <div class="container mt-4 shadow-lg">
   <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6"> 
        <h2 class="text-white">Feedback Form</h2>
        <p class="text-white">We would love to hear your thoughts, concerns or problem with anything so we can improve!</p>
        <hr>
		<form action="" method="post">
		    <h4 >Feedback type</h4>
		    <div class="row ">
		      <div class="col-md-4 ">
		    	<input type= "radio" name="feed" class="pointer"  >&nbsp;&nbsp;<label>Comments</label>    
		      </div>
		      <div class="col-md-4">
		    	<input type="radio" name="feed" >&nbsp;&nbsp;<label>Bug Reports</label>    
		      </div>      
		      <div class="col-md-4">
		    	<input type="radio" name="feed" >&nbsp;&nbsp;<label>Questions</label>    
		      </div>
		    </div>
			
		    <div class="form-group mt-3 mb-3" >
		    	<label class="form-label">Full Name</label>
		    	<input type="text" class="form-control " name="name" required="">
		  	</div>
		  	<div class="form-group mb-2">
		    	<label  class="form-label">Email</label>
		    	<input type="Email" class="form-control" name="email-id"required="">
		  	</div>
		    <div class="form-group mb-2">
		    	<label  class="form-label">Describe Feedback:</label>
		    	<textarea rows="4" class="form-control" name="feedback" required=""></textarea>
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit feedback</button>
		</form>
      </div>
    </div>
  </div>
 </body>  
</html>