<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="table-controls">
                <li class="mb-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle btn-sm"
                            type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Change Role
                        </button>
                        <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton">
                            @foreach ($user->role as $role)
                                <a class="dropdown-item"
                                    href="{{ route('admin.user-role', ['id' => $user->id, 'status' => $status]) }}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>