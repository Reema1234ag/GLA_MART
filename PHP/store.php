<?php

session_start();

	include("config.php");
    include("functions.php");

    $user_data=check_login($con);
	

?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Generics | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="./style1.css" />
        <script src="./store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./store.php">STORE</a></li>
                    <li><a href="./about.html">ABOUT</a></li>
                    <li><a href="./logout.php">LOGOUT</a><li>
                    
                </ul>
            </nav>
            <h4 class="band-name band-name-large">Welcome <?php echo $user_data['username'];?> !</h4>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Stationary Shop</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Aprin</span>
                    <img class="shop-item-image" src="../img/aprin.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">80rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Mini-Drafter</span>
                    <img class="shop-item-image" src="../img/mini-drafter-500x500.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">300.rs</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Sheet-holder</span>
                    <img class="shop-item-image" src="../img/chart holder.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">40rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Drawing-Sheets(10pcs)</span>
                    <img class="shop-item-image" src="../img/a4 sheets.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">70rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Eraser</span>
                    <img class="shop-item-image" src="../img/eraser.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">5rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Sharpner</span>
                    <img class="shop-item-image" src="../img/sharpner.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">40rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Lab-Coat</span>
                    <img class="shop-item-image" src="../img/lab-uniform-250x250.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">250rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Scientific Calculator(100mm)</span>
                    <img class="shop-item-image" src="../img/calc.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">600rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">pens(blue)</span>
                    <img class="shop-item-image" src="../img/pens 3rs..jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">3rs. each</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Geomatry Box</span>
                    <img class="shop-item-image" src="../img/geomatry box.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">250rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Register</span>
                    <img class="shop-item-image" src="../img/class register.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">50rs</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Steel Scale</span>
                    <img class="shop-item-image" src="../img/steel-scale-250x250.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">30rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Stick Files</span>
                    <img class="shop-item-image" src="../img/stick-files-500x500.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">20rs.(4)</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">White Board Marker</span>
                    <img class="shop-item-image" src="../img/whiteboard-marker-pen-500x500.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">25rs. each</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Permanent Marker</span>
                    <img class="shop-item-image" src="../img/PERMANENT MARKER.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">30rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Practical Files</span>
                    <img class="shop-item-image" src="../img/practical-file-500x500.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">50rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Spiral notebook</span>
                    <img class="shop-item-image" src="../img/SPIRAL NOTEBOOK.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">80rs.(200 pages)</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Sketch pens</span>
                    <img class="shop-item-image" src="../img/SKETCH PEN.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">150rs.</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        
        <!--<section class="container content-section">
            <h2 class="section-header">MERCH</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">T-Shirt</span>
                    <img class="shop-item-image" src="Images/Shirt.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Coffee Cup</span>
                    <img class="shop-item-image" src="Images/Cofee.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">0rs.</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">The GLA_MART</h3><pre>                        </pre>
                <h3 class="band-name">For Feedback Click Here!</h3>
                <ul class="nav footer-nav">
                    <li>
                    <a href="./feedback.php" >
                <input type="submit" value="Feedback" class="btn-block"></a>
                    </li>
                   <!-- <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Images/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="Images/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li> -->
                </ul>
            </div>
        </footer>
    </body>
</html>