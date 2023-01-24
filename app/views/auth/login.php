<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

    <title><?= $data['title'] ?> | PWPB PHP MVC</title>
</head>
<body>
    <form class="login-form" action="<?= BASE_URL ?>/auth/loginprocess" method="post">
        <h2>Welcome, User!</h2>
        <p>Please log in</p>
        <div>
            <?php Flasher::flash(); ?>
        </div>
        <input type="text" required name="email" placeholder="Email" />
        <input type="password" required name="password" placeholder="Password" />
        <input type="submit" value="Log In" />
        <div class="links">
            <span>Doesn't have an account?</span>
            <a href="<?= BASE_URL ?>/auth/register">Please register</a>
        </div>
    </form>

    <script src="<?= BASE_URL ?>/assets/js/auth.js"></script>
</body>
</html>