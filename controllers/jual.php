<?php
if($aksi=='index'){
    $helpers->load_view(['Jual/jual.php']);
}
if($aksi=='add'){
    $idbarang=$uri[4];
    $data['brg']=$db->query($connect,"SELECT * FROM tbarang WHERE idbarang='$idbarang'");
    $data['jual']=$db->query($connect,"SELECT max(right(idjual,4))AS kdjual FROM tjual");
    $helpers->load_view('Jual/addjual.php',$data);
}