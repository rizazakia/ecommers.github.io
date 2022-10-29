<?php
if($aksi=='index'){
    $data['title']= 'Halaman Login';
    $helpers->load_view('templates/header.php',$data);
    $helpers->load_view('login/login.php');
    $helpers->load_view('templates/footer.php');

}