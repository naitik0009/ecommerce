<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


include '../middlewares/checkRoles.php';

checkUserRole('customer');

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>index page</title>
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./header.css">

</head>
<style>

    .home {
      position: relative; 
    }

    
    .home .img img {
      width: 100%; 
      height: 50vh; 
      object-fit: cover; 
    }

 
    .home .content {
      position: absolute; 
      top: 50%; 
      left: 5%; 
      transform: translateY(-50%); 
      text-align: left; 
      color: #000; 
      z-index: 1; 
      max-width: 40%; 
    }


    .home .content .btn {
      margin-top: 20px;
    }

    .home .content .btn button {
      padding: 15px 30px;
      font-size: 18px;
      color: #fff;
      background-color: #ff5733;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .home .content .btn button:hover {
      background-color: #ff8c66;
    }

  
    @media screen and (max-width: 768px) {
      .home .content {
        left: 50%; 
        transform: translate(-50%, -50%); 
        max-width: 80%; 
      }
    }


    .img img {
      max-width: 100%;
      height: auto;
    }
    
    @media only screen and (max-width: 768px) {
      .category-info {
        max-width: 100%;
        margin-top: 20px;
      }
      .product-cards {
        flex-direction: column;
        align-items: center;
        flex-wrap: nowrap;
        overflow-x: hidden;
        overflow-y: auto;
      }
      .product-card {
        max-width: 90%;
      }
    }
#feature-product2{
  padding: 16px 28px ;
}
   


</style>
<body>

<div><?php include('head.php'); ?></div>
    <section class="home">
  <div class="img">
    <img src="../assets/images/FriutBanner.jpg" alt="Fresh fruits">
  </div>
  <div class="content">
    <h1>
      <span>Fresh fruits</span><br>
      Up To <span id="span2">50%</span> Off
    </h1>
    <p>Buy now Buy now Buy now Buy now Buy now Buy now</p>
    <div class="btn"><button>Shop Now</button></div>
  </div>
</section>

  <section id="feature-shop" class="section-p1">
  <h2>Featured Shops</h2>
  <div id="shop-container" class="shop-container">
    <a href="../Shop_category/buchters_category.php" class="shop-link">
      <div class="fe-box">
        <img src="../assets/images/Shop/butcher 1.jpg" class="shop-image" alt="Butcher">
        <h4>Butcher</h4>
      </div>
    </a>
    <div class="fe-box">
      <img src="../assets/images/Shop/vegetable (2).jpg" class="shop-image" alt="Greengrocers">
      <h4>Greengrocers</h4>
    </div>
    <div class="fe-box">
      <img src="../assets/images/Shop/butcher.jpg" class="shop-image" alt="Fishmongers">
      <h4>Fishmongers</h4>
    </div>
    <div class="fe-box">
      <img src="../assets/images/Shop/bread shop.jpg" class="shop-image" alt="Bakeries">
      <h4>Bakeries</h4>
    </div>
    <div class="fe-box">
      <img src="../assets/images/Shop/fruit shop.jpg" class="shop-image" alt="Delicatessens">
      <h4>Delicatessens</h4>
    </div>
  </div>
</section>



<section id="feature-product2" class="section-p2">
  <h2>New Products</h2>
  <div><?php include('../product/product_list.php');?></div>
</section>
  
<section id="feature-product2" class="section-p2">
  <h2>Feature Products</h2>
  <div><?php include('../product/product_list.php');?></div>
</section>

<div><?php include('footer.php');?></div>
</body>
</html>