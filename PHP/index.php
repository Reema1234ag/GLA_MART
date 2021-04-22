<?php
session_start();


?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLAMART</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    
    <link rel="stylesheet" href="../CSS/footer.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    height: 100%;
    margin: 0;
}

.banner-image {
    padding-bottom: 50px;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
    color: #f8f8f8;
    background: url('../img/home bg.png') no-repeat center;
    overflow: hidden;
    background-size: cover;
    height: 620px;
}

.inner-banner-image {
    padding-top: 12%;
    width: 50%;
    position: absolute;
    top: 50%;
    left: 78%;
    padding: 40px 40px;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translate(-50%, -50%);
    font-family: cursive;
    font-weight: bold;
}

.inner-banner a {
    text-decoration: none;
    background-color: transparent;
    color: rgb(20, 32, 209);
    font-size: 25px;
    font-family: cursive;
    font-weight: bold;
}

.inner-banner a:hover {
    transition: .5s;
    font-weight: bold;
    color: red
}

.banner-content h1 {
    font-family: cursive;
}

.banner-content {
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    overflow: hidden;
    margin-bottom: 12%;
    color: rgb(6, 11, 83);
    font-weight: bold;
    max-width: 660px;
    font-family: cursive;
    
}

p {
    font-size: 20px;
}

header {
    height: 40px;
    border: 1px solid transparent;
    background-color: whitesmoke;
    margin-bottom: 5px;
}

nav {
    width: 100%;
    height: 40px;
    position: sticky;
    top: 0;
}

nav ul {
    float: right;
    position: fixed;
    top: 0px;
    width: 100%;
}

nav ul li {
    font-size: 15px;
    font-family: serif;
    display: inline-block;
    margin-right: 18px;
    padding: 0px 2PX;
    transition: 0.8s;
}

nav ul li a {
    display: block;
    text-decoration: none;
    color: rgb(33, 75, 122);
    text-transform: uppercase;
    font-size: 18px;
    padding: 0px 2PX;
}

nav ul li a:hover {
    color: black;
    background-color: whitesmoke;
}


    </style>

<body>
    <header>

        <nav>

            <ul class="nav justify-content-center bg-light mb-2 font-weight-bold ">
                <li class="nav-item">
                    <a class="nav-link text-info" href="./login.php">STUDENT LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="login.php">FACULTY LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-info" href="about.html">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="contact.html">CONTACT US</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="banner-image">
        <div class="inner-banner-image">

            <div class="banner-content">
                <h1>Welcome to <b>GLAMART</b> </h1>
                <br><br><br>

                <p>We provide you all the necessary stationery items required in college like drafter, chart sheets, A4sheets, calculators e.t.c.</p>
                <br><br><br>
                <h3>Click on below button to explore the store.</h3><br>
                <a href="./login.php">Buy Now</a>
            </div>

        </div>
    </div>
<!------------footerr parttt------------------->
<section class="main-content"></section>
    <footer>
        <div id="footercontent">
        <section class="sec-1">
            <section class="about">
                <h2>
                    About
                </h2>
                <p>
                    Creating an interview handbook helps interview research in a number of ways. An interview handbook is simply a list of the high level topics that you plan on covering in the interview with the high level questions that you want to answer under each topic.
                </p>
            </section>
            <section class="link3">
                <h2>Contact</h2>
                <ul>
                    <li><i class="fa fa-home"></i><span>  Uttar Pradesh</span></li>
                    <li><i class="fa fa-envelope"></i><span>  GLAMART11@gmail.com</span></li>
                    <li><i class="fa fa-phone-square"></i><span>  1234567890</span></li>
                    <li><i class="fa fa-facebook-official"></i><span>  GLAMART</span></li>
                </ul>
            </section>
            
        </section>
        <hr width="100%">
        <section class="sec-2">
            <p>BUY NOW!!</p>
            <a href="#">SignUp!</a>
        </section>
        <hr width="100%">
        <section class="sec-3">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </section>
        <section class="sec-4">
            <p style="font-weight: bolder; text-transform: uppercase;">This is made by Reema and ishika</p>
        </section>
        </div>
    </footer>
    </div>
    

</body>

</html>