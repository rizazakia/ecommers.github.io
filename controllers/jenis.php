<?php
if($aksi=='index'){
    
    $data['jenis']=$db->query($connect,"SELECT * FROM tjenis");
    $d['title'] = "Jenis";
    $helpers->load_view('templates/header.php',$d);
    $helpers->load_view('jenis/jenis.php',$data);
    $helpers->load_view('templates/footer.php');
}
if($aksi=='Add'){
    $helpers->load_view('jenis/addjenis.php');
}
if($aksi=='Save'){
    $jenisbarang=$_POST['jenisbarang'];
    $ket=$_POST['ket'];
    $simpan=$db->qry($connect,"INSERT INTO tjenis VALUES('','$jenisbarang','$ket')");
    if($simpan)
        header('location:'.$base_url. 'jenis');
    else{
        header('location:'.$base_url. 'jenis/Add');
    }
}