<?php
 include('config.php');
 $id = $_GET['id'];
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

 $sql = "UPDATE `data_1` SET `ชื่อของผู้ส่ง`='$Firstsong',`นามสกุลของผู้ส่ง`='$Lastsong',`เบอร์โทรศัพท์ของผู้ส่ง`='$numbersong',`รายระเอียดของสินค้า`='$linesong',
 `วันที่ทำการจัดส่งสินค้า`='$vansong',`ชื่อของผู้รับ`='$Firstrub',`นามสกุลของผู้รับ`='$Lastrub',`เบอร์โทรศัพท์ของผู้รับ`='$numberrub',
 `จังหวัด`='$jungwat',`อำเภอ`='$Aum',`ตำบล`='$Tam',`บ้านเลขที่`='$ban',`รหัสไปรษณีย์`='$pai',`รายระเอียดของที่อยู่`='$linerub',`วันที่ทำการจัดสั่ง`='$vanrub' 
 WHERE ID='$id'";
$query = $conn->prepare($sql);

$query->execute();
if ($query->rowCount() > 0) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');location.href = 'select.php';</script>";
} else {
    echo "<script>alert('มีข้อมูลผิดพลาดไปบางอย่างครับ โปรดทำการแก้ไข'); location.href = 'select.php'; </script>";
} 
?>