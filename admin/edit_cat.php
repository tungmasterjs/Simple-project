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
                      <div class="table-responsive"></div>
                        
                        <?php 
                         // var_dump($edit_cat);
                        foreach ($edit_cat as $edit ) {
                          echo' 
                          <form action="?act=edit_cat&id_cat='.$edit['id'].'" method="post">
                          <div class="form-row">
                                                    <div class="form-group col-md-12">

                                                      <label for="name">NAME</label>
                                                      <input type="text" class="form-control" name="name" value="'.$edit['name'].'">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="slug">Slug</label>
                                                      <input type="text" class="form-control" name="slug" value="'.$edit['slug'].'">
                                                    </div>
                                                    
                                                    
                                                  </div>    
                                                     <button type="submit" value="updated" name="updated" class="btn btn-primary">Update</button>
                                                     <input type="hidden" name="id_cat" value="'.$edit['id'].'">
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