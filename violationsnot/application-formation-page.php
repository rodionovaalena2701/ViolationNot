<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Страница формирования заявления</title>
  <link rel="stylesheet" href="css/app-form-style.css">
</head>

<body>
  <div class="conteiner">
    <div class="header">
      <div class="header-content">
        <div class="header-content-one">
          <img src="img\Нарушениям.Нет.svg" alt="logo" class="logo">
          <div class="stick"></div>
          <h3 class="text-color">Формирование заявления</h3>
        </div>
        <div class="header-content-two">
          <a href="report-panel.php">
            <b class="text-color">Подать заявку<img src="img\right arrow.svg" alt="" style="margin-right: 30px;"></b>
          </a>
          <a href="exit.php">
            <b class="text-color">Выйти<img src="img\x.svg" alt=""></b>
          </a>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="main-text">
        <img src="img\text icon.svg" alt="icon">
        <p class="main-title">Форма заявления</p>
      </div>
      <div class="long-stick"></div>
      <div class="main-block">
        <form action="save_remarks.php" method="post" class="main-block-form">
          <p class="main-block-text">Ваш государственный региональный номер автомобиля:</p>
          <input name="number" type="text" placeholder="Введите номер автомобиля" class="main-block-input">
          <p class="main-block-text">Описание нарушения:</p>
          <textarea name="text" id="" cols="30" rows="10" placeholder="Введите описание нарушения"
            class="main-block-textarea"></textarea>
          <div class="long-stick"></div>
          <input name="submit" type="submit" value="Отправить" class="main-block-button">
        </form>
      </div>
    </div>
  </div>
</body>

</html>