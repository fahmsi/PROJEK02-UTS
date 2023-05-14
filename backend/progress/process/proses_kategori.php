<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_tipe_motor = $_POST['tipe_motor'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_tipe_motor; // ? 2
   
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe_motor (id,tipe_motor) VALUES (?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE tipe_motor SET id=?,tipe_motor=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../../pages/kategori.php');
?>