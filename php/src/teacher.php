<?php
$professors = [
    [
        'name' => 'ดร.รัตติกร สมบัติแก้ว',
        'nickname' => 'อาจารย์จุ๋ม',
        'birthdate' => '32/12/1970',
        'phone' => '095-187-3785',
        'line' => 'aj.jum',
        'email' => 'aj.rattikorn@kmitl.ac.th',
        'image' => 'path_to_image2.jpg'
    ],
    [
        'name' => 'อาจารย์อรรถศาสตร์ นาคเทวัญ',
        'nickname' => 'อาจารย์อ๊อด',
        'birthdate' => '32/12/1970',
        'phone' => '095-187-3785',
        'line' => 'aj.ood',
        'email' => 'aj.athasar@kmitl.ac.th',
        'image' => 'path_to_image3.jpg'
    ],
    [
        'name' => 'ว่าที่ ร.ต.ศิลา ศิริมาสกุล',
        'nickname' => 'อาจารย์ศิลา',
        'birthdate' => '32/12/1970',
        'phone' => '095-187-3785',
        'line' => 'aj.silar',
        'email' => 'aj.silar@kmitl.ac.th',
        'image' => 'path_to_image2.jpg'
    ],
    [
        'name' => 'อาจารย์นภัสรพี สิทธิวัจน์',
        'nickname' => 'อาจารย์แฮปปี้',
        'birthdate' => '32/12/1970',
        'phone' => '095-187-3785',
        'line' => 'aj.happy',
        'email' => 'aj.happy@kmitl.ac.th',
        'image' => 'path_to_image3.jpg'
    ]
];

?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นักศึกษา & บุคลากร CE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="student.css">
</head>

