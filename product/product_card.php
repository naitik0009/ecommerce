
<style>
  .product-card {
    flex: 0 0 calc(20% - 16px); 
    margin-bottom: 20px; 
    margin: 20px auto; 
    padding: 10px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    position: relative;
    max-width: 300px; 
    width: 100%; 
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
}

.product-card img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.product-card .price {
    font-weight: bold;
    color: #00b300;
    font-size: 16px;
    margin-bottom: 10px;
}

.product-card .cart-icon {
    position: absolute;
    bottom: 20px;
    right: 20px;
    color: #333;
    font-size: 20px;
    cursor: pointer;
    transition: transform 0.3s ease;
    border: 1px solid #333;
    border-radius: 50%;
    padding: 8px;
}

.product-card .cart-icon:hover {
    transform: scale(1.1);
    background-color: #333;
    color: #fff;
    border-color: transparent;
}

.product-card .stars {
    display: flex;
    margin: 10px 0;
    color: #fdd835;
}

.product-card .stars .fa-star {
    font-size: 16px;
    margin-right: 4px;
    color: #fdd835;
}
.product-card a {
    color: inherit; 
    text-decoration: none; 
    cursor: pointer; 
  }

</style>

<div class="product-card">
    <a href="../product/product_detail.php">
        <img src="<?php echo $productImage; ?>" alt="<?php echo $productName; ?>">
        <h3><?php echo $productName; ?></h3>
        <p><?php echo $productDescription; ?></p>
        <i class="fas fa-shopping-cart cart-icon"></i> <!-- Cart icon -->
        <div class="stars"> <!-- Review stars -->
            <?php
            $rating = $product['rating'];
            $solidStars = floor($rating);
            $halfStar = $rating - $solidStars >= 0.5;
            for ($i = 0; $i < $solidStars; $i++) { ?>
                <i class="fas fa-star"></i>
            <?php }
            if ($halfStar) { ?>
                <i class="fas fa-star-half-alt"></i>
            <?php }
            for ($i = 0; $i < (5 - $solidStars - ($halfStar ? 1 : 0)); $i++) { ?>
                <i class="far fa-star"></i>
            <?php } ?>
        </div>
        <span class="price">Rs. <?php echo $productPrice; ?></span>
    </a>
</div>


