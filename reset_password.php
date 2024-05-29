<?php
session_start();
if (isset($_SESSION['reset_email']) && isset($_SESSION['reset_token'])) {
    $email = $_SESSION['reset_email'];
    $token = $_SESSION['reset_token'];
} else {
    die('Invalid session');
}
// Database connection
$mysqli = new mysqli("localhost", "root", "", "drug_checker");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the token is valid and not expired
$stmt = $mysqli->prepare("SELECT email FROM password_resets WHERE token = ? AND expires_at > NOW()");
$stmt->bind_param("s", $token);
$stmt->execute();
$stmt->bind_result($email);
$stmt->fetch();
$stmt->close();

if ($email) {
    $_SESSION['reset_email'] = $email;
    $_SESSION['reset_token'] = $token;
} else {
    die('Invalid or expired token');
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form action="update_password.php" method="post">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        background-color: #f9f2d8;
        font-family: "Poppins", sans-serif;
      }
      nav {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: -10px;
      }
      img {
        width: 150px;
      }
      section {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .container {
        width: 80%;
        height: 75vh;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        border-radius: 10px;
      }
      .container a {
        color: #e9763d;
      }
      .container h1 {
        margin-top: 20px;
      }
      .container h3 {
        width: 70%;
        text-align: center;
        margin-bottom: 10px;
      }
      .form_container {
        background-color: #ebeaea;
        width: 83%;
        height: 60%;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .form_container form {
        margin-top: 20px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
      form input {
        width: 90%;
        height: 50px;
        margin-bottom: 10px;
        padding-left: 10px;
        border-radius: 10px;
        border: none;
      }
      .second_input {
        display: flex;
        width: 90%;
        justify-content: space-around;
      }
      .second_input select {
        width: 50%;
        height: 50px;
        margin-bottom: 10px;
        padding-left: 10px;
        border-radius: 10px;
        border: none;
        margin-left: 10px;
      }
      .second_input input {
        width: 50%;
      }
      form button {
        padding: 8px;
        padding-left: 80px;
        padding-right: 80px;
        color: white;
        background-color: #032132;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <nav>
      <img src="assets/logo.png" alt="" />
    </nav>
    <section>
      <div class="container">
        <h1>Forgot Password</h1>
        <h3>
          Enter your email, an OTP will be sent to you
          <!-- <a href="SignUp.html">sign up here.</a> -->
        </h3>
        <div class="form_container">
          <form action="update_password.php" method="post">
          <input type="text" id="new_password" name="token" placeholder="Token" required>
          <input type="password" id="new_password" name="new_password" placeholder=" New Password" required>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>

