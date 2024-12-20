<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Password is correct, start a new session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to service page
        header("Location: service.php");
        exit();
    } else {
        // Invalid credentials
        $login_error = "Invalid email or password";
    }
}
?>

<!-- In your existing login.php HTML, add error display -->
<?php
if (isset($login_error)) {
    echo "<div class='error-container'><p class='error'>$login_error</p></div>";
}

// Check for signup success message
if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
    echo "<div class='success-container'><p class='success'>Registration successful. Please log in.</p></div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link rel="stylesheet" href="styles/login.css">
    <title>Login ||</title>
</head>
<body>
        
        <div class="container_form">
            
            <form action="login.php" method="post">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00415a" fill-opacity="1" d="M0,0L80,32C160,64,320,128,480,133.3C640,139,800,85,960,69.3C1120,53,1280,75,1360,85.3L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
                <div class="ani1">
                    <h2 style="letter-spacing: 3px">Welcome Back</h2>
                    <lord-icon
                        src="https://cdn.lordicon.com/chkplqja.json"
                        trigger="in"
                        delay="300"
                        stroke="light"
                        colors="primary:#00415a,secondary:#009bd6"
                        style="width:100px;height:100px">
                    </lord-icon>
                </div>
                <h2 style="display: flex;align-items: center;justify-content: center; letter-spacing: 3px;">
                    LOGIN
                </h2>
                <hr style="height: 3px; background-color: #00415a;margin-top: 10px;margin-bottom: 10px; margin: 30px;">
                
                    <div class="input">
                        <div class="input-container">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="email"   required placeholder="Email..." >
                        </div>
                        
                        <div class="input-container">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password"    required placeholder="Enter Password...">
                        
                        </div>
                        
                
                <div class="info">
                    <input type="submit" value="Log-In" class="btn" style="letter-spacing: 3px;">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a> </p>
                </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00415a" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,208C840,192,960,192,1080,160C1200,128,1320,64,1380,32L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
            </form>
            
        </div>
</html>