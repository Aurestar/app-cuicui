<?php 
    $desc_bird = "Le Merlebleu de l'Est (Sialia sialis) est une espèce de passereaux appartenant à la famille des Turdidae, mesurant de 16,5 à 19 cm. Il vit en Amérique du Nord et en Amérique centrale. Son nom anglais est Eastern Bluebird.";
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result - Cui-cui</title>
        <link rel="stylesheet" media="screen and (min-device-width: 11px)" href="styles/style_bird.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav>
            <div class="group_nav">
                <img src="resources/nav_icon/home.svg" alt="home">
                <div class="btn_micro">
                    <img src="resources/nav_icon/microphone.svg" alt="microphone">
                </div>
                <img src="resources/nav_icon/search.svg" alt="search">
            </div>
        </nav>
        <div class="up_bar_patch">
            <div class="up_bar">
                <a href="home.html"><img src="resources/nav_icon/return.svg" alt="return"></a>
                <p class="title_page"><?=$_GET['name']?></p>
                <img src="resources/nav_icon/nav_side.svg" alt="nav_side">
            </div>
        </div>
        <div class="block_command">
            <div class="group_command">
                <div class="btn_command">
                    <img src="resources/bird_page/play.svg" alt="play">
                </div>
                <div class="btn_command_2">
                    <img src="resources/bird_page/info.svg" alt="info">
                </div>
                <div class="btn_command">
                    <img src="resources/bird_page/images.svg" alt="images">
                </div>
            </div>
            <img src="https://m.nd.edu/graduate_student/resolve-kurogo/_loader/images/dd457a4c4aa778fa43830f1ce53bf133.jpg" alt="<?=$_GET['name']?>" class="img_bird">
        </div>
        <div class="block_infos">
            <p class="name_bird"><?=$_GET['name']?></p>
            <p class="overview">Aperçu</p>
            <p class="desc_bird"><?=$desc_bird?></p>
        </div>
    </body>
</html>