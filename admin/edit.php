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
                      <div class="table-responsive"></div>
                      
                        <?php foreach ($edit as $edit ) {
                          // var_dump($edit);
                          echo' 
                          <form action="?act=edit&id_pro='.$edit['id'].'" method="post">
                          <div class="form-row">
                                                    <div class="form-group col-md-12">

                                                      <label for="name">NAME</label>
                                                      <input type="text" class="form-control" name="name" value="'.$edit['name'].'">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="price_unit">PRICE UNIT</label>
                                                      <input type="text" class="form-control" name="price_unit" value="'.$edit['price_unit'].'">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="price_pro">PRICE PROMOTION</label>
                                                      <input type="text" class="form-control" name="price_pro" value="'.$edit['price_pro'].'">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="content">CONTENT</label>
                                                      <input type="text" class="form-control" name="content" value="'.$edit['content'].'">
                                                    </div>
                                                    
                                                  </div>    
                                                     <button type="submit" value="updated" name="updated" class="btn btn-primary">Update</button>
                                                     <input type="hidden" name="id" value="'.$edit['id'].'">
                                            </form>  
                                                              ';
                        }

                         
                        ?>
                                                         
                                                  
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>