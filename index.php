<?php require_once('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Future | users a comments</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="head">
    <header>
      <div class="h-text">
        <p class="info-header">Телефон: (499) 340-94-71</p>
        <p class="info-header">Email: <b class="info-email">info@future-group.ru</b></p>
        <h2>Комментарии</h2>
      </div>
      <div class="logo">
        <img src="/img/logo.jpg" alt="">
      </div>
    </header>
    </div>

  <div class="container">
    

    <main>
      <div class="users-block">
      <?php foreach($result as $value): ?>
      <?php $date = str_replace(' ', ' &nbsp;&nbsp;', date_format(date_create($value['date']), "H:i d-m-Y"));?>
      <div class="user-block">
          <p class="name"><?=$value['username']?></p><span class="date"><?=$date?></span>
          <p class="user-comment"><?=$value['comment']?></p>
        </div>
      <?php endforeach; ?> 
      </div>
      <hr>
      <div class="form-block">
        <h3>Оставить комментарий</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
          <label for="username">Ваше имя</label><br>
          <input type="text" name="username" id="username"><br>
          <label for="usercomment">Ваш комментарий</label><br>
          <textarea name="usercomment" id="usercomment"></textarea><br>
          <input type="submit" name="submit" class="submit" value="Отправить">
        </form>
      </div>
    </main>

  </div>
  <div class="foot">
      <footer>
        <div class="f-logo">
          <img src="/img/f-logo.jpg" alt="">
        </div>
        <div class="block-f-info">
          <span class="footer-info">Телефон: (499) 340-94-71</span><br>
          <span class="footer-info">Email: info@future-group.ru</span><br>
          <span class="footer-info">Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</span><br>
          <span class="company">2010-2014 Future. Все права защищены.</span>
        </div>
      </footer>
    </div>
</body>
</html>