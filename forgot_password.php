<?html
session_start();
require 'database.html';

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Check if the email exists in the database
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Store the user's ID in the session
        $_SESSION['reset_user_id'] = $user['id'];
        
        // Redirect to the new password form
        header("Location: reset_password.html");
        exit();
    } else {
        $error_message = "No account found with that email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/forgotpass.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Forgot Password</h2>
            <p>Enter your registered email to reset your password.</p>
            
            <form action="forgot_password.html" method="POST">
                <input type="email" name="email" placeholder="Your email address" required>
                <button type="submit">Submit</button>
            </form>
            
            <?html if ($error_message): ?>
                <p class="error-message"><?html echo $error_message; ?></p>
            <?html endif; ?>
        </div>
    </div>
</body>
</html>
