<?php



$imageDir ='HW4/teachersWay/gallery_img/big/';
$imageSmall = scandir($imageDir);
//var_dump($imageSmall);

?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>

</head>

<body>
<div >
<div ><h2>My Gallery</h2></div>


    <?php foreach ($imageSmall as $item): ?>
        <div>

            <img src="<?=$item?>" alt="img" height="200px" width="250px"><br>



        </div>
    <?php endforeach; ?>




</div>

</body>
</html>
