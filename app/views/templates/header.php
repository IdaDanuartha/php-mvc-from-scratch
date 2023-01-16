<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/dashboard.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

    <title>PWPB PHP MVC</title>
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="#">Blogger</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?= BASE_URL ?>/user/logout">Sign out</a>      
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">          
          <li class="nav-item">
            <a class="nav-link <?= (URL == BASE_URL . '/' || URL == BASE_URL . '/home/index') ? 'active' : ''; ?>" aria-current="page" href="<?= BASE_URL ?>">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (URL == BASE_URL . '/post/index') ? 'active' : ''; ?>" href="<?= BASE_URL ?>/post/index">
              <span data-feather="file" class="align-text-bottom"></span>
              Post
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (URL == BASE_URL . '/category/index') ? 'active' : ''; ?>" href="<?= BASE_URL ?>/category/index">
              <span data-feather="file" class="align-text-bottom"></span>
              Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (URL == BASE_URL . '/user/index') ? 'active' : ''; ?>" href="<?= BASE_URL ?>/user/index">
              <span data-feather="file" class="align-text-bottom"></span>
              User
            </a>
          </li>
        </ul>          
      </div>
    </nav>

    <main class="mt-4">
