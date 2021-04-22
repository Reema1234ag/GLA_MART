<?php 
session_start();

	include("config.php");
    include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
        $email_id = $_POST['email_id'];
        $password = $_POST['password'];
        $phone_no = $_POST['phone_no'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($email_id) && !empty($phone_no) && !empty($course)
        && !empty($year))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,email_id,password,phone_no,course,year) values ('$user_id','$username',
            '$email_id','$password','$phone_no','$course','$year')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<script> alert('Please enter the details required');window.location='registerstudent.php'</script>";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------font awesome link-------->
    <script src="https://kit.fontawesome.com/ccb780018f.js" crossorigin="anonymous"></script>
    <title>Student Login</title>
    <link rel="stylesheet" href="../CSS/registerstudent.css" />
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Sign Up</h2>
        </div>
        <form action="" method="post" class="form" id="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter Username">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="email">Email-ID</label>
                <input type="email" name="email_id" id="email" placeholder="Enter Email-id">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="password1">password</label>
                <input type="password" name="password" id="password1" placeholder="Enter Password">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label for="phone">Enter Phone Number</label>
                <input type="tel" name="phone_no" id="phone" placeholder="Enter phone number" pattern="[7-9]{1}{0-9}{9}">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="Course">Enter Course</label>
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <select id="Course" name="course">
                    <option value="B.Tech(Electronics & Communicaton)">B.Tech(Electronics & Communicaton)</option>
                    <option value="B.Tech(Electrical & Electronics)">B.Tech(Electrical & Electronics)</option>
                    <option value="B.Tech(Mechanical Engineering)">B.Tech(Mechanical Engineering)</option>
                    <option value="B.Tech(Electrical  Engineering)">B.Tech(Electrical  Engineering)</option>
                    <option value="B.Tech(Civil Engineering)">B.Tech(Civil Engineering)</option>
                    <option value="B.Tech(Smart Manufacturing)">B.Tech(Smart Manufacturing)</option>
                    <option value="B.Tech(Computer Science and Engineering)">B.Tech(Computer Science and Technology)</option>
                    <option value="B.Tech CSE(Industrial Internet of Things)">B.Tech CSE(Industrial Internet of Things)</option>
                    <option value="B.Tech CSE(Cloud Computing & Virtualization)">B.Tech CSE(Cloud Computing & Virtualization)</option>
                    <option value="B.Tech CSE(Artificial Intelligence & Machine Learning)">B.Tech CSE(Artificial Intelligence & Machine Learning)</option>
                    <option value="B.Tech CSE(Cyber Security and Forensics)">B.Tech CSE(Cyber Security and Forensics)</option>
                    <option value="B.Tech CSE(Data Analytics)">B.Tech CSE(Data Analytics)</option>
                    <option value="B.Tech (Automobile Engineering)">B.Tech (Automobile Engineering)</option>
                    <option value="B.Tech (BioTechnology)">B.Tech (BioTechnology)</option>
                    <option value="B.Tech CSE (Lateral Entry)">B.Tech CSE (Lateral Entry)</option>
                    <option value="B.Tech Mechanical Engineering(Lateral Entry)">B.Tech Mechanical Engineering(Lateral Entry)</option>
                    <option value="B.Tech Electrical Engineering(Lateral Entry)">B.Tech Electrical Engineering(Lateral Entry)</option>
                    <option value="B.Tech Electronics & Communications(Lateral Entry)">B.Tech Electronics & Communications(Lateral Entry)</option>
                    <option value="B.Tech Civil Engineering (Lateral Entry)">B.Tech Civil Engineering (Lateral Entry)</option>
                    <option value="B. Tech(Hons.) Computer Science & Engineering">B. Tech(Hons.) Computer Science & Engineering</option>
                    <option value="B.Sc. (Hons.)(Chemistry)">B.Sc. (Hons.)(Chemistry)</option>
                    <option value="B.Sc. (Hons.)Biotech">B.Sc. (Hons.)Biotech</option>
                    <option value="B.Sc. (Hons.)(Physics)">B.Sc. (Hons.)(Physics)</option>
                    <option value="B.Sc. (Hons.)(Agriculture)">B.Sc. (Hons.)(Agriculture)</option>
                    <option value="B. Pharm">B. Pharm</option>
                    <option value="B. Pharm(Lateral Entry)">B. Pharm(Lateral Entry)</option>
                    <option value="BCA">BCA</option>
                    <option value="BCA (Hons.)">BCA (Hons.)</option>
                    <option value="B.A. (Hons.)ECONOMICS">B.A. (Hons.)ECONOMICS</option>
                    <option value="B.A. L.L.B (Hons.)">B.A. L.L.B (Hons.)</option>
                    <option value="B. Com (Hons.)">B. Com (Hons.)</option>
                    <option value="B. Com (Hons.)(CIMA)">B. Com (Hons.)(CIMA)</option>
                    <option value="BBA">BBA</option>
                    <option value="BBA (Hons.)">BBA (Hons.)</option>
                    <option value="BBA (Family Business)">BBA (Family Business)</option>
                    <option value="MBA (Integrated)">MBA (Integrated)</option>
                    <option value="BCA (Hons.)">BCA (Hons.)</option>
                    <option value="B. Com L.L.B (Hons.)">B. Com L.L.B (Hons.)</option>
                    <option value="B.Ed">B.Ed</option>
                    <option value="M. Pharm (Pharmaceutics)">M. Pharm (Pharmaceutics)</option>
                    <option value="MCA">MCA</option>
                    <option value="M. Tech (Electronics & Communications)">M. Tech (Electronics & Communications)</option>
                    <option value="M. Tech (Electrical Engineering)">M. Tech (Electrical Engineering)</option>
                    <option value="M. Tech (Mechanical Engineering)">M. Tech (Mechanical Engineering)</option>
                    <option value="M. Tech (Structural Engineering)">M. Tech (Structural Engineering)</option>
                    <option value="M. Tech (Energy System)">M. Tech (Energy System)</option>
                    <option value="M. Tech (Transportation Engineering)">M. Tech (Transportation Engineering)</option>
                    <option value="M. Tech (Computer Science & Engineering)">M. Tech (Computer Science & Engineering)</option>
                    <option value="M.Sc. (Mathematics)">M.Sc. (Mathematics)</option>
                    <option value="M.Sc. (Microbiology & Immunology)">M.Sc. (Microbiology & Immunology)</option>
                    <option value="M.Sc. (Chemistry)">M.Sc. (Chemistry)</option>
                    <option value="M.Sc (Biotechnology)">M.Sc (Biotechnology)</option>
                    <option value="M.Sc (Physics)">M.Sc (Physics)</option>
                   <option value="MBA">MBA</option>
                   <option value="MBA(Dual Specialization)">MBA(Dual Specialization)</option>
                   <option value="MBA (Construction Management)">MBA (Construction Management)</option>
                   <option value="MBA (Financial Markets & Banking)">MBA (Financial Markets & Banking)</option>
                   <option value="MBA (Logistics and Supply Chain Management)">MBA (Logistics and Supply Chain Management)</option>
                   <option value="D. Pharm">D. Pharm</option>
                   <option value="Diploma (Electronics & Communication)">Diploma (Electronics & Communication)</option>
                   <option value="Diploma(Civil Engineering)">Diploma(Civil Engineering)</option>
                   <option value="Diploma(Computer Science Engineering)">Diploma(Computer Science Engineering)</option>
                   <option value="Diploma(Electrical Engineering)">Diploma(Electrical Engineering)</option>
                   <option value="Diploma(Mechanical Engineering)">Diploma(Mechanical Engineering)</option>
                   <option value="Diploma(Chemical Engineering)">Diploma(Chemical Engineering)</option>
                   <option value="Ph.D.(Pharmaceutical Sciences)">Ph.D.(Pharmaceutical Sciences)</option>
                   <option value="Ph.D.(Biotechnology)">Ph.D.(Biotechnology)</option>
                   <option value="Ph.D.(Electrical Engineering)">Ph.D.(Electrical Engineering)</option>
                   <option value="Ph.D.(Electronics & Communications)">Ph.D.(Electronics & Communications)</option>
                   <option value="Ph.D.(Applied Chemistry)">Ph.D.(Applied Chemistry)</option>
                   <option value="Ph.D(Management)">Ph.D(Management)</option>
                   <option value="Ph.D.(Mechanical Engineering)">Ph.D.(Mechanical Engineering)</option>
                   <option value="Ph.D.(Computer Science & Engineering)">Ph.D.(Computer Science & Engineering)</option>
                   <option value="Ph.D.(Mathematics)">Ph.D.(Mathematics)</option>
                   <option value="Ph.D.(Physics)">Ph.D.(Physics)</option>
                   <option value="Ph.D.(English)">Ph.D.(English)</option>
                   <option value="Ph.D.(Education)">Ph.D.(Education)</option>
                   <option value="Ph.D.(Law)">Ph.D.(Law)</option>
                </select>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="Year">Course Year</label>
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <select name="year">
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>
                <small>Error Message</small>
            </div>
            <button type="submit">Create Account</button>

            <h3>Already have an Account? Click Here to<a href="./login.php"> Login</a></h3>
        </form>
    </div>

    <script src="../javascript/signup.js"></script>

</body>

</html>