<?php
    require_once "inc/lib.inc.php";
    require_once "inc/data.inc.php";

    setlocale(LC_ALL, "russioan");
    $day = strftime('%d');
    $mon = strftime('%B');
    $mon = iconv('windows-1251', 'utf-8', $mon);
    $year = strftime('%Y');
    $hour = (int)strftime('%H');
    $welocme = '';
    if($hour>0 and $hour<6): $welocme = "Доброй ночи";
    elseif($hour>=6 and $hour<12): $welocme = "Доброе утро";
    elseif($hour>=12 and $hour<18): $welocme = "Добрый день";
    elseif($hour>=18 and $hour<23): $welocme = "Добрый вечер";
    eles: $welocme = "Доброй ночи";
    endif;

?>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
      <?php require_once "inc/top.inc.php"; ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок
    <h1>Добро пожаловать на наш сайт!</h1> -->
      <h1><?= $welocme ?>, Гость</h1>
      <blockquote>
          <?
            echo "Сегодня $day, $mon, $year";
          ?>
      </blockquote>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php require_once "inc/index.inc.php"; ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <?php require_once "inc/menu.inc.php"; ?>
<!--
    <ul>
      <li><a href='<?= $leftMenue[0]['href']?>'><?= $leftMenue[0]['link']?></a>
      </li>
        <li><a href='<?= $leftMenue[1]['href']?>'><?= $leftMenue[1]['link']?></a>
      </li>
        <li><a href='<?= $leftMenue[2]['href']?>'><?= $leftMenue[2]['link']?></a>
      </li>
        <li><a href='<?= $leftMenue[3]['href']?>'><?= $leftMenue[3]['link']?></a>
      </li>
      <li><a href='<?= $leftMenue[4]['href']?>'><?= $leftMenue[4]['link']?></a>
      </li>
    </ul> -->

    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php require_once "inc/bottom.inc.php"; ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>