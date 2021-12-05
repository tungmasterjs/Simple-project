 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Quan Ly </h4>
                  <p class="card-category"> Catalog</p>
                </div>
                <div class="card-body">
                  <p><a href="index.php?act=add_cat"><i class="fa fa-edit">Them Danh Muc</i></a></p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          NAME
                        </th>
                        <th>
                          SLUG
                        </th>
                        
                        <th>
                          EDIT
                        </th>
                        <th>
                          Remove
                        </th>
                      </thead>
<?php
    foreach($show_cat as $cat){
       
      echo '<tbody>
                        <tr>
                          <td>
                            '.$cat['id'].'
                          </td>
                          <td>
                            '.$cat['name'].'
                          </td>
                          <td>
                            '.$cat['slug'].'
                          </td>
                          
                          <td class="text-primary">
                           <a href="index.php?act=edit_cat&id_cat='.$cat['id'].'"><i class="fa fa-edit" style="font-size:28px"></i></a>
                          </td>
                          <td>
                           <a href="index.php?act=del_cat&id_cat='.$cat['id'].'"><i class="fa fa-remove" style="font-size:28px"></i></a>
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