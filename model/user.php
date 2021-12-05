<?php
function checklog($user,$pass){
    $sql="Select * from users WHERE username=? AND password=?";
    return pdo_query_one($sql,$user,$pass);
}
function userinfo($id){
    $sql="Select * from users WHERE id=? ";
    return pdo_query_one($sql,$id);
}
function user_insert($user,$email,$name,$pass,$phone,$address){
    $sql="insert into users(username,email,name,password,phone,address) values(?,?,?,?,?,?)";
    pdo_execute($sql,$user,$name,$email,$pass,$phone,$address);
}
function update_user($id,$user, $email,$name,$pass,$phone,$address){
    $sql = "UPDATE users SET username=?,email=?, name=?, password=?, phone=?, address=? WHERE id=?";
    pdo_execute($sql,$id, $user, $email,$name,$pass,$phone,$address);
}

?>