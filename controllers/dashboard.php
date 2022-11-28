<?php 
$helpers->isLoggedin();
if($aksi =='index'){
$helpers->template('dashboard.php');
}
