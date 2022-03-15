<?php



$messages =[
        'ok'=>'File uploaded!',
    'error '=>'Error file is not upload!'
];



if (!empty($_FILES)){
    $path = "HW4/myWay/img/". $_FILES['myfile']['name']; var_dump($path);
    $uploadfile = $path . basename($_FILES['myfile']['name']);
//Проверка существует ли файл
    if (file_exists($uploadfile)) {
    echo "Файл $uploadfile существует, выберите другое имя файла!";
    exit;
        }
    //Проверка на размер файла
if ($_FILES["myfile"]["size"] > 516 * 1 * 516) {
    echo("Размер файла не больше 5 мб");
    exit;
}
    //Проверка расширения файла
$blacklist = array(".php", ".phtml", ".php3", ".php4");
foreach ($blacklist as $item) {
    if (preg_match("/$item\$/i", $_FILES['myfile']['name'])) {
        echo "Загрузка php-файлов запрещена!";
        exit;
    }
}

//Проверка на тип файла
$imageinfo = getimagesize($_FILES['myfile']['tmp_name']);
if ($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
    echo "Можно загружать только jpg-файлы, неверное содержание файла, не изображение.";
    exit;
}

if ($_FILES['userfile']['type'] != "image/jpeg") {
    echo "Можно загружать только jpg-файлы.";
    exit;
}

    if( move_uploaded_file($_FILES['myfile']['tmp_name'], $path)){
        $message= "ok";
    }
    else {
        $message="error";
    }
    header("Location: index.php? status=$message");
    die();

}
$message = $messages[$_GET['status']];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?=$message?>
<form   method="POST" ENCTYPE="multipart/form-data">
    Выберите файл для загрузки:
    <input type="file" name="myfile">
    <input type="submit"  value="Загрузить">
</form>
</body>
</html>