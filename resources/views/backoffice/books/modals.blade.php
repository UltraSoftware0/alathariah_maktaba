<!-- create Modal -->
<div class="modal fade" id="create_book_modal" tabindex="-1" role="dialog" aria-labelledby="create_book_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-normal" id="create_book_modal">Create Book</h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action = "{{route('books.store')}}" >
                    @csrf
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Book's Name</label>
                        <input name="name" class="form-control">
                    </div>

                    <div id="tom-select-dvi" class="col-12">
                        <select class="select-beast" id="select-beast" placeholder="Select a author..." autocomplete="off">
                            <option selected value="">Select an author</option>
                        </select>
                    </div>


                    <div class="input-group input-group-static my-3">
                        <label>PDF file</label>
                        <input type="file" name="pdf_file" id="pdf_file" class="form-control">
                    </div>


                    <div class="input-group input-group-static my-3">
                        <label>OMNI file</label>
                        <input type="file"  name="omni_file" id="omni_file" class="form-control">
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gradient-primary">Save Book</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- update modal -->
<div class="modal fade" id="edit_book_modal" tabindex="-1" role="dialog" aria-labelledby="edit_book_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-normal" id="exampleModalLabel">Update Book</h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit_book_form"  enctype="multipart/form-data" method="post" >
                    @method('PUT')
                    @csrf

                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Book's Name</label>
                        <input id="book-name-update" name="name" class="form-control">
                    </div>

{{--                    <div id="tom-select-update-dvi" class="col-12">--}}
{{--                        <select class="select-beast" id="select-beast-update" placeholder="Select a author..." autocomplete="off">--}}
{{--                            <option selected value="">Select an author</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Author</label>
                        <select  class="form-control" id="select-update" >

                        </select>
                    </div>



                    <div class="input-group input-group-static my-3">
                        <label>PDF file</label>
                        <input id="book-pdf-update" name="pdf_file" type="file" class="form-control">
                    </div>


                    <div class="input-group input-group-static my-3">
                        <label>MOBI file</label>
                        <input id="book-mobi-update" name="mobi_file" type="file" class="form-control">
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gradient-primary">Save Book</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

