<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop'; 
    $username = 'root'; 
    $password = 'andymix'; //'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>