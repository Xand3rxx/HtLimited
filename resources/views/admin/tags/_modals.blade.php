<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered wd-sm-650" role="document">
      <div class="modal-content tx-14">
        <div class="modal-header">
          <h6 class="modal-title"> Create New Tag</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-x-25 pd-sm-x-30 pd-t-40 pd-sm-t-20 pd-b-15 pd-sm-b-20" >
            <form method="POST" action="{{ route('admin.tags.store') }}">
                @csrf
                <div class="row gutters">
                    <div class="col-12 col-md-12">
                        <label for="firstname" class="col-form-label">Tag Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required>
                        @error('name')
                            <x-alert :message="$message" />
                        @enderror
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div><!-- modal-body -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->


  <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered wd-sm-650 " role="document">
      <div class="modal-content tx-14">
        <div class="modal-header">
          <h6 class="modal-title">Edit Tag</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-x-25 pd-sm-x-30 pd-t-40 pd-sm-t-20 pd-b-15 pd-sm-b-20" id="modal-edit-body">
          <!-- Modal displays here -->
          <div id="spinner-icon-3"></div>
        </div><!-- modal-body -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
