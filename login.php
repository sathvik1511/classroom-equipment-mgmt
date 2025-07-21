<!DOCTYPE html>
<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check login credentials
  $conn = mysqli_connect("localhost", "root", "", "test");
  $query = "SELECT * FROM login_credentials WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    if ($username == 'admin') {
      header('Location: admin.php');
    } else {
      header('Location: faculty.php');
    }
  } else {
    echo "<h1>Incorrect credentials</h1>";
    echo "<a href='login.html'>Click here to go back to login page</a>";
  }
?>
</html>
