<?php

function checklog($user,$pass){
    $sql="select * from admin where user='".$user."' and pass='".$pass."'";
   // echo $sql;
    
    return pdo_query_one($sql,$user,$pass);
}

?>