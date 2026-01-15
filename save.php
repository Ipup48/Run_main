<?php
// save.php - บันทึกข้อมูลการสมัครลงฐานข้อมูล

session_start();
include 'db.php';

// ตรวจสอบว่ามีข้อมูลส่งมาหรือไม่
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

try {
    // เตรียมข้อมูล
    $disabled = isset($_POST['is_disabled']) && $_POST['is_disabled'] == '1' ? 1 : 0;
    
    // บันทึกข้อมูลผู้สมัคร
    $stmt = $conn->prepare("
        INSERT INTO runner 
        (first_name, last_name, date_of_birth, gender, phone, email, is_disabled, category_id, shirt_size, shipping_id, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
    ");

    $stmt->bind_param(
    "ssssssiisi",
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['date_of_birth'],
    $_POST['gender'],
    $_POST['phone'],
    $_POST['email'],
    $disabled,
    $_POST['category_id'],
    $_POST['shirt_size'],
    $_POST['shipping_id']
);

    if ($stmt->execute()) {
        // บันทึกสำเร็จ - ตั้งค่า session และไปหน้า success
        $_SESSION['registration_success'] = true;
        $_SESSION['runner_id'] = $conn->insert_id;
        header("Location: success.php");
        exit;
    } else {
    throw new Exception($stmt->error);
}

    
} catch (Exception $e) {
    echo "<h3>Database Error</h3>";
    echo "<pre>";
    echo $e->getMessage();
    echo "</pre>";
    exit;
}

