<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // ดึงข้อมูลจากฐานข้อมูลตาม ID
        $sql = "SELECT * FROM `data_1` WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        // ตรวจสอบว่า ID นี้มีข้อมูลหรือไม่
        $data = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$data) {
            echo "ไม่พบข้อมูลที่ต้องการแก้ไข";
            exit;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit;
    } // ต้องตรวจสอบว่าใส่ปิด { ของ try-catch หรือยัง
} else {
    echo "ไม่มี ID ให้แก้ไข";
    exit;
}

?>

<!-- ฟอร์มสำหรับการแก้ไขข้อมูล -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 60%;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    h3 {
        text-align: center;
        color: #333;
    }
    label {
        font-weight: bold;
        display: block;
        margin: 10px 0 5px;
    }
    input[type="text"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        border-radius: 4px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="container">
    <form action="up.php" method="get">
        <h3>แก้ไขข้อมูล</h3>
        
        <input type="hidden" name="id" value="<?php echo $data->ID; ?>" /> <!-- ซ่อน ID สำหรับการอัพเดท -->

        <label>ชื่อผู้ส่ง:</label>
        <input type="text" name="Firstsong" value="<?php echo htmlspecialchars($data->ชื่อผู้ส่ง); ?>" required><br>

        <label>นามสกุลผู้ส่ง:</label>
        <input type="text" name="Lastsong" value="<?php echo htmlspecialchars($data->นามสกุลผู้ส่ง); ?>" required><br>

        <label>เบอร์โทรผู้ส่ง:</label>
        <input type="text" name="numbersong" value="<?php echo htmlspecialchars($data->เบอร์โทรผู้ส่ง); ?>" required><br>

        <label>รายละเอียดสินค้า:</label>
        <textarea name="linesong" required><?php echo htmlspecialchars($data->รายระเอียดสินค้า); ?></textarea><br>

        <label>วันที่ส่ง:</label>
        <input type="date" name="vansong" value="<?php echo $data->วันที่ส่ง; ?>" required><br>

        <label>ชื่อผู้รับ:</label>
        <input type="text" name="Firstrub" value="<?php echo htmlspecialchars($data->ชื่อผู้รับ); ?>" required><br>

        <label>นามสกุลผู้รับ:</label>
        <input type="text" name="Lastrub" value="<?php echo htmlspecialchars($data->นามสกุลผู้รับ); ?>" required><br>

        <label>เบอร์โทรผู้รับ:</label>
        <input type="text" name="numberrub" value="<?php echo htmlspecialchars($data->เบอร์โทรผู้รับ); ?>" required><br>

        <label for="province" class="form-label">จังหวัด</label>
        <select id="province" name="jungwat" required onchange="updateDistricts()">
            <option selected disabled value="">เลือกจังหวัด</option>
            <option value="bangkok">กรุงเทพมหานคร</option>
                <option value="pathumtanee">ปทุมธานี</option>
                <option value="chonburi">ชลบุรี</option>
                <option value="chiangmai">เชียงใหม่</option>
                <option value="nakornpathom">นครปฐม</option>
        </select>

        <label for="district" class="form-label">อำเภอ/เขต</label>
        <select id="district" name="Aum" required onchange="updateSubdistricts()">
            <option selected disabled>เลือกอำเภอ/เขต</option>
        </select>

        <label for="subdistrict" class="form-label">ตำบล</label>
        <select id="subdistrict" name="Tam" required>
            <option selected disabled>เลือกตำบล</option>
        </select>

        <label>บ้านเลขที่:</label>
        <input type="text" name="ban" value="<?php echo htmlspecialchars($data->บ้านเลขที่); ?>" required><br>

        <label>รหัสไปรษณีย์:</label>
        <input type="text" name="pai" value="<?php echo htmlspecialchars($data->รหัสไปรษณีย์); ?>" required><br>

        <label>รายละเอียดของที่อยู่:</label>
        <textarea name="linerub" required><?php echo htmlspecialchars($data->รายระเอียดที่อยู่); ?></textarea><br>

        <label>วันที่สั่งสินค้า:</label>
        <input type="date" name="vanrub" value="<?php echo $data->วันที่สั่ง; ?>" required><br>

        <input type="submit" value="อัพเดทข้อมูล">
    </form>
</div>

<?php include 'jungwat.php';?>