<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <?php
  session_start();
  if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      echo "<h1>Welcome, $username</h1>";
  } else {
      // Redirect to login if session is not set
      header('Location: login.html');
      exit();
  }
  ?>
    <form action="submit_complaint.php" method="post">
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
      </div>
      <div class="form-group">
        <label for="classroom_number">Classroom Number:</label>
        <input type="number" id="classroom_number" name="classroom_number" required>
        <input type="submit" value="Submit">
      </div>
    </form>
    <div class="logout">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>
</html>
