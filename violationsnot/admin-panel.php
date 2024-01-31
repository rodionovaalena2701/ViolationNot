<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/admin-style.css">
  <title>Админ панель</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="menu">
        <div class="logo-admin">
          <img src="img\Нарушениям.Нет.svg" alt="logo" class="logo">
          <div class="stick"></div>
          <h3>Панель администратора</h3>
        </div>
        <div class="menu-navigation">
          <div class="menu-links"><b><a href="application-formation-page.php" class="menu-link">Подать заявку</a></b>
            <img src="img\right arrow.svg" alt="">
          </div>
          <div class="menu-links"><b><a href="exit.php" class="menu-link">Выйти </a></b>
            <img src="img\x.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <div class="main-text">
        <img src="img\text icon.svg" alt="icon">
        <p class="main-title">Список заявлений</p>
      </div>
      <div class="long-stick"></div>
      <table class="table">
        <tr>
          <th class="table-title"><b>Фамилия</b></th>
          <th class="table-title"><b>Имя</b></th>
          <th class="table-title"><b>Отчество</b></th>
          <th class="table-title"><b>Описание нарушения</b></th>
          <th class="table-title"><b>Номер автомобиля</b></th>
          <th class="table-title"><b>Статус заявления</b></th>
        </tr>

        <?php
        include('dbconnect.php');
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
          $id = $_GET[$label];
        }
        $users = $connect->query("SELECT * FROM application, user, status WHERE application.id_user=user.id AND application.id_status=status.id AND application.id_employee ='$id' ");
        $table = "";
        $k = 1;
        while ($row = $users->fetch_assoc()) {
          $table .= "<tr>";
          $table .= "<td>" . $row["surname"] . "</td>";
          $table .= "<td>" . $row["first_name"] . "</td>";
          $table .= "<td>" . $row["middle_name"] . "</td>";
          $table .= "<td>" . $row["description_of_offence"] . "</td>";
          $table .= "<td>" . $row["regional_auto_number"] . "</td>";
          $table .= "<td>" . $row["status"] . "</td>";
          $table .= "</tr>";
          $k++;
        }
        echo $table;
        ?>
      </table>
    </div>
  </main>

  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="js/main.js" type="text/javascript"></script>
</body>

</html>