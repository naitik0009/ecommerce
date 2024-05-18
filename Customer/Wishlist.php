<?php
require_once '../middlewares/checkAuthentication.php';

// Check if the user is logged in
checkIfUserIsLoggedIn();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="stylesheet" href="../includes/footer.css">
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

.wishlist-content {
    margin-top: 20px;
}

/* Wishlist Item Styles */
.wishlist-item {
    background-color: #fff;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    border-radius: 0.375rem; /* 6px */
    padding: 1.5rem; /* 24px */
    margin-bottom: 1.5rem; /* 24px */
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.wishlist-item img {
    width: 6rem; /* 96px */
    height: 6rem; /* 96px */
    border-radius: 0.375rem; /* 6px */
    margin-right: 1.5rem; /* 24px */
}

.wishlist-details {
    flex: 1;
}

.wishlist-details .flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.wishlist-details .flex div {
    width: 25%; /* 1/4 of the container */
}

.wishlist-details p {
    margin: 0;
}

.wishlist-details p span {
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
        <div id="wishlist" class="page-header w-full px-8">
            <h1 class="text-2xl font-bold mb-4 text-center">Wishlist</h1>
            <p class="text-gray-600 mb-8 text-center">Items you have added to your wishlist.</p>
            <div class="wishlist-content">
                <!-- Wishlist Items -->
                <!-- Single Wishlist Item -->
                <div class="wishlist-item bg-white shadow-md rounded-md p-6 mb-6 flex items-center justify-between">
                    <img src="../assets/images/Shop/bread shop.jpg" alt="Product 1" class="w-24 h-24 rounded-lg mr-4">
                    <div class="wishlist-details flex-1">
                        <div class="flex flex-col">
                            <p class="text-lg font-semibold">Product 1</p>
                        </div>
                        <div class="flex mt-2">
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold">Price:</span> $20</p>
                            </div>
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold">Rating:</span> 4.5</p>
                            </div>
                            <div class="w-1/4">
                                <button class="text-gray-600 border border-gray-400 px-4 py-2 rounded-md hover:bg-gray-200">Remove</button>
                            </div>
                            <div class="w-1/4">
                                <p class="text-gray-600"><span class="font-semibold"> Added date:</span>2024-09-12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer><?php include('../includes/footer.php');?></footer>
</body>
</html>
