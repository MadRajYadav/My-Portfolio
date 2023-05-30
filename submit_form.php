<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];
    
    
    // Fetch projects from the database
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "myportfolio";

    $conn = mysqli_connect($host_name,$user_name,$password,$database_name);
    if(!$conn){
        echo "<script>alert('connection error')</script>";
    }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO contect (name, email, number , massage) VALUES ('$name', '$email', '$number', '$message' )";
    
    if ($conn->query($sql) === TRUE) {
        alert ("Form submitted successfully!");
    } else {
        alert("Error: " . $sql . "<br>" . $conn->error);
    }
    
    $conn->close();
}
?>
