<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Store the plain password

    // Replace with your database connection code
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sampledb";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_register = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
    $sql_users = "INSERT INTO users (username, userpass) VALUES ('$username', '$password')";

    if ($conn->query($sql_register) === TRUE) {
        // Registration in "register" table successful
        // Now, insert into the "users" table
        if ($conn->query($sql_users) === TRUE) {
            // Insertion into "users" table successful
            header("Location: registration_success.php");
            exit();
        } else {
            echo "Error inserting into users table: " . $conn->error; // Display error message for "users" table insertion
        }
    } else {
        echo "Error inserting into register table: " . $conn->error; // Display error message for "register" table insertion
    }

    $conn->close();
}
?>
