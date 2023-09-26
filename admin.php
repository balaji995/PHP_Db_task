<?php
// Include your database connection code here

// Query the database to retrieve registration date and time
$query = "SELECT name, email, registration_time FROM registration_data";
// Execute the query and fetch results
// Example: $result = $pdo->query($query);

// Display registration data
echo "<h2>Registered Users</h2>";
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Registration Time</th></tr>";
// Loop through the results and display data
// Example: foreach ($result as $row) {
//     echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['registration_time']}</td></tr>";
// }
echo "</table>";
?>
