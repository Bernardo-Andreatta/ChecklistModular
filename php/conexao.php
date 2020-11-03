<?php
try {
    $pdo = new PDO("mysql:dbname=checklist;host=127.0.0.1","root","");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>