<?php 
$conn = new mysqli('localhost','root','root','todos');

if ($conn->connect_error){
    die($conn->connect_error);
}
?>
