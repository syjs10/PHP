<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Book-O-Rama Search Result</title>
    </head>
    <body>
        <h1>Book-O-Rama Search Result</h1>
        <?php
            //create shot varible name
            $searchtype = $_POST['searchtype'];
            $searchterm = trim($_POST['searchterm']);
            if(!$searchtype || !$searchterm){
                echo "You haven't input search details, Please go back and try again";
                exit;
            }
            //转义没转义的“”
            if(!get_magic_quotes_gpc()){
                $searchtype = addslashes($searchtype);
                $searchterm = addslashes($searchterm);
            }
            @ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');
            if (mysqli_connect_errno()){
                echo "Can't connet datebase";
                exit;
            }
            $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
            $result = $db -> query($query);//对象方法

            //$result = mysqli_query($db, $query);//过程方法
            // if (!$data) {      //处理数据库错误时候排排错方法
            //     printf("Error:%s\n",mysqli_error($db));
            //     exit();
            // }

            $num_results = $result->num_rows;//对象方法
            //$num_results = mysqli_num_rows($result);//过程方法

            echo "<p>Number of books found: ".$num_results."</p>";
            for ($i = 0; $i < $num_results; $i++) {
                $row = $result -> fetch_assoc();
                echo "<p><strong>".($i+1).". Title: ";
                echo htmlspecialchars(stripslashes($row['title']));
                echo "</strong><br />Author: ";
                echo stripslashes($row['author']);
                echo "<br />ISBN: ";
                echo stripslashes($row['isbn']);
                echo "<br />Price: ";
                echo stripslashes($row['price']);
                echo "</p>";
            }
            $result->free();
            $db -> close();
            
        ?>
    </body>
</html>
