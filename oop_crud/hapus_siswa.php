<?php 
    require "class/dasis.php";

    $id = $_GET["id"];
    
    $dasis = new dasis;
    $dasis->hapus_dasis($id);
    header("location: siswa.php");

?>