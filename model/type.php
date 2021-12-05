<?php
require_once 'pdo.php';

// function loai_insert($ten_loai,$hinh){
//     $sql = "INSERT INTO loai(tenloai,hinh) VALUES(?,?)";
//     pdo_execute($sql, $ten_loai,$hinh);
// }

// function loai_update($ma_loai, $ten_loai){
//     $sql = "UPDATE loai SET tenloai=? WHERE ma_loai=?";
//     pdo_execute($sql, $ten_loai, $ma_loai);
// }

// function loai_delete($ma_loai){
//     $sql = "DELETE FROM loai WHERE ma_loai=?";
//     if(is_array($ma_loai)){
//         foreach ($ma_loai as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_loai);
//     }
// }

// function loai_select_all(){
//     $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
//     return pdo_query($sql);
// }

function loai_select_by_id($id_cat){
    $sql = "SELECT * FROM Catalog WHERE id=?";
    return pdo_query_one($sql, $id_cat);
}

// function loai_exist($ma_loai){
//     $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
//     return pdo_query_value($sql, $ma_loai) > 0;
// }
?>