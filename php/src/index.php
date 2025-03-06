<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="/assets/images/l.png" alt="Logo">
            <div class="content">
                <h1>LOGIN TO KMITL CE</h1>
            </div>
            <div class="login-box">
            </div>
            <div class="email-box">
                <!-- กล่องแรกสำหรับ Email -->
                <div class="input-box">
                    <div class="icon">
                        <i class="fas fa-envelope"></i> <!-- ใช้ไอคอนจดหมาย -->
                    </div>
                    <input type="email" placeholder="Email" />
                </div>

                <!-- กล่องที่สองสำหรับ Password -->
                <div class="input-box">
                    <div class="icon">
                        <i class="fas fa-lock"></i> <!-- ใช้ไอคอนพาสเวิร์ด -->
                    </div>
                    <input type="password" placeholder="Password" />
                </div>
            </div>
            <div class="Login-box">
                <a class="nav-link" href="/home.php">
                    <button class="Login">LOGIN</button>
                </a>
            </div>
        </div>
        <div class="right">
            <div class="contents">
                <h4>Hello!</h4>
                <h5>Enter your personal details</h5>
                <h6>and start journey with us</h6>
            </div>
        </div>
    </div>
</body>

</html>