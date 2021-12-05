 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Quan Ly </h4>
                  <p class="card-category"> Product</p>
                </div>
                <div class="card-body">
                  <p><a href="index.php?act=add"><i class="fa fa-edit">Them San Pham</i></a></p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          IMAGE
                        </th>
                        <th>
                          NAME
                        </th>
                        <th>
                          PRICE PROMOTION
                        </th>
                        <th>
                          PRICE UNIT
                        </th>
                        <th>
                          CONTENT
                        </th>
                        <th>
                          EDIT
                        </th>
                        <th>
                          Remove
                        </th>
                      </thead>
<?php
    foreach($showpro as $pro){
       
      echo '<tbody>
                        <tr>
                          <td>
                            '.$pro['id'].'
                          </td>
                          <td>
                            <img style="height:80px;width:80px;" src="../view/upload/'.$pro['image'].'" alt="">
                          </td>
                          <td>
                            '.$pro['name'].'
                          </td>
                          <td>
                            $'.$pro['price_pro'].'
                          </td>
                          <td>
                            $'.$pro['price_unit'].'
                          </td>
                          <td>
                            '.$pro['content'].'
                          </td>
                          <td class="text-primary">
                           <a href="index.php?act=edit&id_pro='.$pro['id'].'"><i class="fa fa-edit" style="font-size:28px"></i></a>
                          </td>
                          <td>
                           <a href="index.php?act=del_pro&id_pro='.$pro['id'].'"><i class="fa fa-remove" style="font-size:28px"></i></a>
                          </td>
                        </tr>
                      </tbody>';
    }
?>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>