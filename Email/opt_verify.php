<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="shortcut icon" href="../assets/images/icons/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body>
    <div class="otp-verification">
        <div class="right-side">
            <a href="../index.php" class="logo-link"><img src="../assets/images/icons/logo.png" alt="" class="logo"></a>
            <h2>OTP Verification</h2>
            <form class="otp-form">
                <span id="otp">Enter OTP</span>
                <input type="text" id="otp" name="otp" placeholder="OTP" class="input-field">
                <button type="submit" class="submit-btn">Verify</button>
            </form>
            <div class="resend-link">Didn't receive a code? Resend again</div>
        </div>
    </div>
</body>
</html>
