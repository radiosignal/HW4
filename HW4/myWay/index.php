
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>



</body>
</html>
<?php


$dirImages = 'HW4/myWay/img/';
$images = scandir($dirImages);

for ($i = 0; $i < count($images); $i++) {
    if ($images[$i] != '.' && $images[$i] != '..') {
       echo '<a href="' . $dirImages . $images[$i] . '" target="_blank"><img src=' . $dirImages . $images[$i] . ' style="width: 50px;"></a>';
    }
}
