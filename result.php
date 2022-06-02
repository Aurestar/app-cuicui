<?php
    session_start();
    $desc_bird = "Le Merlebleu de l'Est (Sialia sialis) est une espèce de passereaux appartenant à la famille des Turdidae, mesurant de 16,5 à 19 cm. Il vit en Amérique du Nord et en Amérique centrale. Son nom anglais est Eastern Bluebird.";
    $_SESSION['name_1'] = 'Rossignol';
    $_SESSION['desc_1'] = $_POST['desc_1'];

    $_SESSION['name_2'] = $_POST['name_2'];
    $_SESSION['desc_2'] = $_POST['desc_2'];

    $_SESSION['name_3'] = $_POST['name_1'];
    $_SESSION['desc_3'] = $_POST['desc_1'];
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result - Cui-cui</title>
        <link rel="stylesheet" media="screen and (min-device-width: 11px)" href="styles/style_result.css">
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
                <p class="title_page">Vos Résultats</p>
                <img src="resources/nav_icon/nav_side.svg" alt="nav_side">
            </div>
        </div>
        <div class="group_fonction">
            <a href="bird.php?name=name_1">
                <div class="thumbnail">
                    <img src="resources/img_test/rossignol.png" alt="rossignol" class="img_thumbnail">
                    <p class="name_bird">Rossignol</p>
                    <p class="probability">100% de probabilité</p>
                </div>
            </a>
            <a href="bird.html?name=">   
                <div class="thumbnail">
                    <img src="resources/img_test/merlebleu.png" alt="merlebleu" class="img_thumbnail">
                    <p class="name_bird">Merlebleu</p>
                    <p class="probability">42% de probabilité</p>
                </div>
            </a>
            <a href="bird.html?name=">   
                <div class="thumbnail">
                    <img src="resources/img_test/pigeon.png" alt="pigeon" class="img_thumbnail">
                    <p class="name_bird">Pigeon</p>
                    <p class="probability">18% de probabilité</p>
                </div>
            </a>
            <a href="bird.html?name=">    
                <div class="thumbnail">
                    <img src="resources/img_test/aigle.png" alt="aigle" class="img_thumbnail">
                    <p class="name_bird">Aigle</p>
                    <p class="probability">3% de probabilité</p>
                </div>
            </a>
            <a href="bird.html?name=">    
                <div class="thumbnail">
                    <img src="resources/img_test/aigle.png" alt="aigle" class="img_thumbnail">
                    <p class="name_bird">Aigle</p>
                    <p class="probability">3% de probabilité</p>
                </div>
            </a>   
        </div>
        <div class="margin_nav_bar"></div>
    </body>
</html>