<?php
require_once 'pdo.php';

// function cmt_insert($name,$email,$content,$idpro){
//     $sql = "INSERT INTO comment(name,email,content,idpro) VALUES(?,?,?,?)";
//     pdo_execute($sql,$name,$email,$content,$idpro);
// }
function cmt($iduser,$idpro,$name,$content){
    $sql = "INSERT INTO comment(iduser,idpro,name,content) VALUES(?,?,?,?)";
    pdo_execute($sql,$iduser,$idpro,$name,$content);
}

function showallcmt(){
    $sql = "SELECT * FROM comment  ORDER BY id DESC ";
    return pdo_query($sql);
}
function showcmt($idpro){
    $sql = "SELECT * FROM comment where idpro=? ORDER BY id DESC ";
    return pdo_query($sql,$idpro);
}

?>