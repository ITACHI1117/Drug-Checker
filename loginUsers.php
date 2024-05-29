<?php
// Start session
session_start();



// Connect to your MySQL database
$mysqli = new mysqli("localhost", "root", "", "drug_checker");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);    
}

// Retrieve user input
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement to retrieve hashed password
$stmt = $mysqli->prepare("SELECT id, email, username, password, age, genotype, bloodType FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

// Execute the statement
$stmt->execute();

// Bind the result
$stmt->bind_result($id, $email, $username, $hashed_password, $age, $genotype, $bloodType);

// Fetch the result
$stmt->fetch();

// Verify the password
if (password_verify($password, $hashed_password)) {
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $id;
    $_SESSION["email"] = $email;
    $_SESSION["username"] = $username;
    $_SESSION["age"] = $age;
    $_SESSION["genotype"] = $genotype;
    $_SESSION["bloodType"] = $bloodType;

    // Redirect user to home page
    header("location: Home.php");
} else {
    // Redirect user back to login page with error message
    header("location: Login.html?error=1");
    // echo "<p>wrong details</p>";
}

// Close the statement and connection
$stmt->close();
$mysqli->close();
?>

