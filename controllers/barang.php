<?php 
if($aksi=='index'){
    $data['barang']=$db->query($connect,"SELECT * FROM vbarang");
    $helpers->load_view('Barang/barang.php',$data);
}
if($aksi=='add'){
    $data['kdbarang']=$db->query($connect,"SELECT max(idbarang) as kodebarang FROM tbarang");
    $data['jenisbarang']=$db->query($connect, "SELECT * FROM tjenis");
    $data['distri']=$db->query($connect, "SELECT * FROM tdistributor");
    $helpers->load_view('Barang/addbarang.php',$data);
}
if($aksi=='save'){
    $idbarang=$_POST['idbarang'];
    $nmbarang=$_POST['nmbarang'];
    $idjenis=$_POST['idjenis'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];
    $iddist=$_POST['iddist'];
    $status=1;
    $simpan=$db->qry($connect,"INSERT INTO tbarang VALUES('$idbarang','$nmbarang','$idjenis','$stok','$harga',' $iddist','$status')");
        if($simpan)
            header('location'.$base_url.'barang');
        else{
            header('location'.$base_url.'barang/add');
        }
}