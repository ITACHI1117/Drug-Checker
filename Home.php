<?php
// Start the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.html");
    exit;
}

// Access session variables
$id = $_SESSION["id"];
$email = $_SESSION["email"];
$username = $_SESSION["username"];
$age = $_SESSION["age"];
$genotype = $_SESSION["genotype"];
$bloodType = $_SESSION["bloodType"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        overflow: hidden;
      }
      nav {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: -10px;
      }
      img {
        width: 100px;
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
      .center{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      .absolute_position{
        position: absolute;
        top: 10px;
        right: 20px;
        cursor: pointer;
      }
      .absolute_position2{
        position: absolute;
        top: 10px;
        right: 60px;
        cursor: pointer;
      }
      .profile_info{
        position: absolute;
        top: 0px;
        right: -300px;
        height: 400px;
        width: 300px;
        background-color: #e9763d;
        color: white;
        border-bottom-left-radius: 10px;
      }
      .align_items_center{
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
      }
      .cancel_button{
        position: absolute;
        right: 10px;
        top: 10px;
        cursor: pointer;
      }
      .contain_Item {
        position: absolute;
        top: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
      }
      .info_container {
        position: relative;
        background-color: #e9763d;
        width: 90%;
        height: 95vh;
        border-radius: 20px;
      }
      .border1 {
        position: absolute;
        left: 50%;
        width: 3px;
        height: 80%;
        bottom: 10%;
        background-color: white;
        border-radius: 10px;
      }
      .border2 {
        position: absolute;
        right: 15%;
        width: 70%;
        height: 3px;
        top: 50%;
        /* bottom: 10%; */
        border-radius: 10px;
        background-color: white;
      }
      .image {
        margin-left: 20px;
        margin-top: 20px;
        width: 500px;
        height: 250px;
        border-radius: 20px;
      }
      .step2 {
        position: absolute;
        right: 20px;
        top: 0px;
      }
      .step3 {
        position: absolute;
        bottom: 20px;
      }
      .step4 {
        position: absolute;
        right: 20px;
        bottom: 20px;
      }
    </style>
</head>

<body>
     <nav>
      <img src="assets/logo.png" alt="" />
      <div>
        <div id="profileButton" class="absolute_position">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#e9763d" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
        </div>

      </div>
    </nav>
    <div class="center">
<h3>Welcome, <?php echo htmlspecialchars($username); ?>!</h3>
<h4>Check for you Drugs interaction Here👇🏾</h4>
    </div>
    <section>
      <div class="container">
      <iframe src="https://www.webmd.com/interaction-checker/default.htm" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
      </div>
    </section>
    <div id="profile" class="profile_info">
      <div id="cancel_button" class="cancel_button">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
</svg>
      </div>

<div class="align_items_center">
  <h1>My Profile</h1>
<h3>Username, <?php echo htmlspecialchars($username); ?>!</h3>
<p>Email: <?php echo htmlspecialchars($email); ?></p>
<p>Age: <?php echo htmlspecialchars($age); ?></p>
<p>Genotype: <?php echo htmlspecialchars($genotype); ?></p>
<p>Blood Type: <?php echo htmlspecialchars($bloodType); ?></p>
</div>
    </div>
    
    <!--<p>User ID: <?php echo htmlspecialchars($id); ?></p> -->  
    <!-- Add more content here -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="animate.js"></script>
</body>
</html>