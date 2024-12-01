<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];

    // Validate inputs
    $errors = [];

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    // Check if email already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "Email already exists";
    }

    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into database
        $stmt = $pdo->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        
        try {
            $stmt->execute([$email, $username, $hashed_password]);
            
            // Redirect to login page with success message
            header("Location: login.php?signup=success");
            exit();
        } catch(PDOException $e) {
            $errors[] = "Registration failed: " . $e->getMessage();
        }
    }
}
?>

<!-- Modify your existing signup.php HTML to show errors -->
<div class="error-container">
    <?php
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    }
    ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link rel="stylesheet" href="styles/signup.css">
    <title>signup||</title>
</head>
<body>
    <body>
        
        <div class="container_form">
            
            <form action="signup.php" method="post">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 60">
                    <path fill="#00415a" fill-opacity="1" d="M0,80L720,16L720,0L0,0Z"></path>
                </svg>
                <div class="ani1">
                    <h2 style="letter-spacing: 2px;">Create an Account</h2>
                    <lord-icon
                        src="https://cdn.lordicon.com/zrkkrrpl.json"
                        trigger="in"
                        stroke="light"
                        state="hover-swirl"
                        colors="primary:#00415a,secondary:#009bd6"
                        style="width:100px;height:70px">
                    </lord-icon>
                </div>
                
                <h2 style="display: flex;align-items: center;justify-content: center; letter-spacing: 3px;">
                    Sign Up
                </h2>
                
                <hr style="height: 3px; background-color: #00415a;margin-top: 5px; margin: 30px;">
               
                        
                    <div class="input">
                        <div class="input-container">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="email"   required placeholder="Enter Email..." >
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="username"   required placeholder="Enter Username...">
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password"   minlength="8" required   placeholder="Enter Password..." >
                        </div>
                        <div class="input-container">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="confirmPassword"   minlength="8" required placeholder="Confirm Password..." >
                        </div>
                        
                    
                     
                    <div class="info">
                        <input type="submit" value="Signup" class="btn" style="letter-spacing: 3px;">
                        <p>Already have an account? <a href="login.php">Login</a> </p>
                    </div>
                    
                    
                </div>
                
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 720 160">
                    <path fill="#00415a" fill-opacity="1" d="M0,192L1440,32L1440,320L0,320Z"></path>
                </svg>
            </form>
            
        </div>


</body>
</html>