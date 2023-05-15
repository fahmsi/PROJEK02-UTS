<?php 
require_once '../../../database/dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama_pelanggan = $_POST['nama_pelanggan'];
   $_alamat_pelanggan = $_POST['alamat_pelanggan'];
   $_motor_id = $_POST['motor_id'];
   $_quantity = $_POST['quantity'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nama_pelanggan; // ? 2
   $ar_data[]=$_alamat_pelanggan;
   $ar_data[]=$_motor_id;
   $ar_data[]=$_quantity;
   
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id,nama_pelanggan,alamat_pelanggan,motor_id,quantity) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET id=?,nama_pelanggan=?,alamat_pelanggan=?,motor_id=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:../../pages/pesanan.php');
?>