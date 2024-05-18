
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav id="up-nav">
            <div class="wapper">
                <div class="logo"><a href="../index.php"><img src="../assets/images/icons/logo.png" alt="" id="logo"></a></div>
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Search product....." name="search">
                        <button>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
            </div>
                <ul class="nav-link">
                    <li class="nav-link-item">

                    <?php if (!isset($_SESSION['user'])): ?>
                        <a href="../Login/customer_signin.php"><img src="../assets/images/icons/person.png" alt=""
                                id="topIcons"> Login <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="drop-menu">
                            <?php else: ?>
                            <a href="../Login/customer_signin.php"><img src="../assets/images/icons/person.png" alt=""
                                    id="topIcons"> Menu <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="drop-menu">
                                <?php endif; ?>

                                <?php if(!isset($_SESSION['user'])): ?>
                                <li><a class="dropdown-item" href="../Sign Up/customer_signup.php"><span
                                            id="head-signup">New Customer?</span> Sign Up</a></li>
                                <li><a class="dropdown-item" href="../Login/customer_signin.php">Login</a></li>

                                <?php else: ?>

                                <li><a class="dropdown-item" href="../Customer/customer_profile.php">My
                                        Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="../Customer/customer_order.php">My Orders</a>
                                </li>
                                <li><a class="dropdown-item" href="../Customer/#">My Wishlist</a></li>
                                <li><a class="dropdown-item" href="../Authentication/logout.php">Logout</a></li>
                                <?php endif; ?>






                        </ul>
                    </li>
                    <li class="nav-link-item"><a href="../Customer/Customer_cart.php"><img src="../assets/images/icons/shopping-cart.png" id="topIcons" alt="">Cart</a></li>

                    
    <li class="nav-link-item"><a href="../Sign Up/trader_signup.php"><img src="../assets/images/icons/store.png" id="topIcons" alt="">Become a trader</a></li>





                </ul>
            </div>

            <nav id="down-nav">
            <div class="wapper2">
                <div>
                    <ul class="nav-links">
                        <li><a href="../index.php">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li>
                            <a href="../includes/homepage.php#feature-sho" id="topIcons">SHOP</a>
                            <ul class="drop-menu" >
                                <li><a class="dropdown-item" href="../Shop_category/buchters_category.php">Buchters</a></li>
                                <li><a class="dropdown-item" href="#">Greengrocers</a></li>
                                <li><a class="dropdown-item" href="#">Fishmongers</a></li>
                                <li><a class="dropdown-item" href="#">Bakeries</a></li>
                                <li><a class="dropdown-item" href="#">Delicatessens</a></li>
                            </ul>
                            <li class="nav-link-item">
                       
                    </li>
                        </li>
                        <li><a href="../contactUs/contactus.php">CONTACT US</a></li>
                    </ul>
                </div>
            </div>

        </nav>
        </nav>
        
    </header>
    
</body>
</html>