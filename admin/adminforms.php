  <!-- add items to stock Modal-->
  <div class="modal fade" id="addStockItems" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add items to the Stock</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">
                  Use this form to add new items to the stock.
                  <!-- add stock form -->
                  <form class="form-horizontal" action="includes/scripts.php" method="POST">
                      <div class="form-group row mt-3">
                          <div class="col-md-12">
                              <input class="form-control" type="text" required="" placeholder="username" name="userName">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Select Item Category</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Item name</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <input class="form-control" type="password" required="" placeholder="Password" name="password">
                          </div>
                      </div>
                  </form>

              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <form action="../logout.php" method="POST">
                      <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                  </form>
              </div>
          </div>
      </div>
  </div>