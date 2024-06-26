<?php
if (isset($_GET["id"])) {
   $id = $_GET["id"];

   $servername="localhost";
    $username="root";
    $password="cutentag12";
    $database="myshop";

    $connection = new mysqli($servername,$username,$password,$database);

    $sql="DELETE FROM clients where id=$id";
    $connection->query(($sql));

    header("location: /myshop/index.php");
    exit;
}
?>