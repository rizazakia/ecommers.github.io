<?php
if($aksi=='index'){
    $data['title']= 'Halaman Login';
    $helpers->load_view('login/login.php');

}
if ($aksi=='login'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cek=$db->query($connect,"SELECT * FROM tuser WHERE username='$username' AND password='$password'");
    if(count($cek)>0){
        $_SESSION['iduser']=$cek[0]['iduser'];
        header('location: '.$base_url);
    }else{
        echo"SELECT FROM tuser WHERE username='$username' AND password='$password'";
        header('location: '.$base_url.'/c_login');
    }
}
if($aksi=='logout'){
    unset($_SESSION['iduser']);
    header('location : '.$base_url);
}