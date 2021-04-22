<?php

session_start();

	include("config.php");
    include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read to database
			$query = "select * from users where username = '$username' limit 1";

			$result=mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: item.php");
						die;
					}
				}
			}
			
			echo "<script> alert('Wrong Username or Password!');window.location='login.php'</script>";
		}else
		{
			echo "<script> alert('Please enter the details required');window.location='login.php'</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLAMART LOGIN</title>
    <script src="https://kit.fontawesome.com/ccb780018f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-------- css link -------->
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>

    <div class="main-container">
        <div class="form-header-t1">
            <h1 class="font-weight-bold">Login</h1>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google-plus-g"></i>
            </div>
        </div>
        <form action="" method="post">
        <div class="form-container-t1">
            <div class="fc">
            <!---<label for="exampleInputEmail1">Username</label>  -->
                <input type="text" name="username" id="email" placeholder="Your username">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="fc">
            <!--<label for="exampleInputPassword1">Password</label> -->
                <input type="password" name="password" id="password1" placeholder="Your password">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Error Message</small>
            </div>
            <p style="margin-bottom: 0;">Forgot <b>Password?</b></p>
            <a href="./item.php" >
                <input type="submit" value="LOGIN" class="btn-block"></a>
                <br>
                <h6 style="text-align:center;"> Don't have an account? <a href="./registerstudent.php">SignUp</a></h6>

        </div>
        </form>
        <div class="form-footer-t1"></div>
    </div>
    <script src="js/signup.js"></script>
</body>

</html> 