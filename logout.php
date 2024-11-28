<?html
// Start the session
session_start();

// Destroy the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session itself

// Redirect to the login page (replace 'login.html' with the actual path to your login page)
header("Location: index.html");
exit;
?>