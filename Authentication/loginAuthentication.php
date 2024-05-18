<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = oci_connect('saiman', 'Stha_12', '//localhost/xe');
if (!$conn) {
    $m = oci_error();
    $_SESSION['error']= $m['message'];
    exit;
} else {
    // print "Connected to Oracle!";
    $_SESSION['notification'] = "Connected to Oracle!";
}

if (isset($_POST['login'])) {
    $email_username = $_POST['email_username'];
    $password = $_POST['password'];
    $role = $_POST['role']; 
    
    if ($role == 'customer') {
        $query = "SELECT * FROM Customer WHERE Email = :email OR Username = :username";
    } elseif ($role == 'trader') {
        $query = "SELECT * FROM Trader WHERE Email = :email OR Username = :username";
    } elseif ($role == 'admin') {
        $query = "SELECT * FROM Management WHERE  Username = :username";
    } else {
        $_SESSION['error'] = "Invalid role selected.";
        header('Location: ../Login/customer_signin.php');
        exit();
    }

    $statement = oci_parse($conn, $query);
    
    // Bind parameters
    oci_bind_by_name($statement, ":email", $email_username);
    oci_bind_by_name($statement, ":username", $email_username);
    
    oci_execute($statement);

    // Fetch the user record
    $user = oci_fetch_assoc($statement);

    

    if ($user) {
        // Verify email and password
        if ($user['EMAIL'] || $user['USERNAME'] === $email_username && $user['PASSWORD'] === $password) {
            // Authentication successful
            $_SESSION['user'] = $user; 
            // Redirect users to role-based pages
            if ($role == 'customer') {
                $_SESSION['customer_name'] = $user['EMAIL'];
                header("Location: ../index.php");
            } elseif ($role == 'trader') {
                header("Location: ../trader/trader_dashboard.php");
            } elseif ($role == 'admin') {
                header("Location: ../admin_dashboard/admin_dashbaord.php");
            }
            exit(); // Make sure to exit after redirection
        } else {
            // Password doesn't match
            $_SESSION['error'] = "Wrong password, please type the correct password.";
        }
    } else {
        // User not found
        $_SESSION['error'] = "User data not found.";
    }

    oci_close($conn);
    header('Location: ../login/customer_signin.php'); // Redirect back to login page
    exit();
}
?>
