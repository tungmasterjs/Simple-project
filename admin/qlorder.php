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
                          Name
                        </th>
                        <th>
                          NAME
                        </th>
                        <th>
                          address
                        </th>
                        <th>
                          phone
                        </th>
                        <th>
                          total
                        </th>
                        <th>
                          status
                        </th>
                       
                      </thead>
<?php
    foreach($showall as $pro){
       
      echo '<tbody>
                        <tr>
                          <td>
                            '.$pro['id'].'
                          </td>
                         
                          <td>
                            '.$pro['name'].'
                          </td>
                          <td>
                            $'.$pro['address'].'
                          </td>
                          <td>
                            $'.$pro['phone'].'
                          </td>
                          <td>
                            '.$pro['total'].'
                          </td>
                         
                          <td>
                            '.$pro['id_user'].'
                          </td>
                          
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