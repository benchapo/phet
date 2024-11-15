<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จ่าหน้าซอง</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .envelope {
            position: relative;
            width: 800px;
            height: 400px;
            border: 3px solid #000;
            padding: 20px;
        }

        .sender, .recipient {
            position: absolute;
        }

        .sender {
            top: 20px;
            left: 50px;
        }

        .recipient {
            top: 100px;
            right: 20px;
        }

        .sender table, .recipient table {
            border-collapse: collapse;
        }

        th, td {
            padding: 5px 10px;
            text-align: left;
        }

        th {
            width: 200px;
        }

        .space {
            width: 150px;
        }

        .col-span {
            text-align: center;
        }
        .satam {
            position: absolute;
        }
        .satam{
            top: 350px;
        }
        .satamtable {
            border-collapse: collapse;
        }
        .pasatam {
             width: 50px;
             height: 50px;
        }
    </style>
</head>
<body>

<div class="envelope">
    <!-- ผู้ส่ง -->
    <div class="sender">
        <table border="1">
            <tr>
                <th colspan="3" class="col-span">ผู้ส่ง</th>
            </tr>
            <tr>
                <td>ชื่อ</td>
                <td><?php echo $_GET["Firstsong"]; ?></td>
                <td><?php echo $_GET["Lastsong"]; ?></td>
            </tr>
            <tr>
                <td>เบอร์โทรติดต่อ</td>
                <td colspan="2"><?php echo $_GET["numbersong"]; ?></td>
            </tr>
            <tr>
                <td>รายละเอียดของสินค้า</td>
                <td colspan="2"><?php echo $_GET["linesong"]; ?></td>
            </tr>
            <tr>
                <td>วันที่จัดส่ง</td>
                <td colspan="2"><?php echo $_GET["vansong"]; ?></td>
            </tr>
        </table>
    </div>

    <!-- ผู้รับ -->
    <div class="recipient">
        <table border="1">
            <tr>
                <th colspan="3" class="col-span">ผู้รับ</th>
            </tr>
            <tr>
                <td>ชื่อ</td>
                <td><?php echo $_GET["Firstrub"]; ?></td>
                <td><?php echo $_GET["Lastrub"]; ?></td>
            </tr>
            <tr>
                <td>เบอร์โทรติดต่อ</td>
                <td colspan="2"><?php echo $_GET["numberrub"]; ?></td>
            </tr>
            <tr>
                <td>จังหวัด</td>
                <td colspan="2"><?php echo $_GET["jungwat"]; ?></td>
            </tr>
            <tr>
                <td>อำเภอ/เขต</td>
                <td colspan="2"><?php echo $_GET["Aum"]; ?></td>
            </tr>
            <tr>
                <td>ตำบล</td>
                <td colspan="2"><?php echo $_GET["Tam"]; ?></td>
            </tr>
            <tr>
                <td>บ้านเลขที่</td>
                <td colspan="2"><?php echo $_GET["ban"]; ?></td>
            </tr>
            <tr>
                <td>รหัสไปรษณีย์</td>
                <td colspan="2"><?php echo $_GET["pai"]; ?></td>
            </tr>
            <tr>
                <td>รายระเอียดของที่อยู่</td>
                <td colspan="2"><?php echo $_GET["linerub"]; ?></td>
            </tr>
            <tr>
                <td>วันที่สั่งสินค้า</td>
                <td colspan="2"><?php echo $_GET["vanrub"]; ?></td>
            </tr>
        </table>
    </div>
    <div class="satam">
      <table border="2" class="satamtable">
      <tr>
        <td class="pasatam"></td>
        <td class="pasatam"></td>
        <td class="pasatam"></td>
        <td class="pasatam"></td>
        <td class="pasatam"></td>
      </tr>
      </table>
    </div>
</div>

</body>
</html>