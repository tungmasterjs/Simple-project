<?php
    require_once 'pdo.php';
    function loadcat(){
        $sql="select * from catalog ";
        return pdo_query($sql);
    }
    function showcat_by_id_cat($id_cat){
          $sql = "select * from catalog where id='".$id_cat."' ";
        return pdo_query($sql);
    }
    function update_cat($name,$slug,$id){

    $sql = "UPDATE catalog SET name=?, slug=? WHERE id=?";
    pdo_execute($sql,$name,$slug,$id);
}
 function del_cat($id_del){
    $sql = "Delete from catalog where id='".$id_del."'";
   pdo_execute($sql,$id_del);
}
function add_cat($name,$slug){
    $sql="insert into catalog(name,slug) values(?,?)";
    pdo_execute($sql,$name,$slug);
     }
?>