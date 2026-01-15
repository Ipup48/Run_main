<?php
// confirm.php - หน้ายืนยันข้อมูลการสมัคร

// ตรวจสอบว่ามีข้อมูลส่งมาหรือไม่
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

// รับข้อมูลจากฟอร์ม
$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$date_of_birth = $_POST['date_of_birth'] ?? '';
$gender = $_POST['gender'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$is_disabled = isset($_POST['is_disabled']) ? 'ใช่' : 'ไม่';
$category_id = $_POST['category_id'] ?? '';
$shirt_size = $_POST['shirt_size'] ?? '';
$shipping_id = $_POST['shipping_id'] ?? '';

// แปลงข้อมูลให้เป็นภาษาไทย
$gender_th = ($gender == 'Male') ? 'ชาย' : 'หญิง';
$shipping_th = ($shipping_id == 'EMS') ? 'EMS' : 'รับที่งาน';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ยืนยันข้อมูล</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        .box {
            width: 550px;
            margin: 80px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        p {
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 150px;
        }
        
        .value {
            color: #333;
        }
        
        .button-group {
            margin-top: 30px;
            text-align: center;
        }
        
        button, .btn {
            padding: 12px 25px;
            margin: 0 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        
        .btn-confirm {
            background: #4CAF50;
            color: white;
        }
        
        .btn-back {
            background: #f44336;
            color: white;
        }
        
        .btn-confirm:hover {
            background: #45a049;
        }
        
        .btn-back:hover {
            background: #da190b;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>ยืนยันข้อมูลการสมัคร</h2>

    <p><span class="label">ชื่อ:</span> <span class="value"><?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></span></p>
    <p><span class="label">วันเกิด:</span> <span class="value"><?php echo htmlspecialchars($date_of_birth); ?></span></p>
    <p><span class="label">เพศ:</span> <span class="value"><?php echo htmlspecialchars($gender_th); ?></span></p>
    <p><span class="label">โทร:</span> <span class="value"><?php echo htmlspecialchars($phone); ?></span></p>
    <p><span class="label">Email:</span> <span class="value"><?php echo htmlspecialchars($email); ?></span></p>
    <p><span class="label">ผู้พิการ:</span> <span class="value"><?php echo htmlspecialchars($is_disabled); ?></span></p>
    <p><span class="label">ประเภทการแข่งขัน:</span> <span class="value"><?php echo htmlspecialchars($category_id); ?></span></p>
    <p><span class="label">ไซส์เสื้อ:</span> <span class="value"><?php echo htmlspecialchars($shirt_size); ?></span></p>
    <p><span class="label">การรับ Race Pack:</span> <span class="value"><?php echo htmlspecialchars($shipping_th); ?></span></p>

    <div class="button-group">
        <form action="save.php" method="POST" style="display: inline;">
            <!-- ส่งข้อมูลทั้งหมดไปยัง save.php -->
            <input type="hidden" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>">
            <input type="hidden" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
            <input type="hidden" name="date_of_birth" value="<?php echo htmlspecialchars($date_of_birth); ?>">
            <input type="hidden" name="gender" value="<?php echo htmlspecialchars($gender); ?>">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="is_disabled" value="<?php echo isset($_POST['is_disabled']) ? '1' : '0'; ?>">
            <input type="hidden" name="category_id" value="<?php echo htmlspecialchars($category_id); ?>">
            <input type="hidden" name="shirt_size" value="<?php echo htmlspecialchars($shirt_size); ?>">
            <input type="hidden" name="shipping_id" value="<?php echo htmlspecialchars($shipping_id); ?>">
            
            <button type="submit" class="btn btn-confirm">ยืนยันการสมัคร</button>
        </form>
        
        <a href="register.php" class="btn btn-back">กลับไปแก้ไข</a>
    </div>
</div>

</body>
</html>