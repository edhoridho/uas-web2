<?php
include 'connection.php';
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM dosen WHERE id = $id ");
echo "<script>window.location.href ='?page=dosen';</script>";

?>