<!-- Modal -->
<div class="modal " id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Record </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" id="id-product">
          <div class="row">
            <div class="col-lg-12 ">
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Code</span>
                    </div>
                    <input type="text" class="form-control" id="Code-product" placeholder="Code" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>            
          </div>
          <div class="row">
            <div class="col-lg-12 ">
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">weight</span>
                      </div>
                      <input type="number" class="form-control"  id="weight-product" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
            </div>            
          </div>
          <div class="row">
            <div class="col-lg-12 ">
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Product</span>
                      </div>
                      <input type="number" class="form-control" id="Product-cow" placeholder="Product" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
            </div>            
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="button-insert" onclick="Insert()" class="btn btn-primary">Save changes</button>
        <button type="button" id="button-update" onclick="Update()" style="display:none" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
