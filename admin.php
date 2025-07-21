<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

/* Style the table */
table {
  width: 80%;
  margin: 20px auto;
  border-collapse: collapse;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  background-color: #ffffff;
}

/* Style table header */
table th {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  text-align: left;
}

/* Style table cells */
table td {
  padding: 8px 15px;
}

/* Alternate row colors */
table tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Hover effect on rows */
table tr:hover {
  background-color: #e0e0e0;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
  table {
    width: 100%;
  }
}

a.logout-link {
  display: block;
  width: 120px;
  margin: 20px auto;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  color: #ffffff;
  background-color: #4CAF50;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

a.logout-link:hover {
  background-color: #45a049;
}

 </style>
</head>
<body>

<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "test");

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch complaints from the database
$query = "SELECT description, classroom_number, username FROM complaints";
$result = mysqli_query($conn, $query);

echo "<table>
<tr>
<th>Description</th>
<th>Classroom Number</th>
<th>Username</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . htmlspecialchars($row['description']) . "</td>";
  echo "<td>" . htmlspecialchars($row['classroom_number']) . "</td>";
  echo "<td>" . htmlspecialchars($row['username']) . "</td>";
  echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
<br><br>
<a href="login.html" class="logout-link">Logout</html>
</body>
</html>
