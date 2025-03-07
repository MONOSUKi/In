<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นักศึกษา & บุคลากร CE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="teacher.css">
</head>

<body>
    <nav class="navbar1">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand">สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง วิทยาเขตชุมพรเขตรอุดมศักดิ์</a>
            <a class="navbar-brand ms-auto" href="logout.php">ออกจากระบบ</a>
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
                        <a class="nav-link" href="/home.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile.php">ข้อมูลส่วนตัว</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-container">
        <span class="badge text-bg-primary header-content">
            <img src="assets/images/p.png" alt="Logo" class="logo">
            <h1 class="title">บุคลากร CE</h1>
        </span>
        <button type="button" class="btn rounded-pill btn-light" onclick="window.location.href='/home.php'">ย้อนกลับ</button>
    </div>
    <div class="container-w">
        <div class="profile">
            <img src="assets/images/j.png" alt="A" class="a">
            <div class="info">
                <div class="ti">
                    <div class="triangle"></div>
                    <span>ดร.รัตติกร สมบัติแก้ว</span>
                </div>
                <div class="details">
                    <p><strong>ชื่อเล่น :</strong> อาจารย์จุ๋ม</p>
                    <p><strong>วันเกิด :</strong> 20/11/1974</p>
                    <p><strong>เบอร์ติดต่อ :</strong> 087-711-0520</p>
                    <p><strong>ID LINE :</strong> joomkmitlcpp</p>
                    <p><strong>E-MAIL :</strong> rattikorn.so&#64;kmitl.ac.th</p>
                </div>
            </div>
        </div>

        <div class="profile">
            <img src="assets/images/o.png" alt="B" class="b">
            <div class="info">
                <div class="ti">
                    <div class="triangle"></div>
                    <span>อาจารย์อรรถศาสตร์ นาคเทวัญ</span>
                </div>
                <div class="details">
                    <p><strong>ชื่อเล่น :</strong> อาจารย์อ๊อด</p>
                    <p><strong>วันเกิด :</strong> 09/10/1973</p>
                    <p><strong>เบอร์ติดต่อ :</strong> 081-632-6779</p>
                    <p><strong>ID LINE :</strong> iaudi</p>
                    <p><strong>E-MAIL :</strong> athasart.na&#64;kmitl.ac.th</p>
                </div>
            </div>
        </div>

        <div class="profile">
            <img src="assets/images/s.png" alt="A" class="a">
            <div class="info">
                <div class="ti">
                    <div class="triangle"></div>
                    <span>ว่าที่ ร.ต.ศิลา ศิริมาสกุล</span>
                </div>
                <div class="details">
                    <p><strong>ชื่อเล่น :</strong> อาจารย์ติ๊ก</p>
                    <p><strong>วันเกิด :</strong> 04/05/1982</p>
                    <p><strong>เบอร์ติดต่อ :</strong> 081-747-4995</p>
                    <p><strong>ID LINE :</strong> silarsi</p>
                    <p><strong>E-MAIL :</strong> silar.si&#64;kmitl.ac.th</p>
                </div>
            </div>
        </div>

        <div class="profile">
            <img src="assets/images/h.png" alt="B" class="b">
            <div class="info">
                <div class="ti">
                    <div class="triangle"></div>
                    <span>อาจารย์นภัสรพี สิทธิวัจน์</span>
                </div>
                <div class="details">
                    <p><strong>ชื่อเล่น :</strong> อาจารย์แฮปปี้</p>
                    <p><strong>วันเกิด :</strong> 03/10/1979</p>
                    <p><strong>เบอร์ติดต่อ :</strong> 089-500-2587</p>
                    <p><strong>ID LINE :</strong> naphasra</p>
                    <p><strong>E-MAIL :</strong> pisakorn.si&#64;kmitl.ac.th</p>
                </div>
            </div>
        </div>

        <div class="profile">
            <img src="assets/images/ohm.png" alt="A" class="a">
            <div class="info">
                <div class="ti">
                    <div class="triangle"></div>
                    <span>นายจตุรงค์ เกตุนิมิต</span>
                </div>
                <div class="details">
                    <p><strong>ชื่อเล่น :</strong> พี่โอม</p>
                    <p><strong>วันเกิด :</strong> 03/06/1999</p>
                    <p><strong>เบอร์ติดต่อ :</strong> 093-647-1399</p>
                    <p><strong>ID LINE :</strong> iamohm1437</p>
                    <p><strong>E-MAIL :</strong> jaturong.ka&#64;kmitl.ac.th</p>
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