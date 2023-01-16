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
            <h1> Please Login</h1>
            <?php if($data['message']) : ?>
                <div class="alert-danger" role="alert">
                    <?= $data['message'] ?>
                </div>
            <?php endif; ?>
            <form action="<?= BASE_URL ?>/auth/loginprocess" method="post">
                <div class="form-control">
                    <input type="text" required name="email">
                    <label> Email</label>
                </div>

                <div class="form-control">
                    <input type="password" required name="password">
                    <label> Password</label>
                </div>

                <button class="login-btn">Login</button>
                <p class="text">Don't have an account? <a href="<?= BASE_URL ?>/auth/register"> Register</a></p>
            </form>
            </div>
        </div>
    </div>

    <script src="<?= BASE_URL ?>/assets/js/auth.js"></script>
</body>
</html>