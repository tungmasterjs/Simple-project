<?php

require '../view/dao/pdo.php';
require '../view/dao/comment.php';

// $name=$_POST['name'];
// $email=$_POST['email'];
// $content=$_POST['mess'];
// $idpro=$_GET['id_pro'];
$name='tim';
$email='tim';
$content='tim';
$idpro='1';

 cmt_insert($name,$email,$content,$idpro);
// $dsbl=loai_select_all();
// $kq="";
// foreach ($dsbl as $dsbl) {
//     extract($dsbl);
//     $kq.="<strong>".$name."</strong><br>(".$email.") <br>".$content."<hr>";
// }
// echo $kq;

?>;