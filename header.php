<?php 
session_start();
$default_language = 'pt';

if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = $default_language;
}

$lang_file = 'lang/' . $_SESSION['lang'] . '/text.php';
if (file_exists($lang_file)) {
    $lang = include($lang_file);
} else {
    $lang = include('lang/' . $default_language . '/text.php');
}

$current_page = $_SERVER['REQUEST_URI'];
$is_login_page = (strpos($current_page, 'login') !== false);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="icon" type="image/png" href="./img/favicon-32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="./img/favicon-16.png" sizes="16x16" />
  <!-- animation -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- main css -->
  <link rel="stylesheet" href="./css/style.css" />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>ConectaPag</title>
</head>

<body>
  <header class="menu">
    <div class="container">
      <div class="row">
        <a href="/" class="logo" data-aos="fade-down">
          <img src="./img/logo.png" alt="" />
        </a>
        <?php echo $menu_to_display = $is_login_page ?  
        '<nav>
          <a href="#" class="btn btn-help">
            <img src="./img/icon-question.png" alt="">
            Ajuda
          </a>
        </nav>' :  '
        <nav>
          <button class="btn btn-mobile-menu">
            <div></div>
            <div></div>
            <div></div>
          </button>
          <ul data-aos="fade-down">
            <li><a class="menu-item" href="#solutions">Soluções</a></li>
            <li><a class="menu-item" href="#developers">Developers</a></li>
            <li><a class="menu-item" href="#about">Sobre nós</a></li>
            <li><a class="menu-item" href="#get-in-touch">Contato</a></li>
            <li>
              <a href="/login.php" class="btn btn-gradient">Login</a>
            </li>
          </ul>
        </nav>
        ';?>
      </div>
    </div>
  </header>