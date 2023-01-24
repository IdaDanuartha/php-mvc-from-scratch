<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css">
    <title>Blogger</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL ?>/home/index">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>/home/index">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <?php if(!$_SESSION['isLogged']) : ?>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>/auth/login">Login</a>          
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>/auth/register">Register</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>/auth/logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">