<body>
    <nav class="navbar1">
        <div class="container-fluid">
            <a class="navbar-brand">สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง วิทยาเขตชุมพรเขตรอุดมศักดิ์</a>
            <a class="navbar-brand" href="#">ออกจากระบบ</a>
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
            <a class="navbar-brand ms-3" href="/home">
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
                        <a class="nav-link" href="/home">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">ข้อมูลส่วนตัว</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(243, 235, 235);
        }
        .navbar1 {
            background-color: #203864 !important;
            padding: 5px 20px;
        }

        .navbar1 .navbar-brand {
            color: #ffffff !important;
            font-size: 16px;
            /* ปรับขนาดฟอนต์ */
        }
        .navbar-toggler {
            background-color: #A1E3F9;
            /* ปุ่มสีน้ำเงิน */
            border: none;
            /* เอาขอบออก */
        }
        body {
            background-color: #d4d4d4; /* สีเทาอ่อน */
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            /* จัดให้มีระยะห่างระหว่างเนื้อหาทั้งสอง */
            align-items: center;
            /* จัดให้อยู่ในแนวเดียวกัน */
            margin-top: 20px;
            /* เว้นระยะห่างจาก Navbar */
            padding-left: 20px;
            /* เว้นระยะห่างจากขอบซ้าย */
        }

        .header-content {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            /* ลดระยะห่างระหว่างรูปกับข้อความ */
            padding: 2px 20px 2px 5px;
            /* ลด padding ด้านขวาและซ้าย */
            border-radius: 10px;
            max-width: fit-content;
            background: linear-gradient(to right, #FFFFFF 24%, #203864 31%);
            color: white;
        }
        .logo {
            width: 80px;
            height: auto;
        }
        .title {
            margin: 0;
        }
        .btn {
            margin-left: auto;
            /* ช่วยจัดให้ปุ่มอยู่ทางขวาสุด */
            margin-right: 20px;
            /* เว้นระยะห่างจากขอบขวา */
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            /* เพิ่มเงาให้ปุ่ม */
            border: none;
            /* เอาขอบออกจากปุ่ม */
            padding: 10px 30px;
            /* เพิ่มขนาดปุ่มให้ใหญ่ขึ้น */
            border-radius: 30px;
            /* ทำมุมปุ่มให้โค้ง */
            font-size: 24px;
            /* ปรับขนาดฟอนต์ให้ใหญ่ขึ้น */
            color: #203864;
            /* เปลี่ยนสีฟอนต์เป็นสีเทาเข้ม */
        }
        .excel-container {
            border-bottom: 5px solid transparent;
            /* ทำให้เส้นกรอบเป็นโปร่งใส */
            background-image: linear-gradient(to right, #203864 43%, #F79B5B 50%);
            /* ไล่สีจากซ้ายไปขวา */
            padding-bottom: 20px;
            /* เว้นระยะห่างจากเนื้อหาด้านล่าง */
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: 100% 2px;
            /* กำหนดขนาดของเส้น */
        }

        /* สไตล์ของกล่องหัวข้อ */
        .welcome-box {
            background-color: white;
            /* สีพื้นหลังเป็นสีขาว */
            border: 2px solid #203864;
            /* เส้นกรอบด้านล่างสีดำ */
            border-radius: 35px;
            padding: 20px;
            /* เพิ่มระยะห่างภายในกล่อง */
            width: 250px;
            /* ให้ขนาดกล่องพอดีกับข้อความ */
            height: 77px;
            margin: 20px auto;
            /* จัดตำแหน่งให้อยู่กลางหน้าจอ */
            text-align: center;
            /* ให้อยู่กลางทั้งในแนวนอนและแนวตั้ง */
        }
        /* สไตล์ของหัวข้อ */
        .welcome-title {
            font-size: 24px;
            /* ขนาดตัวอักษร */
            color: #203864;
            /* สีตัวอักษร */
            margin: 0;
            /* ลบระยะห่างที่ไม่ต้องการ */
        }
        .container .row {
            margin-bottom: 40px;
            /* เพิ่มระยะห่างระหว่างแถว */
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        .profile {
            background: white;
            margin: 15px 0;
            padding: 20px;
            display: flex;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .header-ce {
            text-align: center;
            font-size: 24px;
            margin: 20px 0;
        }
        .footer {
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #203864; /* สีฟ้าหรือสีน้ำเงิน */
        }
        .footer h5 {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .footer .list-unstyled li {
            margin-bottom: 10px;
        }
        .footer .list-unstyled a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer .list-unstyled a:hover {
            color: #ffb3b3; /* สีเปลี่ยนเมื่อ hover */
        }
        .footer .form-control {
            width: 100%;
        }
        .col-md-5 {
            color:rgb(255, 255, 255);
        }
        .text-custom {
            color: #F79B5B !important;
        }
        /* เปลี่ยนสีข้อความใน li ให้เป็น F79B5B */
        ul.list-unstyled li {
            color: #F79B5B;
        }
        
        /* เปลี่ยนสีไอคอนให้เป็นสีเดียวกัน */
        ul.list-unstyled li i {
            color: #F79B5B;
        }

        /* กำหนดสีของเบอร์โทรศัพท์ให้เป็นสีขาว */
        ul.list-unstyled li.phone {
            color: white;
        }
        
        ul.list-unstyled li.phone i {
            color: white;
        }
    </style>
</head>
<body>
    <app-bar></app-bar>
    <app-navbar></app-navbar>

    <div class="header-container">
        <span class="badge text-bg-primary header-content">
            <img src="path_to_logo.jpg" alt="Logo" class="logo">
            <h1 class="title">บุคลากร CE</h1>
        </span>
        <button type="button" class="btn rounded-pill btn-light" onclick="window.location.href='/home'">ย้อนกลับ</button>
    </div>

    <div class="container">
        <?php foreach ($professors as $professor): ?>
        <div class="profile">
            <img src="<?= $professor['image'] ?>" alt="Profile Picture" class="profile-img">
            <div class="info">
                <div class="ti">
                    <div class="triangle"></div>
                    <span><?= $professor['name'] ?></span>
                </div>
                <div class="details">
                    <p><strong>ชื่อเล่น :</strong> <?= $professor['nickname'] ?></p>
                    <p><strong>วันเกิด :</strong> <?= $professor['birthdate'] ?></p>
                    <p><strong>เบอร์ติดต่อ :</strong> <?= $professor['phone'] ?></p>
                    <p><strong>ID LINE :</strong> <?= $professor['line'] ?></p>
                    <p><strong>E-MAIL :</strong> <?= $professor['email'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
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
</body>
</html>


