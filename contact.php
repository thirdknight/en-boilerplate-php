<!DOCTYPE html>
<html class="no-js" lang="">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <title>html Boilerplate Edi</title>
</head>

<body>
  <header class="main-header">
    <div class="container container--flex">
      <div class="logo-container column column--50">
        <a href="./" class="logo" >Logo</a>
      </div>
    </div>
  </header>
  <nav class="main-nav">
    <div class="container container--flex">
      <ul class="menu" id="menu">
        <!-- <li class="menu__item"><a href="/" class="menu__link menu__link--select">Inicio</a></li> -->
        <li class="menu__item"><a href="our.html" class="menu__link">Our</a></li>
        <li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li>
        <li class="menu__item"><a href="contact.html" class="menu__link">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div><br>Contact<br></div>
  <footer>
    <div class="wrap">
      <div class="footer-info">
        <p class="icon-mail">contacto@prometa.com</p>
        <p class="icon-phone">Telefono: 4954921 - 992523103</p>
        <p class="icon-location">Pedro Ruiz Gallo 14600, Eten Peru</p>
      </div>
      <div class="footer-menu">
        <a href="./">LOGO</a>
        <ul>
          <li class="menu__item"><a href="our.html" class="menu__link">Our</a></li>
          <li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li>
          <li class="menu__item"><a href="contact.html" class="menu__link">Contact</a></li>
        </ul>
      </div>
      <p class = "copyright">
      copyright &copy All rights reserved; <?php print date("Y"); ?>
      </p>
    </div>
  </footer>
</body>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="js/darkmode.js"></script>
</html>