<?php
$conn = mysqli_connect('localhost', 'root', '', 'xat');
if (mysqli_connect_errno()) {
echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>