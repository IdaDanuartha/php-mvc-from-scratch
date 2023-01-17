<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/auth.css">

    <title><?= $data['title'] ?> | PWPB PHP MVC</title>
</head>
<body>
    <div class="login-form-bd">
        <div class="form-wrapper">
            <div class="form-container">
            <h1> Create New Account</h1>
            <div>
                <?php Flasher::flash(); ?>
            </div>
            <form action="<?= BASE_URL ?>/auth/registerprocess" method="post">
                <div class="form-control">
                    <input type="text" required name="name">
                    <label> Full name</label>
                </div>

                <div class="form-control">
                    <input type="email" required name="email">
                    <label> Email</label>
                </div>

                <div class="form-control">
                    <input type="password" required name="password">
                    <label> Password</label>
                </div>

                <button class="login-btn" type="submit">Create Account</button>
                <p class="text">Already have an account? <a href="<?= BASE_URL ?>/auth/login"> Login</a></p>
            </form>
            </div>
        </div>
    </div>

    <script src="<?= BASE_URL ?>/assets/js/auth.js"></script>
</body>
</html>