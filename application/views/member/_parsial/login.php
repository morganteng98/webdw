
<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Masuk</h4>
          <button type="close" class="btn btn-close" data-dimiss="modal">&times;</button>
        </div>
        <form method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label" for="username">Username</label>
              <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">reset</button>
            <input type="submit" class="btn btn-success" name="tambah" value="simpan">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>