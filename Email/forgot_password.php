<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="shortcut icon" href="../assets/images/icons/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body>
    <div class="password-reset">
        <div class="right-side">
            <a href="../index.php" class="logo-link">
                <img src="../assets/images/icons/logo.png" alt="" class="logo">
            </a>
            <h2>Reset Password</h2>
            <form class="otp-form" id="reset-password-form">
                <div class="input-group">
                    <label for="new-password">Enter New Password</label>
                    <input type="password" id="new-password" name="new-password" placeholder="New Password" class="input-field">
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirm New Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" class="input-field">
                </div>
                <button type="submit" class="submit-btn">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
