<?php
require_once '../middlewares/checkAuthentication.php';

// Check if the user is logged in
checkIfUserIsLoggedIn();

include '../messages/notifications.php';

list($error, $notification) = flashNotification();

$conn = oci_connect('saiman', 'Stha_12', '//localhost/xe');
if (!$conn) {
    $m = oci_error();
    $_SESSION['error'] = $m['message'];
    exit();
} else {
    $_SESSION['notification'] = "Connected to Oracle!";
}

if (isset($_SESSION['user']['USERNAME'])) {
    $userEmail = $_SESSION['user']['USERNAME'];
} else {
    $_SESSION['error'] = "User not found";
    header("Location: ../Login/customer_signin.php");
    exit();
}


$query = "SELECT 
Product.Product_ID,
Product.Product_Name,
Product.Price AS Product_Price,
Product.Stock_Available AS Product_Stock,
Product.Product_Status,
Product.Allergy,
Product.Description,
Shop.Shop_Name,
Trader.First_Name || ' ' || Trader.Last_Name AS Trader_Name
FROM Product
INNER JOIN Shop ON Product.Shop_ID = Shop.Shop_ID
INNER JOIN Trader ON Shop.Trader_ID = Trader.Trader_ID";

$admin = $_SESSION['user']['USERNAME'];
 $statement = oci_parse($conn, $query);
 oci_execute($statement);



 oci_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Trader Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>
    <div class="grid-container">

    <header class="header">
  <div class="menu-icon">
    <span class="material-icons-outlined">menu</span>
  </div>
  <div class="search-bar">
    <input type="text" placeholder="Search...">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</div>
  <div class="profile-section">
    <div class="profile-image">
      <img src="../assets/images/Shop/butcher 1.jpg" alt="Profile Image">
    </div>
    <div class="profile-name"><?php echo $admin?></div>
  </div>
</header>


    <!-- Sidebar -->
    <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <a href="./admin_dashbaord.php"><img src="../assets/images/icons/logo.png" alt=""></a>
                </div>
            </div>

            <ul class="sidebar-list">
            <li class="sidebar-list-item">
                    <a href="./admin_dashbaord.php">
                        <img src="" alt=""> Dashboard
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#">
                        <img src="" alt=""> Report
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Report 1</a></li>
                        <li><a href="#">Report 2</a></li>
                        <li><a href="#">Report 3</a></li>
                    </ul>
                </li>
                <li class="sidebar-list-item">
                    <a href="./Manage_product.php">
                        <img src="" alt=""> Manage Product
                    </a>
                    
                </li>
                <li class="sidebar-list-item">
                    <a href="./manage_trader.php">
                        <img src="" alt=""> Manage Trader
                    </a>
                </li>
                <li class="sidebar-list-item">
      <a href="./manage_customer.php">
       <img src="#" alt=""> Manage Customer
      </a>
    </li>
            </ul>

            <!-- Logout Button -->
            <div class="logout-button">
                <a href="../Authentication/logout.php"><button>Logout</button></a>
            </div>
        </aside>
      <main class="main-container">
        <div class="main-title">
          <h2>Dashboard</h2>
        </div>
        

          
      </main>
    </div>

  </body>
</html>