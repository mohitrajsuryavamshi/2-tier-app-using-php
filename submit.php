<?php
$servername = "localhost";
$username = "root"; // Change if using a different MySQL user
$password = "mohit@123"; // Change if you have set a MySQL password
$database = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$phone = $_POST['phone'];

// Prepare SQL query
$sql = "INSERT INTO employees (emp_id, emp_name, phone) VALUES ('$emp_id', '$emp_name', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
