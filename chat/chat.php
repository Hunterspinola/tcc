<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = 3307;
$dbname = "chat";

$conn = new mysqli($servername, $username, $password, $port,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (user, message) VALUES ('$user', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "New message created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT user, message, timestamp FROM messages ORDER BY timestamp DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<strong>" . $row["user"] . ":</strong> " . $row["message"] . "<br><small>" . $row["timestamp"] . "</small><br><br>";
        }
    } else {
        echo "No messages yet.";
    }
}
$conn->close();
?>