<table border="1">
    <tr>
        <th>ชื่อผู้ส่ง</th>
        <th>นามสกุลผู้ส่ง</th>
        <th>เบอร์โทรผู้ส่ง</th>
        <th>รายละเอียดสินค้า</th>
        <th>วันที่ส่ง</th>
        <th>ชื่อผู้รับ</th>
        <th>นามสกุลผู้รับ</th>
        <th>เบอร์โทรผู้รับ</th>
        <th>จังหวัด</th>
        <th>อำเภอ</th>
        <th>ตำบล</th>
        <th>บ้านเลขที่</th>
        <th>รหัสไปรษณีย์</th>
        <th>รายละเอียดที่อยู่</th>
        <th>วันที่สั่ง</th>
        <th>ลบข้อมูล</th>
        <th>แก้ไขข้อมูล</th>
    </tr>
    <?php
    include('config.php');  // ตรวจสอบให้แน่ใจว่า config.php ใช้การเชื่อมต่อกับ PDO

    $sql = "SELECT * FROM `data_1`";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);  // ใช้ fetchAll() กับ PDO

    if (count($result) > 0) {  // ตรวจสอบจำนวนแถว
        foreach ($result as $res) {
            echo "<tr>";
            echo "<td>{$res->ชื่อผู้ส่ง}</td>";
            echo "<td>{$res->นามสกุลผู้ส่ง}</td>";
            echo "<td>{$res->เบอร์โทรผู้ส่ง}</td>";
            echo "<td>{$res->รายระเอียดสินค้า}</td>";
            echo "<td>{$res->วันที่ส่ง}</td>";
            echo "<td>{$res->ชื่อผู้รับ}</td>";
            echo "<td>{$res->นามสกุลผู้รับ}</td>";
            echo "<td>{$res->เบอร์โทรผู้รับ}</td>";
            echo "<td>{$res->จังหวัด}</td>";
            echo "<td>{$res->อำเภอ}</td>";
            echo "<td>{$res->ตำบล}</td>";
            echo "<td>{$res->บ้านเลขที่}</td>";
            echo "<td>{$res->รหัสไปรษณีย์}</td>";
            echo "<td>{$res->รายระเอียดที่อยู่}</td>";
            echo "<td>{$res->วันที่สั่ง}</td>";
            echo "<td><a href='delete.php?id={$res->ID}'>ลบข้อมูล</a></td>";
            echo "<td><a href='set.php?id={$res->ID}'>แก้ไขข้อมูล</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='17'>ไม่พบข้อมูล</td></tr>";
    }
    ?>
</table>