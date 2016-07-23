<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
            img{
                width: 1200px;
                height: 600px;
                padding: 0px;
                margin: 0px;
            }
        </style>
    </head>
    <body>
        <?php
            $array1 = range(1,5);
            shuffle($array1);
            echo "<img src = \"pic/".$array1[0].".jpg\">";
        ?>
    </body>
</html>
