<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>index page</title>
  <link rel="stylesheet" href="../includes/style.css">
  <link rel="stylesheet" href="../includes/header.css">
  <link rel="stylesheet" href="../includes/footer.css">
  <!-- Include Ionicons Library -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    
    /* Your CSS Styles */

    .product-container {           
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-wrap: wrap;
    }

    .quantity-selector label{
      font-weight: 400;

    }
    .quantity-selector input{
      width: 5%;
      margin-left: 10px;
      
    }
    
    .product-img-container {
      flex: 0 0 100%;
      margin-bottom: 20px;
    }
    
    .product-img-container img {
      max-width: 100%;
      border-radius: 8px;
    }
    
    .product-details-container {
      flex: 1;
    }
    
    .product-title {
      color: #333;
      font-size: 24px;
      margin: 0 0 10px;
    }
    
    .product-price {
      color: #333;
      font-size: 20px;
      margin: 0;
      font-weight: 600;
    }
    
    .stock {
      font-weight: 500;
    }

    .add-to-cart-btn {
      background-color: orange;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      cursor: pointer;
      border-radius: 45px;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }
    
    .add-to-cart-btn:hover {
      background-color: #e68a00;
    }
    
    .product-description {
      color: #444;
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 10px;
      margin-top: 20px;
    }

    .product-description h4 {
      margin-bottom: 15px;
    }
    .allergy-info{
      color: #444;
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 10px;
      margin-top: 20px;
    }

    .product-description h4 {
      margin-bottom: 15px;
    }
    
    .product-rating {
      color: #FFD700;
      font-size: 18px;
      margin-bottom: 10px;
      display: flex;
    }
    
    .product-rating ion-icon {
      margin-right: 5px;
      cursor: pointer;
    }
    
    .comment-section {
      margin-top: 20px;
    }
    
    .comment-section textarea {
      width: calc(100% - 42px); 
      height: 100px;
      padding: 10px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      margin-right: 10px;
    }
    
    .comment-section button {
      background-color: orange;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }
    
    .comment-section button:hover {
      background-color: #e68a00;
    }
    
    .comments {
      margin-top: 20px;
    }
    
    .comments h3 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
    }
    
    .comment {
      margin-bottom: 20px;
      padding: 10px;
      background-color: #f9f9f9;
      border-radius: 8px;
    }
    
    .comment p {
      font-size: 14px;
      color: #666;
      margin: 5px 0;
    }
    
    .comment p.comment-text {
      margin-bottom: 5px;
    }
    
    .comment p.comment-author {
      font-style: italic;
      color: #999;
    }
    
    @media (min-width: 768px) {
      .product-img-container {
        flex: 0 0 40%;
        margin-right: 20px;
      }
      .product-details-container {
        flex: 0 0 55%;
      }
    }
  </style>
</head>
<body>

<div><?php include_once '../includes/head.php'; ?></div>
 
<main>
  <div class="product-container">
    <div class="product-img-container">
      <img src="../assets/images/Shop/vegetable (2).jpg" alt="product name">
      <div class="comments">
        <h3>Comments</h3>
        <div class="comment">
          <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec ultrices felis.</p>
          <p class="comment-author">- User123</p>
        </div>
        <div class="comment">
          <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec ultrices felis.</p>
          <p class="comment-author">- User456</p>
        </div>

        <!-- Write Comment Section -->
        <div class="comment-section">
          <textarea placeholder="Leave a comment"></textarea>
          <button>Submit Comment</button>
        </div>

      </div>
    </div>
    <div class="product-details-container">
      <h2 class="product-title">Product Name</h2>
      <div class="product-rating" id="rating">
        ***********
      </div>
      <p class="product-price">Rs 150.00 </p>
      <p class="stock">In Stock :</p>
      
      <!-- Quantity Selector -->
      <div class="quantity-selector">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="1" min="1">
      </div>

      <!-- Add to Cart and Wishlist Buttons -->
      <button class="add-to-cart-btn">Add to Cart</button>
      <button class="add-to-cart-btn">Add to Wishlist</button>
      
      <!-- Product Description -->
      <p class="product-description">
        <h4>Description</h4>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec ultrices felis, in posuere dolor.
      </p>
      
      <!-- Allergy Information -->
      <p class="allergy-info"><h4>Allergy Information:</h4> Contains nuts</p>
    </div>
  </div>
</main>

<section id="feature-product2" class="section-p2">
    <h2>Related Product</h2>
    <div><?php include_once '../product/product_list.php'; ?></div>
</section>
<div><?php include_once '../includes/footer.php'; ?></div>

<script>
  // JavaScript for star rating
  const ratingIcons = document.querySelectorAll('.product-rating ion-icon');

  ratingIcons.forEach(icon => {
    icon.addEventListener('click', () => {
      const clickedIndex = Array.from(ratingIcons).indexOf(icon);
      ratingIcons.forEach((icon, index) => {
        icon.setAttribute('name', index <= clickedIndex ? 'star' : 'star-outline');
      });
    });
  });
</script>

</body>
</html>
