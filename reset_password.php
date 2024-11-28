<?html
session_start();
require 'database.html';

$error_message = "";

if (!isset($_SESSION['reset_user_id'])) {
    header("Location: forgot_password.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_password'], $_POST['confirm_password'])) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password === $confirm_password) {
        $hashed_password = hash('sha256', $new_password);
        $query = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
        $query->bindParam(':password', $hashed_password);
        $query->bindParam(':id', $_SESSION['reset_user_id']);
        
        if ($query->execute()) {
            unset($_SESSION['reset_user_id']);
            header("Location: index.html");
            exit();
        } else {
            $error_message = "Failed to update password. Please try again.";
        }
    } else {
        $error_message = "Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css/resetpass.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Reset Password</h2>
            <p>Enter your new password below.</p>

            <form action="reset_password.html" method="POST">
                <input type="password" name="new_password" placeholder="New Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Reset Password</button>
            </form>

            <?html if ($error_message): ?>
                <p class="error-message"><?html echo $error_message; ?></p>
            <?html endif; ?>
        </div>
    </div>
</body>
</html>
