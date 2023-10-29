<!-- Modal -->
               <div class="modal fade" id="form_users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form id="user_form" onsubmit="return false">
                           <div class="form-group">
                              <label>User Name</label>
                              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User Name">
                              <small id="user_error" class="form-text text-muted"></small>
                           </div>
                               <button type="submit" class= "btn btn-primary">Add</button>
                     </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>