<?php
    require "./utils/checkVariables.php";

    $data = checkVariables();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["keyword"] ?></title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <p class="search-text"><?php echo $data["keyword"] ?></p>
    <img src="search.jpg" alt="search placeholder" class="placeholder-img" draggable="false">
    <img src="<?php echo $data["videoThumbnail"] ?>" class="video-img" draggable="false">

    <div class="about">
        <h2>Uploaded By: <?php echo $data["channel"] ?></h2>
        <p>Make sure that the thumbnail and channel are the same. If you do the wrong video I will decline it.</p>

        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" stroke-width="0" fill="white"></path>
        </svg>
    </div>

</body>
</html>