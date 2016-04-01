<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pok&eacute;Park Rotterdam</title>
</head>
<link rel="stylesheet" href="style.css"/>
<body>

<h1><img src="logo.png" style="width:350px;height:auto;"></h1>

<div class="container">
    <header>
        <nav>
            <ul>
                <li><a href=index.php>Home</a></li>
                <li><a href=gameplay.php>Gameplay</a></li>
                <li><a href=list.php>List</a></li>
                <li><a href=weather.php class="active">Weather</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="first">
            <h2>Current Weather</h2>
            <p>Here comes the current weather display</p>
        </div>
    </main>

    <div class="first">
        <div class="calm">
        <h3><img src="calm.png" style="width:40px;height:auto;">Calm</h3>
        <p>
            The weather is calm and peaceful, a lot of Pok&eacute;mon will be around this time!<br>
            Appearing Types:<br>
            <img src="normaltype.png" style="width:70px;height:auto;">
            <img src="grasstype.png" style="width:70px;height:auto;">
            <img src="bugtype.png" style="width:70px;height:auto;">
            <img src="groundtype.png" style="width:70px;height:auto;">
            <img src="poisontype.png" style="width:70px;height:auto;">
        </p>
        </div>

        <div class="sunny">
        <h3><img src="sunny.png" style="width:40px;height:auto;">Sunny</h3>
        <p>
            It is hot outside which means Fire Pok&eacute;mon are more common to appear!<br>
            Appearing Types:<br>
            <img src="firetype.png" style="width:70px;height:auto;">
            <img src="grasstype.png" style="width:70px;height:auto;">
            <img src="fightingtype.png" style="width:70px;height:auto;">
            <img src="fairytype.png" style="width:70px;height:auto;">
        </p>
        </div>

        <div class="rainy">
        <h3><img src="rainy.png" style="width:40px;height:auto;">Rainy</h3>
        <p>
            Once its raining you might want to get wet as the Water Pok&eacute;mon are very active during this time!<br>
            Appearing Types:<br>
            <img src="watertype.png" style="width:70px;height:auto;">
            <img src="rocktype.png" style="width:70px;height:auto;">
            <img src="psychictype.png" style="width:70px;height:auto;">
        </p>
        </div>
    </div>

    <div class="second">
        <div class="windy">
            <h3><img src="windy.png" style="width:40px;height:auto;">Windy</h3>
            <p>
                Once it is windy outside Flying type Pok&eacute;mon like to soar through the air as well as other types like Bug!<br>
                Appearing Types:<br>
                <img src="flyingtype.png" style="width:70px;height:auto;">
                <img src="psychictype.png" style="width:70px;height:auto;">
                <img src="ghosttype.png" style="width:70px;height:auto;">
                <img src="fairytype.png" style="width:70px;height:auto;">
            </p>
        </div>

        <div class="stormy">
            <h3><img src="stormy.png" style="width:40px;height:auto;">Stormy</h3>
            <p>
                In this dreadful weather it might be cool to go outside to catch some Dragon or Dark Pok&eacute;mon!<br>
                Appearing Types:<br>
                <img src="electrictype.png" style="width:70px;height:auto;">
                <img src="darktype.png" style="width:70px;height:auto;">
                <img src="rocktype.png" style="width:70px;height:auto;">
                <img src="dragontype.png" style="width:70px;height:auto;">
            </p>
        </div>

        <div class="icy">
            <h3><img src="icy.png" style="width:40px;height:auto;">Icy</h3>
            <p>
                Once the cold begins to settle try to go outside and catch some nice Ice Pok&eacute;mon.<br>
                Appearing Types:<br>
                <img src="icetype.png" style="width:70px;height:auto;">
                <img src="steeltype.png" style="width:70px;height:auto;">
            </p>
        </div>
    </div>
<footer>
    &copy; CMGT 2015-2016
</footer>
</div>
</body>
</html>
