@extends('layout.admin-layout')

@section('work-space')

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Welcome Admin</h3>
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

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <a href="{{ route('superadmin.user.index') }}">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Users</h6>
                                    <h3>{{ $user }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('assets/img/icons/icons8-user-96.png') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <a href="{{ route('categories.index') }}">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Category</h6>
                                    <h3>{{ $category }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('assets/img/icons/icons8-category-96.png') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <a href="{{ route('tags.index') }}">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Tag</h6>
                                    <h3>{{ $tag }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('assets/img/icons/icons8-tag-96.png') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <a href="{{ route('posts.index') }}">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Post</h6>
                                    <h3>{{ $post }}</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('assets/img/icons/icons8-blog-80.png') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <a href="{{ route('superadmin.ip.all') }}">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>All Ip</h6>
                                    <h3>{{ $allIp < 99 ? $allIp : "99+" }}</h3>


                                </div>
                                <div class="db-icon">
                                    <img src="{{ asset('assets/img/icons/icons8-ip-64.png') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>




    </div>

@endsection
