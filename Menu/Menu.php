<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <style>
           
    
          
    
           
        * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
.c {
 font-family: Arial, sans-serif;
 background-color: #f0f2f5;
}
.navbar {
 background-color: #ffffff;
 border-bottom: 1px solid #dddfe2;
 display: flex;
 justify-content: space-around;
 padding: 10px;
 background-color: white;
 border-top: 1px solid #ccc;
}


.navbar .nav-links {
 display: flex;
 text-align: center;
 list-style-type: none;
}

.navbar .nav-links li {
 margin-right: 15px;
}

.navbar .nav-links a {
 text-decoration: none;
 color: rgb(33, 8, 8);
 font-size: 25px;
 padding: 10px;
}

.navbar .nav-links a.active {
 border-bottom: 3px solid #1877f2;
 font-weight: bold;
}
 
         
         
     </style>
</head>
<body class="c">

    <div class="container">
        <header>
            <div class="navbar">
                <ul class="nav-links">
                    <li><a href="/index.php" >Home</a></li>
                    <li><a href="/about/about-us.php">About</a></li>
                    <li><a href="/" class="active">Menu</a></li>
                    <li><a href="/dessert/Dessert.php" >Dessert</a></li>
                    <li><a href="/Drinks/Drinks.php">Drinks</a></li>
                    <div class="iconCart">
                        <img src="/image/icon.png">
                        <div class="totalQuantity">0</div>
                       <br>
                    </div>
                </ul>
            </div>
        </header><br>
        <div class="menu" id="Menu">
            <h1>Our<span>Menu</span></h1>
        </div>
    </div>

        <div class="listProduct">

            <div class="item">
                <img src="/image/menus/Afritada.jpg" alt="">
                <h2>CoPilot / Black / Automatic</h2>
                <div class="price">₱550</div>
                <button>Add To Cart</button>
            </div>

        </div>
    </div>


    <div class="cart">
        <h2>
            CART
        </h2>

        <div class="listCart">


            <div class="item">
                <img src="/image/menus/Afritada.jpg">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">₱550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>
         

        </div>

        <div class="buttons">
            <div class="close">
                CLOSE
            </div>
            <div class="checkout">
                <a href="/checkout/checkout.php">CHECKOUT</a>
            </div>
        </div>
    </div>


    <script src="/script.js"></script>
    
</body>
</html>