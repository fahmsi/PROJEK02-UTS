<?php 
require_once '../../../database/dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama_merk = $_POST['nama_merk'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nama_merk; // ? 2
   
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (id,nama_merk) VALUES (?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET id=?,nama_merk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../../pages/merk.php');
?>