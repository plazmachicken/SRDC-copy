@extends('layout.admin-layout')

@section('work-space')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Edit Tag</h3>
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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Tag Details</span></h5>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Name<span class="login-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ $tag->name }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-success" style="background-color:blue; border-color:blue;">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

</div>

@endsection
