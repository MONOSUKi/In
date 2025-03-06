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

            

            
            <form action="login.php" method="post">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required />
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <button type="submit" class="Login">LOGIN</button>

                 <!-- แสดงข้อความผิดพลาด -->
                <?php if (isset($_SESSION['error'])): ?>
                    <p class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
                <?php endif; ?>
            </form>
            <style>
                .error {
                    color: red;
                    font-size: 14px;
                    text-align: center;
                    margin-top: 10px;
                }
            </style>
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