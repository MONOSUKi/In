<?php
session_start();

// เชื่อมต่อกับฐานข้อมูล
$conn = new mysqli("db", "root", "123456", "students");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// ป้องกัน SQL Injection
$email = $conn->real_escape_string($email);

// ตรวจสอบข้อมูลในฐานข้อมูล
$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $conn->query($sql);

// ตรวจสอบว่า query สำเร็จหรือไม่
if ($result === false) {
    // ถ้า query ล้มเหลว ให้แสดงข้อผิดพลาดจาก MySQL
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    // พบข้อมูลผู้ใช้
    $row = $result->fetch_assoc();
    // ตรวจสอบรหัสผ่านที่กรอกกับรหัสผ่านที่ถูกแฮชไว้ในฐานข้อมูล
    if (password_verify($password, $row['password'])) {
        // รหัสผ่านถูกต้อง
        $_SESSION['email'] = $email;
        header("Location: home.php");
        exit();
    } else {
        // รหัสผ่านไม่ถูกต้อง
        $_SESSION['error'] = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";  // เก็บข้อความผิดพลาด
        header("Location: index.php");
        exit();
    }
} else {
    // ไม่พบข้อมูลผู้ใช้
    $_SESSION['error'] = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";  // เก็บข้อความผิดพลาด
    header("Location: index.php");
    exit();
}

$conn->close();
?>
