<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นักศึกษา & บุคลากร CE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="student.css">
</head>

<body>
<nav class="navbar1 navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง วิทยาเขตชุมพรเขตรอุดมศักดิ์</a>
            <div class="d-flex ms-auto">
                <a class="navbar-brand" href="index.php">ออกจากระบบ</a>
            </div>
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

    <div class="header-container">
        <span class="badge text-bg-primary header-content">
            <img src="assets/images/ce1.png" alt="Logo" class="logo">
            <h1 class="title">นักศึกษา CE</h1>
        </span>
        <button type="button" class="btn rounded-pill btn-light" onclick="window.location.href='home.php'">ย้อนกลับ</button>
    </div>

    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <div class="button-container">
                    <button type="button" class="btn1 rounded-pill btn-light" onclick="window.location.href='student1.php'">1</button>
                    <p>นักศึกษาชั้นปีที่ 1</p>
                </div>
            </div>
            <div class="col">
                <div class="button-container">
                    <button type="button" class="btn1 rounded-pill btn-light" onclick="window.location.href='student2.php'">2</button>
                    <p>นักศึกษาชั้นปีที่ 2</p>
                </div>
            </div>
            <div class="col">
                <div class="button-container">
                    <button type="button" class="btn1 rounded-pill btn-light" onclick="window.location.href='student3.php'">3</button>
                    <p>นักศึกษาชั้นปีที่ 3</p>
                </div>
            </div>
            <div class="col">
                <div class="button-container">
                    <button type="button" class="btn1 rounded-pill btn-light" onclick="window.location.href='student4.php'">4</button>
                    <p>นักศึกษาชั้นปีที่ 4</p>
                </div>
            </div>
        </div>
    </div>

    <div class="excel-container">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="button-container">
                        <a href="https://docs.google.com/spreadsheets/d/1nbbLxoq5Pp_ko5333pWofbNLt7jF5Olf/edit?usp=sharing&ouid=118158580503866060132&rtpof=true&sd=true" download>
                            <img src="assets/images/excel.png" alt="Logo" class="logo">
                        </a>
                        <p>ไฟล์ Excel รายชื่อนักศึกษาชั้นปีที่ 1</p>
                    </div>
                </div>
                <div class="col">
                    <div class="button-container">
                        <a href="https://docs.google.com/spreadsheets/d/1KUx4QOMh_cmpeJIASF_he4Muya32XoD6/edit?usp=sharing&ouid=118158580503866060132&rtpof=true&sd=true" download>
                            <img src="assets/images/excel.png" alt="Logo" class="logo">
                        </a>
                        <p>ไฟล์ Excel รายชื่อนักศึกษาชั้นปีที่ 2</p>
                    </div>
                </div>
                <div class="col">
                    <div class="button-container">
                        <a href="https://docs.google.com/spreadsheets/d/1eLiDsyzjsekUgrctE0KQ3_Mu5C9zuVrs/edit?usp=sharing&ouid=118158580503866060132&rtpof=true&sd=true" download>
                            <img src="assets/images/excel.png" alt="Logo" class="logo">
                        </a>
                        <p>ไฟล์ Excel รายชื่อนักศึกษาชั้นปีที่ 3</p>
                    </div>
                </div>
                <div class="col">
                    <div class="button-container">
                        <a href="https://docs.google.com/spreadsheets/d/1cHsYZFupMN47kerEKZGqgS1nYcKSXTf7/edit?usp=sharing&ouid=118158580503866060132&rtpof=true&sd=true" download>
                            <img src="assets/images/excel.png" alt="Logo" class="logo">
                        </a>
                        <p>ไฟล์ Excel รายชื่อนักศึกษาชั้นปีที่ 4</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-container">
            <div class="welcome-box">
                <h2 class="welcome-title">ชั้นปีที่ 4</h2>
            </div>
        </div>

        <div class="container text-center">
            <div class="row gy-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">64200xxx</h5>
                            <h5 class="card-text">นาย มิน ใจตี</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>ชื่อเล่น:</strong> มิน</p>
                            <p><strong>วันเกิด:</strong> 01/01/2000</p>
                            <p><strong>เบอร์โทร:</strong> 091-234-5678</p>
                            <p><strong>ที่อยู่:</strong> 44/2</p>
                            <p><strong>เบอร์โทรผู้ปกครอง:</strong> -</p>
                        </div>
                        <img src="assets/images/pro.jpg" class="card-img-top" alt="Profile Image">
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">64200xxx</h5>
                            <h5 class="card-text">นาย มิน ใจตี</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>ชื่อเล่น:</strong> มิน</p>
                            <p><strong>วันเกิด:</strong> 01/01/2000</p>
                            <p><strong>เบอร์โทร:</strong> 091-234-5678</p>
                            <p><strong>ที่อยู่:</strong> 44/2</p>
                            <p><strong>เบอร์โทรผู้ปกครอง:</strong> -</p>
                        </div>
                        <img src="assets/images/pro.jpg" class="card-img-top" alt="Profile Image">
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">64200xxx</h5>
                            <h5 class="card-text">นาย มิน ใจตี</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>ชื่อเล่น:</strong> มิน</p>
                            <p><strong>วันเกิด:</strong> 01/01/2000</p>
                            <p><strong>เบอร์โทร:</strong> 091-234-5678</p>
                            <p><strong>ที่อยู่:</strong> 44/2</p>
                            <p><strong>เบอร์โทรผู้ปกครอง:</strong> -</p>
                        </div>
                        <img src="assets/images/pro.jpg" class="card-img-top" alt="Profile Image">
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">64200xxx</h5>
                            <h5 class="card-text">นาย มิน ใจตี</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>ชื่อเล่น:</strong> มิน</p>
                            <p><strong>วันเกิด:</strong> 01/01/2000</p>
                            <p><strong>เบอร์โทร:</strong> 091-234-5678</p>
                            <p><strong>ที่อยู่:</strong> 44/2</p>
                            <p><strong>เบอร์โทรผู้ปกครอง:</strong> -</p>
                        </div>
                        <img src="assets/images/pro.jpg" class="card-img-top" alt="Profile Image">
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">64200xxx</h5>
                            <h5 class="card-text">นาย มิน ใจตี</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>ชื่อเล่น:</strong> มิน</p>
                            <p><strong>วันเกิด:</strong> 01/01/2000</p>
                            <p><strong>เบอร์โทร:</strong> 091-234-5678</p>
                            <p><strong>ที่อยู่:</strong> 44/2</p>
                            <p><strong>เบอร์โทรผู้ปกครอง:</strong> -</p>
                        </div>
                        <img src="assets/images/pro.jpg" class="card-img-top" alt="Profile Image">
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">64200xxx</h5>
                            <h5 class="card-text">นาย มิน ใจตี</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>ชื่อเล่น:</strong> มิน</p>
                            <p><strong>วันเกิด:</strong> 01/01/2000</p>
                            <p><strong>เบอร์โทร:</strong> 091-234-5678</p>
                            <p><strong>ที่อยู่:</strong> 44/2</p>
                            <p><strong>เบอร์โทรผู้ปกครอง:</strong> -</p>
                        </div>
                        <img src="assets/images/pro.jpg" class="card-img-top" alt="Profile Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

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