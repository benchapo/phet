<?php
// ตัวแปรสำหรับการเชื่อมต่อ
$servername = "localhost";
$username = "root";
$password = "";  // ตั้งรหัสผ่านฐานข้อมูล
$dbname = "data_paisanethai";  // ชื่อฐานข้อมูล

try {
    // สร้างการเชื่อมต่อ PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // ตั้งค่าการแจ้งเตือนข้อผิดพลาดให้เป็น exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // หากการเชื่อมต่อล้มเหลว
    echo "Connection failed: " . $e->getMessage();
}

?>