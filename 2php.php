<?php
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);


  echo '<h1>Hello, Dzhon!</h1>';


    function db_connect() {

        static $connection;

      if (!isset($connection)) {
        $config = parse_ini_file('../../hw_config.ini');

        $connection = mysqli_connect(
          $config['host'],
          $config['username'],
          $config['password'],
          $config['dbname']
        );

        if ($connection === false) {
          echo 'При попытке подключения к БД призошла ошибка, обратитесь к адмнистратору!';
          return false;
        }
      }

      return $connection;
    }

    $connection = db_connect();

    if ($connection !== false) {

      $query = 'SELECT * FROM cars WHERE name="'.$name.'";';
      $result = mysqli_query($connection, $query);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<p>' . $row['name'] . '</p>';
        }
      }

      mysqli_close($connection);
    }

 ?>