<?php
session_start();

// ตรวจสอบว่าได้ทำการเข้าสู่ระบบหรือไม่
if (!isset($_SESSION['email'])) {
    // ถ้ายังไม่ล็อกอิน ให้ redirect ไปยังหน้า login
    header("Location: index.php");
    exit();
}

// เชื่อมต่อกับฐานข้อมูล
$conn = new mysqli("db", "root", "123456", "students");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ดึงข้อมูลจากฐานข้อมูล
$email = $_SESSION['email']; // สมมติว่า email ถูกเก็บใน session
$query = "SELECT * FROM user WHERE email = '$email'";
$result = $conn->query($query);

// ตรวจสอบผลลัพธ์
if ($result === false) {
    die("Query failed: " . $conn->error); // แสดงข้อผิดพลาดจาก query
}

if ($result->num_rows > 0) {
    // ดึงข้อมูลผู้ใช้
    $row = $result->fetch_assoc();
    echo "รหัสนักศึกษา: " . $row['student_id'];
    // ทำการแสดงผลข้อมูลที่เหลือ
} else {
    echo "ไม่พบข้อมูลผู้ใช้";
}
$conn->close();
?>

<!-- HTML code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นักศึกษา & บุคลากร CE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <nav class="navbar1">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand">สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง วิทยาเขตชุมพรเขตรอุดมศักดิ์</a>
            <a class="navbar-brand ms-auto" href="index.php">ออกจากระบบ</a>
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- 3 ขีด Hamburger Menu (Dropdown) -->
            <div class="dropdown">
                <button class="btn btn-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span> <!-- 3 ขีด (Hamburger Icon) -->
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">นักศึกษา & บุคลากร CE</a></li>
                    <li><a class="dropdown-item" href="#">ศิษย์เก่า CE & ITE</a></li>
                    <li><a class="dropdown-item" href="#">ครุภัณฑ์การศึกษา CE</a></li>
                    <li><a class="dropdown-item" href="#">ฝึกงาน & สหกิจศึกษา</a></li>
                    <li><a class="dropdown-item" href="#">ข่าวสาร & กิจกรรมของหลักสูตร</a></li>
                    <li><a class="dropdown-item" href="#">หลักสูตร & แผนการเรียน CE</a></li>
                    <li><a class="dropdown-item" href="#">แต้มบุญ</a></li>
                </ul>
            </div>

            <!-- โลโก้ที่อยู่ข้างๆ Dropdown -->
            <a class="navbar-brand ms-3" href="home.php">
                <img src="assets/images/l.png" alt="Logo" style="width: 190px; height: auto;">
            </a>

            <!-- 3 ขีด Hamburger Menu สำหรับเมนูในขนาดเล็ก -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- เมนูที่มีอยู่ทางขวา -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">ข้อมูลส่วนตัว</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="announcement">
            <button class="announcement-header">ประกาศ</button>
            <div class="announcement-content">ไม่มีประกาศในขณะนี้</div>
        </div>

        <div class="info-card">
            <h2>ข้อมูลส่วนตัวนักศึกษา</h2>
            <form>

                <label for="studentId">รหัสนักศึกษา:</label>
                <input type="text" id="studentId" name="studentId" value="<?php echo $row['student_id']; ?>" disabled />

                <label for="prefix">คำนำหน้า:</label>
                <input type="text" id="prefix" name="prefix" value="<?php echo $row['title']; ?>" disabled />

                <label for="fullName">ชื่อ - สกุล:</label>
                <input type="text" id="fullName" name="fullName" value="<?php echo $row['full_name']; ?>" disabled />

                <label for="nickname">ชื่อเล่น:</label>
                <input type="text" id="nickname" name="nickname" value="<?php echo $row['nickname']; ?>" disabled />

                <label for="birthdate">วัน/เดือน/ปี:</label>
                <input type="date" id="birthdate" name="birthdate" value="<?php echo $row['birthdate']; ?>" disabled />

                <label for="sex">เพศ:</label>
                <input type="text" id="sex" name="sex" value="<?php echo $row['gender']; ?>" disabled />

                <label for="phone">เบอร์โทรศัพท์:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" disabled />

                <label for="address">ที่อยู่:</label>
                <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" disabled />

                <label for="e_phone">เบอร์ฉุกเฉิน:</label>
                <input type="text" id="e_phone" name="e_phone" value="<?php echo $row['e_phone']; ?>" disabled />

            </form>

        </div>

    </div>

    <script>
        let isEditing = false;

        function toggleEdit() {
            isEditing = !isEditing;
            const inputs = document.querySelectorAll('input, select, textarea');

            inputs.forEach(input => {
                input.disabled = !isEditing;
            });

            const button = document.querySelector('.edit-btn');
            button.textContent = isEditing ? 'บันทึก' : 'แก้ไขข้อมูล';
        }
    </script>


    <footer class="footer" style="background-color: #203864;">
        <div class="container p-4">
            <!-- First row for links -->
            <div class="row justify-content-center">
                <!-- First column: Quick Links -->
                <div class="col-md-5">
                    <h5 class="text-white" style="font-size: 1.5rem;">แนะนำ</h5> <!-- เพิ่มขนาดฟอนต์ -->
                    <ul class="list-unstyled">
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">นักศึกษา & บุคลากร CE</a></li>
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">ศิษย์เก่า CE & ITE</a></li>
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">ครุภัณฑ์การศึกษา CE</a></li>
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">ฝึกงาน & สหกิจศึกษา</a></li>
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">กิจกรรมหลักสูตร</a></li>
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">หลักสูตร & แผนการเรียน CE</a></li>
                        <li><a href="#!" class="text-custom" style="border-bottom: 2px solid white; display: inline-block; width: 80%; padding-bottom: 5px; font-size: 1.2rem;">แต้มบุญ</a></li>
                    </ul>
                </div>

                <!-- Second column: Contact Info -->
                <div class="col-md-5">
                    <h5 class="text-white" style="font-size: 1.5rem;">ติดต่อเรา</h5> <!-- เพิ่มขนาดฟอนต์ -->
                    <ul class="list-unstyled" style="font-size: 1.2rem;"> <!-- เพิ่มขนาดฟอนต์ของข้อความในรายการ -->
                        <li><i class="fas fa-map-marker-alt"></i> สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                        <li><i class="fas fa-map-marker-alt"></i>วิทยาเขตชุมพรเขตรอุดมศักดิ์ จังหวัดชุมพร</li>
                        <li><i class="fas fa-map-marker-alt"></i>17/1 หมู่6 ต.ชุมโค อ.ปะทิว จ.ชุมพร 86160</li>
                        <li class="phone" style="margin-top: 30px;">
                            <img src="assets/images/f.png" alt="Icon"
                                style="width: 34px; height: auto; margin-right: 10px;">
                            <i class="fas fa-phone"></i><a href="https://www.facebook.com/ComEngKMITLPCC">Computer Engineering KMITL, PCC</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>