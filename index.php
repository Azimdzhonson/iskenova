<?php

include __DIR__ . '/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка фоток на скрвер</title>
</head>
<body>
    <form action="/addFile.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Загрузить">
    </form>

    <?php foreach($result as $img): ?>

        <img src="/img/<?= $img['path'] ?>" width="400px">

    <?php endforeach; ?>
</body>
</html>