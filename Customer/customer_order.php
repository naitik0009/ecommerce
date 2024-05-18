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
    <title>Order History</title>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="stylesheet" href="../includes/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../includes/sidebar.css">
</head>
<style>
    /* Sidebar Styles */
.sidebar {
    color: #000;
    padding: 20px;
    width: 250px;
    height: 80vh;
    position: relative;
    background-color: #fcfafa;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.sidebar a {
    color: #000;
    display: block;
    padding: 10px;
    text-decoration: none;
    transition: background 0.3s;
}

.sidebar a:hover {
    background-color: #666;
}

/* General Styles */
.container {
    display: flex;
}

.page-header {
    width: calc(100% - 250px); /* Subtract sidebar width from total width */
    padding: 0 20px;
}

.profile-content {
    margin-top: 20px;
}

/* Order Item Styles */
.order-item {
    background-color: #fff;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    border-radius: 0.375rem; /* 6px */
    padding: 1.5rem; /* 24px */
    margin-bottom: 1.5rem; /* 24px */
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.order-item img {
    width: 6rem; /* 96px */
    height: 6rem; /* 96px */
    border-radius: 0.375rem; /* 6px */
    margin-right: 1.5rem; /* 24px */
}

.order-details {
    flex: 1;
}

.order-details .flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.order-details .flex div {
    width: 25%; /* 1/4 of the container */
}

.order-details p {
    margin: 0;
}

.order-details p span {
    font-weight: bold;
}


</style>
<body>
    <header><?php include('../includes/head.php');?></header>
    <div class="container flex">
        <div class="sidebar">
            <a href="./customer_profile.php">My Profile</a>
            <a href="./customer_order.php">My Orders</a>
            <a href="./Wishlist.php">My Wishlist</a>
        </div>
        <div id="orders" class="page-header w-full px-8">
            <h1 class="text-2xl font-bold mb-4 text-center">Order History</h1>
            <p class="text-gray-600 mb-8 text-center">View your past orders and order details.</p>
            <div class="profile-content cart-items">
                <!-- Order History Items -->
                <!-- Single Order Item -->
                <div class="order-item bg-white shadow-md rounded-md p-6 mb-6 flex items-center justify-between">
                    <img src="../assets/images/Shop/bread shop.jpg" alt="Product 1" class="w-24 h-24 rounded-lg mr-4">
                    <div class="order-details flex-1">
                        <div class="flex flex-col">
                            <p class="text-lg font-semibold">Product 1</p>
                        </div>
                        <div class="flex mt-2">
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold">Price:</span> $10</p>
                            </div>
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold">Quantity:</span> 1</p>
                            </div>
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold">Date:</span> 2024-04-25</p>
                            </div>
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold">Order ID:</span> 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Order Item -->

                <!-- You can add more cart items here as needed -->
            </div>
        </div>
    </div>
    <div><?php include('../includes/footer.php');?></div>
</body>
</html>
