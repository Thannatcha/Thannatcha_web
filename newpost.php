<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpost</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard Thannatcha</h1>
    <hr>
    <form>
        <table>
            ผู้ใช้: <?php echo $_SESSION['username'] ?>
            <tr>
                <td>
                หมวดหมู่:
                </td>
                <td>
                    <select name="category">
                        <option value="All">--ทั้งหมด--</option>
                        <option value="General">เรื่องทั่วไป</option>
                        <option value="Study">เรื่องเรียน</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>หัวข้อ: </td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>เนื้อหา: </td>
                <td>
                    <form> <textarea name="message" rows="3" cols="23"></textarea></form>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" value="บันทึกข้อความ"> </td>
            </tr>
        </table>
    </form>

<a href="index.php">กลับไปหน้าหลัก</></a>
</body>

</html>