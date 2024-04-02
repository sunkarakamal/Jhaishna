<?php
$servername = "localhost";
$db_username = "root";
$db_password = "JT@123";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Query to check user data.
    $sql = "SELECT * FROM project";
    $result = $conn->query($sql);

    // Check if there are any rows returned by the query
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<h2>Data from Database</h2>";
        echo "<table style='border-collapse: collapse; width: 100%;'>";
        echo "<tr><th style='border: 1px solid #ddd; padding: 8px;'>Name</th><th style='border: 1px solid #ddd; padding: 8px;'>Email</th><th style='border: 1px solid #ddd; padding: 8px;'>Phone</th><th style='border: 1px solid #ddd; padding: 8px;'>Message</th><th style='border: 1px solid #ddd; padding: 8px;'>Requirement</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["name"]."</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["email"]."</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["phone"]."</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["message"]."</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>".$row["requirement"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data found";
    }
}

// Close database connection
$conn->close();
?>