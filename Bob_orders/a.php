<?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    $fp = fopen("$DOCUMENT_ROOT/orders/orders.txt", 'w');
    var_dump($fp);
    echo $DOCUMENT_ROOT;
 ?>
