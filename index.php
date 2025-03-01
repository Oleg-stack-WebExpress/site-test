<!DOCTYPE html>
<html>

<head>
   <title>ДЗ <?php echo "GETPOST"; ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style-odd.css" />
</head>

<body>
   Привет мир!
   Hi
   Hello World!
   Привет

   <!--Задание №1-->
   Задание №1
   </br></br>
   <form action="/" method="get">
      Введите имя:</br></br>
      <div class="input-group flex-nowrap">
         <input type="text" class="form-control" placeholder="Имя" aria-label="Username"
            aria-describedby="addon-wrapping" name="username">
      </div> </br>
      Введите возраст:</br></br>
      <div class="input-group flex-nowrap">
         <input type="number" class="form-control" placeholder="Возраст" aria-label="Userage"
            aria-describedby="addon-wrapping" name="age">
      </div></br>
      <button type="submit" class="btn btn-primary">Отправить</button>
   </form>

   <?php
   $username = '';
   $age = 0;
   $is_found = false;
   if (array_key_exists("username", $_GET)) {
      $username = $_GET['username'];
   }
   if (array_key_exists("age", $_GET)) {
      $age = (int) $_GET['age'];
   }

   if ($age >= 18) {
      echo "</br>Привет, $username. Тебе есть 18 лет";
   } else {
      echo "</br>Привет, $username. Тебе меньше 18 лет";
   }

   ?>
   </br>

   <!--Задание №2-->
   </br></br>
   Задание №2
   </br></br>
   <form action="/auth.php" method="post">
      <input type="text" name="login">
      <input type="password" name="password">
      <input type="submit" value="Авторизоваться">
   </form>


   <!--Задание №3-->
   </br></br>
   Задание №3
   </br></br>
   <form action="/auth.php" method="get">
      Напиши название категории:
      <input type="text" name="category"></br></br>
      Укажи нижний предел диапазона цен:
      <input type="number" name="price_min"></br></br>
      Укажи верхний предел диапазона цен:
      <input type="number" name="price_max"></br></br>
      <input type="submit" value="Получить выгрузку товаров">
   </form>










   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
   <script src="<?php echo "js/script_work17.js"; ?>"></script>
</body>

</html>