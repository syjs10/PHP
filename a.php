 <?php
$servername = "localhost";
$username = "root";
$password = "asdfghjkl;'";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("no: " . $conn->connect_error);
}
echo "ok";
?> 
