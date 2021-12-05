<?php
    function showpro_by_idcat($id_cat){
        $sql = "select * from product where id_parent='".$id_cat."' order by id desc";
        return pdo_query($sql);
    }
    function showpro_by_id_pro($id_pro){
          $sql = "select * from product where id='".$id_pro."' order by id desc";
        return pdo_query($sql);
    }
     function showcart($whereIn){
          $sql = "select * from product where id in ('".$whereIn."')";
        return pdo_query($sql);
    }
    function showallpro(){
        $sql= "select * from product order by id desc ";
        return pdo_query($sql);
    }
    function pro_bestsell(){
        $sql= "select * from product where best_sell='1' order by id desc ";
        return pdo_query($sql);
    }
    function del_pro($id_del){

    $sql = "Delete from product where id='".$id_del."'";
   pdo_execute($sql,$id_del);
}
    function update_pro($name,$price_unit,$price_pro,$content,$id){

    $sql = "UPDATE product SET name=?, price_unit=?, price_pro=?, content=? WHERE id=?";
    pdo_execute($sql,$name,$price_unit,$price_pro,$content,$id);
}
function add_pro($name,$slug,$image,$price_unit,$price_pro,$content){
    $sql="insert into product(name,slug,image,price_unit,price_pro,content) values(?,?,?,?,?,?)";
    pdo_execute($sql,$name,$slug,$image,$price_unit,$price_pro,$content);
     }
// function showallorder(){
//     $sql = "SELECT * FROM order ORDER BY id DESC  ";
//     $kq= pdo_query($sql);
//      pdo_execute($sql);
// }
?>