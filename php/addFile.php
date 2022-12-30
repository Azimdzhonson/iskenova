<?php

include __DIR__ .'/db.php';

if($_FILES['akilay']['name'] !== ''){
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = __DIR__ .'/img/'.$name;


    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        echo 'Файл не сможет загрузиться';
    }


    $data = $db->prepare("INSERT INTO 'photos' ('path') VALUES (?)");
    $data->execute([$name]);


}

header("Location:  \index.php");

?>