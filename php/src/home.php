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
    <title>ข้อมูลอาจารย์</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            padding: 15px;
            color: white;
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
        .header-personnel {
            text-align: center;
            margin: 20px 0;
        }
        .popup-hbd {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        .popup-hbd .close-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body>
    <app-bar></app-bar>
    <app-navbar></app-navbar>

    <div class="header-ce">
        <h1>นักศึกษา & บุคลากร CE</h1>
    </div>

    <div class="header-container">
        <span class="badge text-bg-primary header-content">
            <img src="path_to_logo.jpg" alt="Logo" class="logo">
            <h1 class="title">ข้อมูลอาจารย์</h1>
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

    <div class="header-personnel">
        <button type="button" class="btn rounded-pill btn-light" onclick="window.location.href='/teacher'">Personnel CE</button>
    </div>

    <div class="popup-hbd" id="popupHBD">
        <button class="close-btn" onclick="document.getElementById('popupHBD').style.display='none'">×</button>
        <h3>ขอให้โค้ดไม่บั๊ก และชีวิตไม่มี 404 นะ!</h3>
        <img src="assets/images/cake.png" alt="Cake" class="cake">
    </div>

    <app-footer></app-footer>
</body>
</html>
