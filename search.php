<?php
require_once('../Td-cinema/functions.php');
$page = get_page();
$subpage = $page-1;
$addpage = $page+1;

if (is_search_exist()) {
    $search_movies = search_movies($_POST['search']);
}else {
    header('Location : http://td-cinema.test/');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineInfo</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <?php
        require_once('../Td-cinema/inc/header.php')
    ?>
    <h1>Vous avez recherché : <?= $_POST['search'] ?></h1>
    <section class="cards">
        <?php 
            foreach ($search_movies ->results as $key => $value) {
                echo "<a href=\"http://td-cinema.test/details.php?film=$value->id\"><div class=\"card\">
                        <div class=\"image\">
                            <img src=\"https://image.tmdb.org/t/p/original$value->poster_path\" class=\"poster\">
                        </div>
                        <div class=\"info-film\">
                            <p class=\"title\">$value->title</p>
                        </div>
                        
                    </div></a>";
            }
        ?>

    </section>
    <div class="pagination">
        <?php 
            if ($page > 1) {
                echo "<button><a href=\"http://td-cinema.test?page=$subpage\">prev</a></button>";
            }
        ?>
        <button><a href="http://td-cinema.test?page=<?php echo $addpage ?>">next</a></button>
    </div>



<!-- ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

