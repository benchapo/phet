<?php
$Firstsong = $_GET['Firstsong'];
$Lastsong = $_GET['Lastsong'];
$numbersong = $_GET['numbersong'];
$linesong = $_GET['linesong'];
$vansong = $_GET['vansong'];
$Firstrub = $_GET['Firstrub'];
$Lastrub = $_GET['Lastrub'];
$numberrub = $_GET['numberrub'];
$jungwat = $_GET['jungwat'];
$Aum = $_GET['Aum'];
$Tam = $_GET['Tam'];
$ban = $_GET['ban'];
$pai = $_GET['pai'];
$linerub = $_GET['linerub'];
$vanrub = $_GET['vanrub'];

include('config.php');
    //ใส่ข้อมูลไหม่
    $sql = "INSERT INTO `data_1`(`ชื่อผู้ส่ง`, `นามสกุลผู้ส่ง`, `เบอร์โทรผู้ส่ง`, `รายระเอียดสินค้า`, `วันที่ส่ง`, `ชื่อผู้รับ`, `นามสกุลผู้รับ`, `เบอร์โทรผู้รับ`, `จังหวัด`, `อำเภอ`, `ตำบล`, `บ้านเลขที่`, `รหัสไปรษณีย์`, `รายระเอียดที่อยู่`, `วันที่สั่ง`) 
                         VALUES ('$Firstsong','$Lastsong','$numbersong','$linesong','$vansong','$Firstrub','$Lastrub','$numberrub','$jungwat','$Aum','$Tam','$ban','$pai','$linerub','$vanrub')";
    $query = $conn->prepare($sql);
    $result = $query->execute();
    if ($result) {
        echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');
        location.href = 'form3.php';
        </script>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด');
        location.href = 'form3.php';
        </script>";
    }
?>