@extends('layout.admin-layout')

@section('work-space')

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
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
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">

                            @if ($user->image)
                                <img class="rounded-circle" src="{{ asset('images/profile/' . $user->image) }}"
                                width="90" height="30" alt="Profile') }}">
                            @else
                                <img class="rounded-circle" src="{{ asset('assets/img/profiles/avatar-01.jpg') }}"
                                    width="31" alt="Profile') }}">
                            @endif
                        </div>
                        <div class="col ms-md-n2 profile-user-info">
                            <h4 class="user-name mb-0">{{ $user->name }}</h4>

                            <div class="user-Location"><i class="fas fa-map-marker-alt"></i> {{ $user->address }}</div>

                        </div>

                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#edit_tab">Edit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">

                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                        </h5>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                            <p class="col-sm-9">{{ $user->name }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                            <p class="col-sm-9"><a href="" class="__cf_email__"
                                                    data-cfemail="6d070205030902082d08150c001d0108430e0200">{{ $user->email }}</a>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                            <p class="col-sm-9">{{ $user->mobile }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                            <p class="col-sm-9 mb-0">{{ $user->address }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form action="{{ route('superadmin.profile.update', $user) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="type" value="password">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" name="current_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="edit_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Personal Details</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form action="{{ route('superadmin.profile.update', $user) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="info">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ $user->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" name="mobile" class="form-control"
                                                    value="{{ $user->mobile }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    value="{{ $user->address }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Profile</label>
                                                <input type="file" name="image" class="form-control"
                                                    value="{{ $user->image }}">
                                            </div>

                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection
