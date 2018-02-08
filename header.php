<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ; ?></title>
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript">
    document.documentElement.className = document.documentElement.className.replace("no-js","js");
  </script>
</head>
<body>

<header class="header">

<div class="searchdown">
  <form action="" method="post" class="nav-search">
    <input type="text" placeholder="Введите название заповедника" name="search" class="search" required>
    <button type="submit" class="search-submit">Искать <i class="fa fa-arrow-right"></i></button>
  </form>
  <div class="found-search"></div>
</div>
  <div class="container">
    <ul class="main-nav">
      <li>
        <a class="main-nav-brand" href=""><span class="main-nav-brand-span"></span><i class="fa fa-ravelry"></i></a>
      </li>
      <li>
        <a class="nav-animate" href="index.php">Главная</a>
      </li>
      <li>
        <a class="nav-animate" href="https://github.com/boxer-belgorodsky" target="_blank">Разработчик сайта</a>
      </li>
      <li style="position:relative">
        <a class="nav-animate" href="javascript://0">Подписаться</a><div class="subscribedrop">
         <form class="subscribedrop-form">
           <h3>Подпишитесь на рассылку  и получайте на почту новые статьи каждую неделю</h3>
           <label for="subscribe-name">
            <input type="text" name="subscribe-name" class="subscribe-name" >
            <span class="subscribe-user">Ваше Имя</span>
           </label>
           <label for="subscribe-email">
            <input type="text" name="subscribe-email" class="subscribe-email" >
            <span class="subscribe-user">Ваш Email</span>
           </label>
           <button type="submit" class="button-search-nav" name="button-search-nav">Подписаться</button>
         </form>
        </div>
      </li>
    </ul>
    <ul class="main-nav">
      <li>
        <div style='display:inline-block;' href="" class="interactive-nav">

        </div>
      </li>
      <li>
        <div>
          <a href="javascript://" id="search" class="search-nav" data-tippy-theme="honeybee" title="Поиск по странице"><i class="fa fa-search"></i>
          </a>
        </div>
      </li>
    </ul>
  </div>
</header>




