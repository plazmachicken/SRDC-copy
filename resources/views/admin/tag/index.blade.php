@extends('layout.admin-layout')

@section('work-space')

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Tags</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>

                    </ul>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="student-group-form">
            <form action="{{ route('superadmin.tag.search') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row ">
            <div class="col-sm-8 content container-fluid">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Tags</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">

                                    <a href="{{ route('tags.create') }}" class="btn btn-primary"><i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        @if ($tags->isEmpty())
                            <div class="alert alert-info">
                                No Tags found.
                            </div>
                        @else
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>

                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>

                                            <td>{{ $tag->id }}</td>
                                            <td>
                                                <h2>
                                                    <a>{{ $tag->name }}</a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    
                                                    <a href="{{ route('tags.edit', $tag->id) }}"
                                                        class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="{{ route('tags.destroy', $tag->id) }}"
                                                        onclick="event.preventDefault();
                                            if(confirm('Delete Confirmation')) {
                                                document.getElementById('delete-form-{{ $tag->id }}').submit();
                                            }
                                            return false;"
                                                        style="color: red;" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-trash"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $tag->id }}"
                                                        action="{{ route('tags.destroy', $tag->id) }}" method="POST"
                                                        style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    @if ($tags->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">&laquo; Previous</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $tags->previousPageUrl() }}"
                                                rel="prev">&laquo; Previous</a>
                                        </li>
                                    @endif

                                    @foreach ($tags->getUrlRange(1, $tags->lastPage()) as $page => $url)
                                        @if ($page == $tags->currentPage())
                                            <li class="page-item active">
                                                <span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                    @if ($tags->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $tags->nextPageUrl() }}" rel="next">Next
                                                &raquo;</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Next &raquo;</span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
