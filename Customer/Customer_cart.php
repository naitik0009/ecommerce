<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once '../middlewares/checkAuthentication.php';

// Check if the user is logged in
checkIfUserIsLoggedIn();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Include external CSS files -->
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="stylesheet" href="../includes/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Add this to your existing CSS */

        /* Cart Header */
        .cart-header {
            text-align: center;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1500px;
        }

        .cart-header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .cart-header p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        /* Cart Container */
        .cart-header .cart-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: auto;
        }

        /* Cart Items */
        .cart-header .cart-item-container {
            flex: 1;
            margin-right: 20px; 
        }

        .cart-header .cart-item {
            display: flex;
            width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding: 20px;
        }

        .cart-header .cart-item img {
            width: 80%; 
            height: auto;
            border-radius: 10px; 
        }

        .cart-header .cart-item-detail {
            width: 100%;
            margin-bottom: 0.5rem; 
        }

        .cart-header .cart-item img {
            width: 100px;
            height: 70px;
        }

        .cart-header  .cart-item-container a {
            text-decoration: none;
        }

        .cart-header  .cart-item-actions .cart-item-quantity{
            width: 80%;
            margin-right: 90px

        }

        /* Cart Summary */
        .cart-header .cart-summary {
            width: 30%;
            background-color: #fff;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }



        .cart-header  .cart-summary-details {
            margin-bottom: 1rem;
            text-align: start;
        }

        .cart-header  .cart-summary-details h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
            text-align: center;
        }

        .cart-header  .cart-summary-total {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 1rem;
            color: #333;
        }

        /* Checkout Button */
        .cart-header .checkout-button {
            background-color: orange;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }

        .cart-header  .checkout-button:hover {
            background-color: crimson;
        }
        .cart-header  .cart-summary .price-detail{
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <header><?php include('../includes/head.php');?></header>
    <div class="cart-header">
        <h1>Shopping Cart</h1>
        <p>View and manage items in your shopping cart.</p>
    
        <div id="cart" class="cart-container">
            <div class="cart-item-container">
                <!-- Cart Items -->
                <a href="#">
                    <div class="cart-item">
                        <img src="../assets/images/Shop/bread shop.jpg" alt="Product 1">
                        <div class="cart-item-detail">
                                <p class="cart-item-name">Product 1</p>
                            </div>
                            <div class="cart-item-detail">
                                <p class="cart-item-category">Category Name</p>
                            </div>
                            <div class="cart-item-detail">
                                <p class="cart-item-price">$10</p>
                            </div>
                            <div class="cart-item-actions">
                                <input type="number" class="cart-item-quantity" value="1">
                            </div>
                            <div class="cart-item-actions">
                                <button class="cart-item-delete">Delete</button>
                            </div>
                    </div>
                </a>
                <!-- Add more cart items as needed -->
            </div>
            <!-- Cart Summary -->
            <div class="cart-summary">
                <div class="cart-summary-details">
                    <h2>Cart Summary</h2>
                    <div >

                        <p>Subtotal:<span class="price-detail">Rs 1000</span> </p>
                    </div>
                    <div >
                        <p> Discount:<span class="price-detail">Rs 100</span></p>
                    </div>
                    <div>
                        <p> Total:<span class="price-detail">Rs 900</span></p>
                    </div>
                </div>
                <button class="checkout-button">Checkout</button>
            </div>
        </div>
    </div>
    <div><?php include('../includes/footer.php');?></div>
</body>
</html>
