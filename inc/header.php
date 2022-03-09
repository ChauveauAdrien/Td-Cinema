<?php

include_once('./vendor/autoload.php');
// require_once('../Td-cinema/functions.php');
?>

<header class="header-wrapper">
    <nav>
        <div class="burger-menu">
            <div class="top-line"></div>
            <div class="mid-line"></div>
            <div class="bot-line"></div>
        </div>
        <a href="http://td-cinema.test/">Cine<span><img src="./assets/img/popcorn.svg" alt="popcorn logo info ciné" class="logo"></span>nfo</a>
        <div class="blank">
            <form action="http://td-cinema.test/search.php" method="post">
                <input type="search" name="search">
                <button type="submit">search</button>
            </form>
        </div>
            
    </nav>
</header>