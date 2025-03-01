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


   <!--Задание №2-->
   <?php
   $users = [
      'login' => 'admin',
      'password' => 1234,
   ];
   $is_found = false;
   $login = $_POST['login'] ?? '';
   $password = (int) $_POST['password'] ?? 0;
   $is_found = $users['login'] == $login && $users['password'] == $password;

   if ($is_found) {
      echo "Добро пожаловать!";
   } else {
      echo "У вас нет доступа";
      echo '</br><a href="index.php">Попробуйте пройти авторизацию еще раз</a>';
   }
   ?>


   <!--Задание №3-->
   </br></br>
   <?php
   $products = [
      [
         "name" => "sony",
         "category" => "camera",
         "price" => 140000,
      ],
      [
         "name" => "iphone",
         "category" => "mobile",
         "price" => 122000,
      ],
      [
         "name" => "ps5",
         "category" => "console",
         "price" => 150000,
      ],
   ];

   $is_found = false;
   $category = $_GET['category'] ?? '';
   $price_min = $_GET['price_min'] ?? 0;
   $price_max = $_GET['price_max'] ?? 0;
   foreach ($products as $product)
      ;
   if (
      $product['category'] == $category && $product['price'] <= $price_max && $product['price'] >= $price_min
   ) {
      echo 'Категория: ' . $product['category'] . '</br>';
      echo 'Наименование: ' . $product['name'] . '</br>';
      echo 'Цена: ' . $product['price'] . '</br>';
   } else { ?>
      <ul>
         <?php foreach ($products as $product) foreach ($product as $prod => $data): ?>
               <li>
                  <strong><?= ucfirst($prod) ?>:</strong>
                  <?= $data ?>
               </li>
               <?php
            endforeach;
         ?>
      </ul>
   <?php } ?>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
   <script src="<?php echo "js/script_work17.js"; ?>"></script>
</body>

</html>