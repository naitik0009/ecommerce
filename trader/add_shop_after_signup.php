<?php
require_once '../middlewares/checkAuthentication.php';

// Check if the user is logged in
checkIfUserIsLoggedIn();



$conn = oci_connect('saiman', 'Stha_12', '//localhost/xe');
if (!$conn) {
    $m = oci_error();
    $_SESSION['error']= $m['message'];
    exit();
} else {
    // print "Connected to Oracle!";
    $_SESSION['notification'] = "Connected to Oracle!";
}



if(isset($_POST['add-shop'])) {
    // Retrieve form data
    $email = $_POST['shopEmail'];
    $shopName = $_POST['shopName'];
    $number = $_POST['shopContactNumber'];
    $location = $_POST['location'];
    $shop_image = $_POST['shopImage'];
    


    // Check if email,shop_name or contact number already exists
    $query_check = "SELECT EMAIL,SHOP_NAME,CONTACT_NUMBER FROM Shop WHERE Email = '$email' OR SHOP_NAME = '$shopName' OR Contact_Number = '$number'";
    $statement_check = oci_parse($conn, $query_check);
    oci_execute($statement_check);
    $row = oci_fetch_assoc($statement_check);


    if ($row !== false) {
        $message = "Email, Shop name, or contact number already exists. Please use different ones.";
        if ($email === $row['EMAIL']) {
            $message = "Email already exists. Please use a different email.";
        } elseif ($shopName === $row['SHOP_NAME']) {
            $message = "Shop name already exists. Please use a different shop name.";
        } elseif ($number === $row['CONTACT_NUMBER']) {
            $message = "Contact number already exists. Please use a different one.";
        }
        $_SESSION['error'] = $message;
        header("Location: add_shop_after_signup.php");
        exit();
    }
    

    $traderID = $_SESSION['user']['TRADER_ID'];
    $query = "INSERT INTO Shop (SHOP_NAME,EMAIL,Shop_Location,CONTACT_NUMBER,TRADER_ID) VALUES ('$shopName','$email','$location','$number','$traderID')";
    
    $statement = oci_parse($conn, $query);
    $result = oci_execute($statement);

    if($result) {
        oci_commit($conn);
        header("Location: trader_dashboard.php");
        exit(); 
    } else {
        $error = oci_error($statement);
        $_SESSION['error'] = $error['message']; // Display Oracle error message
    }
    oci_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trader Signup</title>
    <link rel="shortcut icon" href="../assets/images/icons/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../includes/style.css">
    
</head>
<body>
    <!-- Shop details form -->
    <div class="add-shop">
        <div class="right-side" id="shopDetailsForm">
            <a href="./trader_dashboard.php" class="logo-link"><img src="../assets/images/icons/logo.png" alt="" class="logo"></a>
            <h2>Shop Details</h2>
            <form class="shop-form" method = "POST"id="shopForm">
                <span>Shop Name</span>
                <input type="text" id="shopName" name="shopName" placeholder="Shop Name" class="input-field">
                <span>Location</span>
                <input type="text" id="location" name="location" placeholder="Location" class="input-field">
                <span>Email</span>
                <input type="email" id="shopEmail" name="shopEmail" placeholder="Email" class="input-field">
                <span>Contact Number</span>
                <input type="tel" id="shopContactNumber" name="shopContactNumber" placeholder="Contact Number" class="input-field">
                <span>Shop Image</span>
                <input type="file" id="shopImage" name="shopImage"  class="input-field">
                <button type="submit" name="add-shop" class="submit-btn">Next</button>
            </form>
        </div>
    </div>
</body>
</html>
