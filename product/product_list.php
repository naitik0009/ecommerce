<style>
    #feature-shop {
  text-align: center;
  padding: 50px 0;
}

/* Ensure that styles are applied to #shop-container inside #feature-shop */
#feature-shop #shop-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

/* Ensure that styles are applied to .fe-box inside #feature-shop */
#feature-shop .fe-box {
  width: 200px;
  margin: 20px;
  padding: 10px;
  background-color: #f5f5f5;
  border-radius: 8px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

/* Ensure that styles are applied to images inside .fe-box inside #feature-shop */
#feature-shop .fe-box img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
}

/* Ensure that styles are applied to h4 tags inside .fe-box inside #feature-shop */
#feature-shop .fe-box h4 {
  margin-top: 10px;
  font-size: 18px;
  color: #333;
}

/* Ensure that hover effect is applied to .fe-box inside #feature-shop */
#feature-shop .fe-box:hover {
  transform: translateY(-5px);
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

/* Ensure that styles are applied to links inside .fe-box inside #feature-shop */
#feature-shop .shop-link {
  text-decoration: none;
  color: inherit;
}

.product-cards {
      display: flex;
      flex-wrap: wrap;
      overflow-x: auto;
      max-width: 100%;
      justify-content: space-between;
    }

</style>
<section class="product-cards">
    <?php
    // Define data for each product
    $products = array(
        array(
            "id" => 1,
            "name" => "Himani Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 4.5
            // Add other product details here
        ),array(
            "id" => 2,
            "name" => "Sivam Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 4.1
            // Add other product details here
        ),array(
            "id" => 4,
            "name" => "Hari Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 4
            // Add other product details here
        ),array(
            "id" => 5,
            "name" => "Organic Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 3.4
            // Add other product details here
        ),array(
            "id" => 6,
            "name" => "Organic Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 4
            // Add other product details here
        ),
        // Add data for other products
    );

    // Include product cards dynamically
    foreach ($products as $product) {
        $productId = $product['id'];
        $productName = $product['name'];
        $productImage = $product['image'];
        $productDescription = $product['description'];
        $productRating = $product['rating'];
        $productPrice = $product['price'];
        include('../product/product_card.php');
    }
    ?>

</section>
        