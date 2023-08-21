<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Love Language(結果)</title>
    </head>
    <body>
        <p>
            あなたが選んだのは
            <?php echo htmlspecialchars(@$_POST['Q1'], ENT_QUOTES, 'UTF-8'); ?>
            です。
        </p>
        <!--<p>あなたは、<?php echo (int)@$_POST['age']; ?> 歳です。</p>-->
    </body>
</html>