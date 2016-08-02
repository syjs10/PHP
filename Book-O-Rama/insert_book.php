<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Book-O-Rama New Book Entry Result</title>
    </head>
    <body>
        <h1>Book-O-Rama New Book Entry Result</h1>
        <?php
            //create shot variable name
            $isbn = $_POST['isbn'];
            $author = $_POST['author'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            if (!$isbn || !$author || !$title || !$price) {
                echo "Please input all detial";
                exit;
            }
            if (!get_magic_quotes_gpc()){
                $isbn = addslashes($isbn);
                $author = addslashes($author);
                $title = addslashes($title);
                $price = addslashes($price);
            }
            @ $db = new mysqli('Localhost', 'bookorama', 'bookorama123', 'books');
            if (mysqli_connect_errno()){
                echo "Can't connect database";
                exit;
            }
            $query = "insert books values
                        ('".$isbn."', '".$author."', '".$title."', '".$price."')";
            $result = $db -> query($query);
            if ($result) {
                echo $db -> affected_rows. "book inserted into database.";
            } else {
                echo "An error has occurred!";
            }
            $db -> close();
        ?>
    </body>
</html>
