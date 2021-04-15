
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#"> 
        <link rel="shortcut icon" href="#">
    </head>

    <?php require 'request.php' ?>

    <body>
        <?php require 'navbar.html' ?>
        <h1><?php echo "Hey there, I'm Aaron Cheng!" ?></h1>

        <div>
            <?php
                foreach($todos as $todo) {
                    echo "<h2>$todo[title]</h2>\n";
                }
            ?>
        </div>
    </body>


</html>

