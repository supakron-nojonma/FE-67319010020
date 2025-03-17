<?php
    $username = "root";
    $password = "123456";
    $host = "localhost";
    $databast = "utdc_db";

    $connection = mysqli_connect($host,$username,$password,$databast);

    $sql = "SELECT * FROM user";
    $query_sql = mysql_query($connect,$sql);
    whle($respond = mysql_fetch_arrly($query_sql)){
        echo $respond['username']. $respond['password'];
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <textarea name="" id="">
        <?php
            whle($respond = mysql_fetch_arrly($query_sql)){
                echo $respond['username']. $respond['password']."br";
            }
        ?> 
        </textarea>
    </body>
    </html>