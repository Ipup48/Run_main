<?php
// success.php - หน้าแสดงผลสำเร็จ

// ตรวจสอบว่ามาจากการบันทึกข้อมูลหรือไม่
session_start();
if (!isset($_SESSION['registration_success'])) {
    header('Location: index.php');
    exit;
}

// ล้าง session หลังจากแสดงผลแล้ว
unset($_SESSION['registration_success']);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัครสำเร็จ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            max-width: 500px;
            margin: 100px auto;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #4CAF50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        
        p {
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #d32f2f;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            transition: 0.3s;
        }
        
        .btn:hover {
            background: #b71c1c;
        }
        
        .success-icon {
            font-size: 4em;
            color: #4CAF50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="success-icon">🎉</div>
    <h1>สมัครสำเร็จ!</h1>
    <p>ระบบได้รับข้อมูลการสมัครแล้ว<br>
    ขอบคุณที่เข้าร่วมการแข่งขัน Chombueng Marathon 2025</p>

    <a href="index.php" class="btn">กลับหน้าแรก</a>
</div>

</body>
</html>