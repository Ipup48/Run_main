<?php
// register.php - หน้าฟอร์มสมัครสมาชิก
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัครเข้าร่วมการแข่งขัน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="checkbox"] {
            width: auto;
            margin-right: 8px;
        }
        
        button {
            background: #d32f2f;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        
        button:hover {
            background: #b71c1c;
        }
        
        .checkbox-label {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>สมัครเข้าร่วมการแข่งขัน</h2>
    
    <form action="confirm.php" method="POST">

        <label>ชื่อ</label>
        <input type="text" name="first_name" required>

        <label>นามสกุล</label>
        <input type="text" name="last_name" required>

        <label>วันเกิด</label>
        <input type="date" name="date_of_birth" required>

        <label>เพศ</label>
        <select name="gender" required>
            <option value="">เลือกเพศ</option>
            <option value="Male">ชาย</option>
            <option value="Female">หญิง</option>
        </select>

        <label>เบอร์โทร</label>
        <input type="text" name="phone" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <div class="checkbox-label">
            <input type="checkbox" name="is_disabled" value="1">
            <label>ผู้พิการ</label>
        </div>

        <label>ประเภทการแข่งขัน</label>
        <select name="category_id" required>
            <option value="">เลือกประเภทการแข่งขัน</option>
            <option value="Marathon">Marathon</option>
            <option value="Half">Half Marathon</option>
            <option value="Mini">Mini Marathon</option>
        </select>

        <label>ไซส์เสื้อ</label>
        <select name="shirt_size" required>
            <option value="">เลือกไซส์เสื้อ</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>

        <label>การรับ Race Pack</label>
        <select name="shipping_id" required>
            <option value="">เลือกวิธีรับ Race Pack</option>
            <option value="EMS">EMS</option>
            <option value="Pickup">รับที่งาน</option>
        </select>

        <button type="submit">ถัดไป</button>
    </form>
</div>

</body>
</html>