
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Validate username and password (this is just a basic example)
    if ($username === "admin" && $password === "password") {
        // Start session and store username in session variable
        session_start();
        $_SESSION["username"] = $username;
        
        // Redirect user to dashboard or home page
        header("Location: dashboard.php");
        exit;
    } else {
        // Invalid credentials, show error message
        echo "<div class='container'>";
        echo "<p style='color: red; text-align: center;'>Invalid username or password. Please try again.</p>";
        echo "</div>";
    }
}
?>