@extends('includes.app')


@section('content')

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/css/tom-select.css" rel="stylesheet">
    <div class="row">
        <div class="col-xl-12">


            <div class="card">
                <div class="card-header d-flex">
                    <h6>Books</h6>
                    <button onclick="openCreateModal()"  class="btn btn-sm btn-success position-relative ms-auto text-lg me-1 my-auto"> + </button>
                </div>

                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                            <tr>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">name</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PDF file</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">MOBI file</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created at</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">actions</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($books as $book)
                                <tr>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">{{$loop->iteration}}</span>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">{{$book->author->name ?? 'NON'}}</span>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">{{$book->name ?? 'NON' }}</span>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <a href="{{route('books.download.pdf',$book->id)}}"> <span class="badge badge-sm bg-gradient-success click">Download</span> </a>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <a href="{{route('books.download.mobi',$book->id)}}"> <span class="badge badge-sm bg-gradient-success click">Download</span> </a>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">{{$book->created_at }}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                        <a onclick="deleteBook({{$book->id}})" href="#"> <span class="badge badge-sm bg-gradient-danger click">Delete</span> </a>
                                        <a  href="#"><span data-id="{{$book->id}}"  class="badge badge-sm bg-gradient-info click update-book">Edit</span></a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer d-flex">
                    {{-- <p class="font-weight-normal my-auto">$899/night</p> --}}
                    {{--<i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i> --}}
                    {{-- <p class="text-sm my-auto"> Barcelona, Spain</p> --}}
                </div>
            </div>


        </div>
    </div>
    @include('books.modals')

@endsection

@section('js_scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/js/tom-select.complete.min.js"></script>

    @include('books.scripts')

@endsection
