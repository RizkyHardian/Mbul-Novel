<?php
session_start();
require "conn.php";
$id =$_GET['id'];
$section =$_GET['section'];  
$query = mysqli_query($conn, "DELETE FROM $section
                    WHERE id=$id");
if($query){
echo "<script>alert('Novel Berhasil Di Hapus')
document.location.href = 'admin.php';
</script>";
}else{
echo error_log($query);
}
?>