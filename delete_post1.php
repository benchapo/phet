<?php
include('config.php');  // ตรวจสอบให้แน่ใจว่า config.php ยังจะใช้การเชื่อมต่อกับ PDO อยู่

// รับค่า id จาก URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // SQL query สำหรับการลบข้อมูลตาม ID
        $sql = "DELETE FROM `data_1` WHERE ID = :id";
        
        // เตรียมคำสั่ง SQL
        $stmt = $conn->prepare($sql);
        
        // ผูกค่าพารามิเตอร์
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        // ทำการ execute คำสั่ง SQL
        $stmt->execute();
        
        // ตรวจสอบว่ามีแถวที่ถูกลบหรือไม่
        if ($stmt->rowCount() > 0) {
            echo "<script>alert('ลบข้อมูลเรียบร้อยแล้ว'); window.location.href = 'select.php';</script>";
        } else {
            echo "<script>alert('ไม่พบข้อมูลที่ต้องการลบ'); window.location.href = 'select.php';</script>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "<script>alert('ไม่มี ID ให้ทำการลบ'); window.location.href = 'select.php';</script>";
}
?>