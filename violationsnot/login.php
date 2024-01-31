<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход в личный кабинет</title>
  <link rel="stylesheet" href="css/log-reg-style.css">
</head>
<form action="test_user.php" method="post">
  <div class="form two">
    <div class="title">
      <p class="title_form">Вход в личный кабинет</p>
      <hr class="line_register">
      <img src="img/login.png" alt="" class="image_register">
    </div>
    <div class="enter_data">
      <p class="user_information">Введите логин/Email</p>
      <input type="text" class="input_enter_data" required name="login">
      <span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
      <p class="user_information">Введите пароль</p>
      <input type="password" class="input_enter_data" required name="password">
    </div>
    <div class="line_registration">
      <hr class="line_register">
    </div>
    <div class="transition">
      <a href="register.php" class="reference">
        <p class="reference_text">Нет учетной записи?</p>
      </a>
      <a href="###" class="reference">
        <p class="reference_text">Вернуться на главную</p>
      </a>
    </div>
    <div class="account_creation">
      <input class="login_reference" name="submit" type="submit" value="Войти">
    </div>
  </div>
</form>

</html>