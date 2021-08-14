<!-- Modal -->
<div class="modal " id="Modaltruck" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New truck </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>          
         
          <div class="row">
            <div class="col-lg-12 ">
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Weight of truck</span>
                      </div>
                      <input type="number" class="form-control"  id="weight-truck" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
            </div>            
          </div>
          <div class="row">
            <h2> Cow Select</h2>
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Code</th>
                      <th scope="col">weight</th>
                      <th scope="col">MilkProduct</th>
                    </tr>
                  </thead>
                  <tbody id="table-truck">
                  
                  </tbody>
                </table>
              </div>
          </div>
        
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="button-insert" onclick="Calculate()" class="btn btn-primary">Calculate</button>
      </div>
    </div>
  </div>
</div>
