<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Category Details</title>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="stylesheet" href="../includes/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        main { padding: 20px; }
        .category-details { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 20px; background-color: #f9f9f9; border-radius: 10px; }
        .category-image { flex: 0 0 40%; max-width: 40%; }
        .category-image img { display: block; max-width: 100%; height: auto; border-radius: 10px; }
        .category-info { flex: 0 0 55%; max-width: 55%; }
        .category-info h2 { margin-top: 0; padding-bottom: 10px; font-size: 24px; color: #333; }
        .category-info p { margin-top: 0; padding-bottom: 10px; color: #666; }
        .category-info ul { margin: 0; padding: 0; list-style: none; color: #888; }
        .category-info li { padding: 5px 0; }
        .product-cards { display: flex; flex-wrap: wrap; overflow-x: auto; max-width: 100%; justify-content: space-between; }
        @media only screen and (max-width: 768px) {
            .category-details { flex-direction: column; align-items: center; }
            .category-info { max-width: 100%; margin-top: 20px; }
            .product-cards { flex-direction: column; align-items: center; flex-wrap: nowrap; overflow-x: hidden; overflow-y: auto; }
            .product-card { max-width: 90%; }
        }
    </style>
</head>
<body>
    <div><?php include('../includes/head.php');?></div>
    <main>
        <section class="category-details">
            <div class="category-image">
                <img src="../assets/images/Shop/vegetable (2).jpg" alt="Butcher Image">
            </div>
            <div class="category-info">
                <h2>Butcher</h2>
                <p>Explore our fresh and delicious selection of vegetables and meat. From vibrant greens to succulent cuts, we've got it all!</p>
                <ul>
                    <li><strong>Number of Products:</strong> 20</li>
                    <li><strong>Location:</strong> .............</li>
                </ul>
            </div>
        </section>
        

        <!-- index.php or any other parent file -->
<section class="product-cards">
    <?php
    // Define data for each product
    $products = array(
        array(
            "id" => 1,
            "name" => "Organic Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 4.5
            // Add other product details here
        ),array(
            "id" => 2,
            "name" => "Organic Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 4.1
            // Add other product details here
        ),array(
            "id" => 4,
            "name" => "Organic Vegetables",
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
        ),array(
            "id" => 7,
            "name" => "Organic Vegetables",
            "image" => "../assets/images/Shop/vegetable (2).jpg",
            "description" => "Freshly harvested organic vegetables from local farms.",
            "price"=>1234,
            "rating" => 1.5
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

    </main>
    <div><?php include('../includes/footer.php');?></div>
</body>
</html>
