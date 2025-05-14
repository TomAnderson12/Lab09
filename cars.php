<?php
    require_once 'settings.php'; // Include the settings file for database connection
    $dbconn = mysqli_connect($host, $user, $pwd, $sql_db); // Establish a connection to the database
    if (!$dbconn) {
        die("Database connection failed: " . mysqli_connect_error()); // Handle connection error
    }
       
    $query = "SELECT * FROM cars"; // SQL query to select all records from the cars table
    $result = mysqli_query($dbconn, $query); // Execute the query
    
    mysqli_close($dbconn); // Close the database connection


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }
      
?>