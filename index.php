<?php
// index.php - หน้าแรกของระบบสมัครวิ่ง
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>CBM 2025 | ระบบสมัครวิ่ง</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f0f2f5;
        }

        .wrapper {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 500px;
            background: #ffffff;
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .card h1 {
            margin: 0;
            color: #222;
        }

        .card h2 {
            margin: 10px 0 20px;
            font-weight: normal;
            color: #555;
        }

        .card p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 35px;
            background: #d32f2f;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #b71c1c;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #999;
        }
    </style>

</head>

<body>

    <div class="wrapper">
        <div class="card">
            <h1>Chombueng Marathon 2025</h1>
            <h2>ระบบสมัครการแข่งขันวิ่ง</h2>

            <p>
                สมัครเข้าร่วมการแข่งขันวิ่งอย่างเป็นทางการ
                ข้อมูลจะถูกบันทึกลงในระบบเพื่อใช้ในการจัดการแข่งขัน
            </p>

            <!-- ลิงก์ไปหน้าสมัคร -->
            <a href="register.php" class="btn">สมัครเข้าร่วมการแข่งขัน</a>

            <div class="footer">
                © <?php echo date('Y'); ?> Chombueng Marathon
            </div>
        </div>
    </div>

</body>

</html>