<!-- create Modal -->
<div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="addAuthorModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-normal" id="exampleModalLabel">Create Author</h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action = "{{route('authors.store')}}" >
                    @csrf
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Author's Name</label>
                        <input name="name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gradient-primary">Save Author</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- update modal -->
<div class="modal fade" id="edit_author_modal" tabindex="-1" role="dialog" aria-labelledby="edit_author_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-normal" id="exampleModalLabel">Update Author</h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit_author_form" method="post" action = "" >
                    @method('PUT')
                    @csrf
                    <div class="input-group input-group-outline my-3">

                        <label class="form-label">Author's Name</label>
                        <input name="name" id="update_name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gradient-primary">Save Author</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

