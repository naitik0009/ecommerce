<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="stylesheet" href="../includes/footer.css">
    <style>
        

        .heading {
            background-color: #ccc;
            color: #333;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .heading h4 {
            margin: 0 20px ;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .filters {
            display: flex;
            align-items: center;
        }

        .filters select {
            margin-left: 10px;
            margin-right: 20px;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            font-size: 14px;
            color: #555;
            outline: none;
        }

        .main-content {
            display: flex;
            margin: 20px;
        }

        .sidebar {
            flex: 0 0 15%;
            background-color: #f9f9f9;
            padding: 20px;
            border-right: 2px solid #ccc;
            color: #333;
            border-radius: 10px;
        }

        .sidebar h2 {
            margin-top: 0;
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
        }

        .filter-section {
            margin-bottom: 30px;
        }

        .filter-section h3 {
            margin-top: 0;
            font-size: 14px;
            margin-bottom: 4px;
            color: #333;
            text-transform: uppercase;
        }

        .sub-filters select {
            margin-top: 5px;
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            font-size: 14px;
            color: #555;
            outline: none;
        }

        .product-cards { display: flex; flex-wrap: wrap; overflow-x: auto; max-width: 100%; justify-content: space-between; }



        
    </style>
</head>
<body>
<div><?php include('../includes/head.php');?></div>

    <div class="heading">
        <h4>Results</h4>
        <div class="filters">
            <div class="category-filter">
                <label for="category">Category:</label>
                <select id="category">
                    <option value="all">All Categories</option>
                    <option value="meat">Meat</option>
                    <option value="fish">Fish</option>
                    <option value="vegetable">Vegetable</option>
                    <option value="bakery">Bakery</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>
            <div class="sort-filter">
                <label for="sort">Sort By:</label>
                <select id="sort">
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="rating">Rating</option>
                    <!-- Add more sorting options as needed -->
                </select>
            </div>
        </div>
    </div>

    <div class="main-content">
        <aside class="sidebar">
            <h2>Filters</h2>
            <div class="filter-section">
                <h3>Price Range</h3>
                <div class="sub-filters">
                    <select>
                        <option value="all">All Prices</option>
                        <option value="0-10">Rs.0 - Rs.10</option>
                        <option value="10-20">Rs.10 - Rs.20</option>
                        <option value="20-30">Rs.20 - Rs.30</option>
                        <!-- Add more price ranges as needed -->
                    </select>
                </div>
            </div>
            <div class="filter-section">
                <h3>Rating</h3>
                <div class="sub-filters">
                    <select>
                        <option value="all">All Ratings</option>
                        <option value="5">5 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="3">3 Stars</option>
                        <!-- Add more rating options as needed -->
                    </select>
                </div>
            </div>
            <div class="filter-section">
                <h3>Discount</h3>
                <div class="sub-filters">
                    <select>
                        <option value="all">All Discounts</option>
                        <option value="10">10% Off</option>
                        <option value="20">20% Off</option>
                        <option value="30">30% Off</option>
                        <!-- Add more discount options as needed -->
                    </select>
                </div>
            </div>
            <div class="filter-section">
                <h3>Product Type</h3>
                <div class="sub-filters">
                    <select>
                        <option value="all">All Types</option>
                        <option value="organic">Organic</option>
                        <option value="local">Local</option>
                        <option value="imported">Imported</option>
                        <!-- Add more product type options as needed -->
                    </select>
                </div>
            </div>
            <!-- Add more filter sections as needed -->
        </aside>

        <div><?php include('../product/product_list.php');?></div>


        </section>
    </div>

    <div><?php include('../includes/footer.php');?></div>
</body>
</html>
