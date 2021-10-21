
<?php 

require_once("koneksi.php");

$nim = $_GET['nim'];

$sql_delete = "DELETE FROM mahasiswa WHERE nim = '$nim'";
mysqli_query($con, $sql_delete);

header("Location:index.php");

 ?>