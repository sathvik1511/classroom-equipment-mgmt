<?php
session_start();

$description = $_POST['description'];
$classroom_number = $_POST['classroom_number'];

// Insert complaint into database
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
  }
$query = "INSERT INTO complaints (description, classroom_number, username) VALUES ('$description', '$classroom_number', '$username')";

if (mysqli_query($conn, $query)) {
    // Redirect to success page after successful insertion
    header('Location: success.html');
    exit;
} else {
    // Handle error
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
