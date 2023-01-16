<script>
    $('#create_book_modal').on('hidden.bs.modal', function () {
        $('#tom-select-dvi').empty().append('' +
            '<select id="select-beast" placeholder="Select a author..." autocomplete="off">'+
            '<option selected value="">Select an author</option>' +
            '</select>');
    })

    $('#edit_book_modal').on('hidden.bs.modal', function () {
        $('#tom-select-update-dvi').empty().append('' +
            '<select id="select-beast-update" placeholder="Select a author..." autocomplete="off">'+
            '<option selected value="">Select an author</option>' +
            '</select>');
    })

    function deleteBook(id){
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
                    url: "{{ route('books.destroy',['%book%']) }}".replace('%book%',id),
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
                        Swal.fire('Error','the book was not deleted successfully!','error' )
                    }
                }).done(function(){
                });
                {{--window.open("{{ route('authors.destroy',['%author%']) }}".replace('%author%',id))--}}
            }

        })
    }

   function openCreateModal(){

       $.ajax({
           url: "{{ route('get.all.authors') }}",
           data:{
               '_token' : '{{csrf_token()}}'
           },
           type: "GET",
           success: (response)=>{
                console.log(response.data)

               let authors = response.data.authors.map(item => {
                   return {
                       value: item.id,
                       text: item.name
                   };
               });

               new TomSelect("#select-beast",{
                   create: true,
                   onInitialize: () =>{},
                   sortField: {
                       field: "text",
                       direction: "asc"
                   },
                   options:authors,
               });
               $('#select-beast').attr('name','author_id')
           },
           error: (e)=>{
               Swal.fire('Error','Please Try Aagin Later','error' )
           }
       }).done(function(){
           $('#create_book_modal').modal('show')
       });


    }

    // const rows =document.getElementsByClassName('update-book').addEventListener('click',function(evt){
    //     alert('helllo')
    //     evt.preventDefault();
    //     evt.stopPropagation();
    //
    //     input.value = 'new value';
    //     var evt = document.createEvent('HTMLEvents');
    //     evt.initEvent('change', false, true);
    //     input.dispatchEvent(evt);
    // });

    const rows = Array.from(document.getElementsByClassName('update-book'))
    rows.forEach(row => {
        row.addEventListener('click',function(evt){

            evt.preventDefault();
            evt.stopPropagation();


            var id =($(this).data('id'))
            $.ajax({
                url: "{{ route('books.edit',['%book%']) }}".replace('%book%',id),
                type: "GET",
                success: (response)=>{
                    var selctor= $('#select-update')

                    $('#book-id-update').val(response.data.book.id)
                    $('#book-name-update').val(response.data.book.name)
                    // $('#book-pdf-update').val(response.data.book.pdf_file)
                    // $('#book-mobi-update').val(response.data.book.mobi_file)
                    selctor.attr('name','author_id')

                    let authors = response.data.authors.map(item => {
                        return "<option value="+item.id+" >"+item.name+"</option>"
                    });
                    authors = ("<option selcted value='' >Select an author</option>") +authors

                    console.log(authors);
                    selctor.empty().append(authors)
                    selctor.val(response.data.book.author_id).change()
                    $('#edit_book_form').attr('action',"{{ route('books.update',['%book%']) }}".replace('%book%',id));


                    // var input = document.getElementById('select-beast-update');
                    // new TomSelect(input,{
                    //     create: true,
                    //     plugins: ['change_listener'],
                    //     sortField: {
                    //         field: "text",
                    //         direction: "asc"
                    //     },
                    //     options:authors,
                    // })

                    // input.value = response.data.book.author_id;
                    // var evt = document.createEvent('HTMLEvents');
                    // evt.initEvent('change', false, true);
                    // input.dispatchEvent(evt);

                },
                error: (e)=>{
                    Swal.fire('Error','Please Try Again Later','error' )
                }
            }).done(function(){
                $('#edit_book_modal').modal('show')
            });


        })
    })

    function editBook(id){


    }


</script>
