<script>
    function deleteAuthor(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('authors.destroy',['%author%']) }}".replace('%author%',id),
                    data:{
                      '_token' : '{{csrf_token()}}'
                    },
                    type: "DELETE",
                    success: (e)=>{
                        Swal.fire('Success','The Author has been deleted','success').then(()=>{
                            location.reload();
                        })
                    },
                    error: (e)=>{
                        Swal.fire('Error','the author has not been deleted successfuly!','error' )
                    }
                }).done(function(){
                });
                {{--window.open("{{ route('authors.destroy',['%author%']) }}".replace('%author%',id))--}}
            }

        })
    }

    function editAuthor(id,name){
        $('#edit_author_modal').modal('show')
        $('#update_name').val(name).parent().addClass('is-filled')
        $('#edit_author_form').attr('action', "{{ route('authors.update',['%author%']) }}".replace('%author%',id));

    }

</script>

