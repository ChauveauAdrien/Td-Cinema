<?php
    require_once('./functions.php');
    $film_id = verify_films_id();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineInfo</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="details-body">
    <!-- background image -->
<?php
echo "<style>
        .details-body{
            background-image: url('https://image.tmdb.org/t/p/original$film_id->backdrop_path');
        }
    </style>";
?>

<div class="greyscale">
    <?php
        require_once('../Td-cinema/inc/header.php');
    ?>
    <div class="content-wrapper">
            <?php
                echo "<div class=\"content\">
                        <div class=\"left\">
                            <p class=\"details-title\">$film_id->title</p> 
                            <div class=\"pills\">";
                        
                            foreach ($film_id->genres as $key => $value) {
                                echo "<div class=\"pill\">
                                        <p>$value->name</p>
                                      </div>";
                            }
                        
                    echo    "</div>
                        </div>
                        <div class=\"right\">
                            <h1>Synopsis</h1>
                            <p class=\"details-overview\">$film_id->overview</p>
                        </div>
                    </div>";

            ?>
    </div>






</div>
</body>
</html>

