<?php

session_start();

	include("config.php");
    include("functions.php");

    $user_data=check_login($con);
	

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/item.css">
    <title>GLAMART</title>

</head>

<body>
    <h1><i class="fa fa-shopping-cart"></i></h1>
    <h2>Welcome</h2>
    <h4><?php echo $user_data['username'];?></h4>
    <section>
        <div>
            <img src="../img/mini-drafter-500x500.jpg">
            <p><b>MINI-DRAFTER</b></p>
            <h6>Rs. 300</h6>
            <span></span>
            <button>ADD TO CART</button>
        </div>
        <div>
            <img src="../img/chart holder.jpg">
            <p><b>SHEET-HOLDER</b></p>
            <h6>Rs. 40</h6>
            <span></span>
            <button> ADD TO CART</button>

        </div>
        <div>
            <img src="../img/chart paper.jpg">
            <p><b>DRAWING SHEETS(10 Pcs)</b></p>
            <h6>Rs. 70</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/drawing-board-clips.jpg">
            <p><b>Drawing CLIPS(4 PCS)</b></p>
            <h6>Rs. 20 </h6>
            <span></span>
            <button>ADD TO CART</button>
        </div>

    </section>

    <section>
        <div>
            <img src="../img/global-trade-of-pencils-hinrich-foundation-cropped.jpg">
            <p><b>PENCILS(HB+H1+H2+H3)</b></p>
            <h6>Rs. 20</h6>
            <span></span>
            <button>ADD TO CART</button>
        </div>
        <div>
            <img src="../img/eraser.jpg">
            <p><b>ERASER</b></p>
            <h6>Rs. 3</h6>
            <span></span>
            <button> ADD TO CART</button>

        </div>
        <div>
            <img src="../img/sharpner.jpg">
            <p><b>SHARPNER</b></p>
            <h6>Rs. 5</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/plastic-scale-107.jpg">
            <p><b>PENCILS</b></p>
            <h6>Rs.10</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
    </section>
    <section>
        <div>
            <img src="../img/steel-scale-250x250.jpg">
            <p><b>STEEL-SCALE</b></p>
            <h6>Rs. 50</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/geomatry box.webp">
            <p><b>GEOMATRY</b></p>
            <h6>Rs. 250</h6>
            <span></span>
            <button>ADD TO CART</button>
        </div>
        <div>
            <img src="../img/lab-uniform-250x250.jpeg">
            <p><b>LABCOAT</b></p>
            
            <h6>Rs. 250</h6>
            <span></span>
            <button> ADD TO CART</button>
            
        </div>
        <div>
            <img src="../img/SPIRAL NOTEBOOK.jpg">
            <p><b>SPIRAL NOTEBOOK(300 PAGES)</b></p>
            <h6>Rs. 118</h6>
            <span></span>
            <button>ADD TO CART</button>
        </div>
    </section>
    <section>
        <div>
            <img src="../img/practical-file-500x500.jpg">
            <p><b>STICK FILES</b></p>
            <h6>Rs 7</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/a4 sheets.jpg">
            <p><b>A4 SHEETS(25 PCS)</b></p>
            <h6>Rs. 20</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/aprin.jpg">
            <p><b>APRIN</b></p>
            <h6>Rs. 60</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/PERMANENT MARKER.jpg">
            <p><b>PERMANENT MARKER</b></p>
            <h6>Rs. 20</h6>
            <span></span>
            <button>ADD TO CART</button>
        </div>
    </section>

    <section>
        <div>
            <img src="../img/pens 3rs..jpg">
            <p><b>PENS</b></p>
            <h6>Rs. 3 each</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/pen 5rs..jpg">
            <p><b>PENS</b></p>
            <h6>Rs. 5 each</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/whiteboard-marker-pen-500x500.jpg">
            <p><b>WHITEBOARD MARKER</b></p>
            <h6>Rs. 25</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/SKETCH PEN.jpg">
            <p><b>SKETCH PEN</b></p>
            <h6>Rs. 25</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
    </section>
    <section>
        <div>
            <img src="../img/calc.jpg">
            <p><b>SCIENTIFIC CACULATOR(100 MM)</b></p>
            <h6>Rs. 500</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/physics practicle_book.jpg">
            <p><b>PHYSICS PRACTICAL FILE</b></p>
            <h6>Rs 40</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/chemistry practicle.jpg">
            <p><b>CHEMISTRY PRACTICAL FILE</b></p>
            <h6>Rs. 40</h6>
            <span></span>
            <button> ADD TO CART</button>
        </div>
        <div>
            <img src="../img/NOTEBOOK.webp">
            <p><b>LECTURE REGISTER(300 PAGES)</b></p>
            <h6>Rs. 118</h6>
            <span></span>
            <button> ADD TO CART</button>
            
        </div>
    </section>
    <div class="select"></div>
</body>

</html>

<!--<script type="text/javascript">
    var noti = document.querySelector('h1');
    var select = document.querySelector('.select');
    var button = document.getElementsByTagName('button');
    for (but of button) {
        but.addEventListener('Click', (e) => {
                var add = Number(noti.getAttribute('data-count') || 0);
                noti.setAttribute('data-count', add + 1);
                noti.classList.add('zero');
                // copy n paste element
                var parent = e.target.parentNode;
                var clone = parent.cloneNode(true);

                select.appendChild(clone);
                clone.lastChildElementChild.innerText = "Buy-Now";
                if (clone) {
                    noti.onclick = () => {
                        select.classList.toggle('display')
                    }
                }
        }
    }
    
</script>