<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Love Language</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if(isset($_POST['Q1_A'])) {
                $Q1_A = $_POST['Q1_A'];
            echo $Q1_A;
            }
        ?>
    </body>
</html>