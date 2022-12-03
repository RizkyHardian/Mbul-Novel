<?php
// $conn = mysqli_connect("localhost", "id19709574_mbulnovel", "jVY6>n?(_qAi2ifR", "id19709574_mbul");
$conn = mysqli_connect("localhost", "root", "", "mbul");
if (!$conn){
    die("Gagal terhubung ke database!".mysqli_connect_error());
}
?>