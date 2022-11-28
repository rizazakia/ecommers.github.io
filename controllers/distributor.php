<?php
if($aksi=='index'){
    $data['distributor']=$db->query($connect,"SELECT * FROM tdistributor");
    $helpers->template('distributor/distributor.php',$data);
}
if($aksi=='Add'){
    $helpers->template('distributor/adddistributor.php');
}
if($aksi=='Save'){
    $nmdist=$_POST['nmdist'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $simpan=$db->qry($connect,"INSERT INTO tdistributor VALUES('','$nmdist','$alamat','$notelp')");
    if($simpan)
        header('location:'.$base_url. 'distributor');
    else{
        header('location:'.$base_url. 'distributor/Add');
    }
}