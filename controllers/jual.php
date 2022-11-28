<?php
if($aksi=='index'){
    $helpers->template('Jual/jual.php');
}
if($aksi=='add'){
    $idbarang=$uri[4];
    $data['brg']=$db->query($connect,"SELECT * FROM tbarang WHERE idbarang='$idbarang'");
    $data['jual']=$db->query($connect,"SELECT max(right(idjual,4))AS kdjual FROM tjual");
    $helpers->template('Jual/addjual.php',$data);
}
if($aksi=='save'){
    $idjual=$_POST['idjual'];
    $tgljual=$_POST['tgljual'];
    $idbarang=$_POST['idbarang'];
    $jmlbarang=$_POST['jmlbarang'];
    $totalharga=$_POST['totalharga'];
    $bayar=$_POST['bayar'];
    $kembali=$_POST['kembali'];
    $simpan=$db->qry($connect,"INSERT INTO tjual VALUES('$idjual','$tgljual','$idbarang','$jmlbarang','','$totalharga','$bayar','$kembali','')");
    
    if($simpan){
        header('location:'.$base_url.'jual');
    }else{
        header('location:'.$base_url.'jual/add');
    }
}