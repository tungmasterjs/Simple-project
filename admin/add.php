 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Quan Ly</h4>
                  <p class="card-category"> Add Product</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="?act=add" method="post"  enctype= "multipart/form-data">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placehodler="name">
                      </div>
                      <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                      </div>

                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  multiple="multiple" value="" name="file">
                        <label class="custom-file-label" for="file">Choose file</label>
                      </div>
                      
                      <div class="form-group">
                        <label for="pu">Price Unit</label>
                        <input type="text" class="form-control" name="price_unit" id="pu" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="pp">Price Pro</label>
                        <input type="text" class="form-control" name="price_pro" id="po" placeholder="">
                      </div>
                       <div class="form-group">
                        <label for="cont">Content</label>
                        <input type="text" class="form-control" name="content" id="cont" placeholder="content">
                      </div>
                      <!--  <div class="form-group">
                        <label for="dm">Danh Muc</label>
                        <input type="text" class="form-control" id="dm" placeholder="id_parent">
                      </div> -->
                    <button type="submit" value="add_pro" name="add_pro"class="btn btn-primary">Submit</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      