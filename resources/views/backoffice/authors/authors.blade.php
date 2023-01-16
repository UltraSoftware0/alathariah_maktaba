@extends('includes.app')


@section('content')

    <div class="row">
        <div class="col-xl-12">


            <div class="card">
                <div class="card-header d-flex">
                    <h6>Authers</h6>
                    <button class="btn btn-sm btn-success position-relative ms-auto text-lg me-1 my-auto" data-bs-toggle="modal" data-bs-target="#exampleModalMessage" > + </button>
                </div>

                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                            <tr>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">number of books</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created at</th>
                                <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $author)
                                <tr>

                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">{{$loop->iteration}}</span>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-normal">{{$author->name}}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$author->number_of_books}}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$author->created_at}}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                        <a href="#" onclick="deleteAuthor({{$author->id}})"> <span class="badge badge-sm bg-gradient-danger click">Delete</span> </a>
                                        <a  href="#" onclick="editAuthor({{$author->id}} , '{{$author->name}}')"><span class="badge badge-sm bg-gradient-info click">Edit</span></a>
                                    </td>

                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer d-flex">
{{--                    <p class="font-weight-normal my-auto">$899/night</p>--}}
{{--                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>--}}
{{--                    <p class="text-sm my-auto"> Barcelona, Spain</p>--}}
                </div>
            </div>


        </div>
    </div>

    @include('authors.modal')

@endsection

@section('js_scripts')

    @include('authors.scripts')

@endsection

