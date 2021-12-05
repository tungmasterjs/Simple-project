 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Quan Ly </h4>
                  <p class="card-category"> Comment</p>
                </div>
                <div class="card-body">
                  <!-- <p><a href="index.php?act=add"><i class="fa fa-edit">Them San Pham</i></a></p> -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Iduser
                        </th>
                        <th>
                          Idpro
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          CONTENT
                        </th>
                        <th>
                          Status
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
                            '.$pro['iduser'].'
                          </td>
                          <td>
                            '.$pro['idpro'].'
                          </td>
                          <td>
                            '.$pro['name'].'
                          </td>
                          <td>
                            '.$pro['content'].'
                          </td>
                          <td>
                            '.$pro['status'].'
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