<?php
session_start();

// ล้างข้อมูลทั้งหมดใน session
session_unset();

// ลบ session
session_destroy();

// เปลี่ยนเส้นทางไปที่หน้าเข้าสู่ระบบ
header("Location: index.php");
exit();
?>
