@extends('layout.admin-layout')

@section('work-space')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Blank Page</h3>
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
            Contents here
        </div>
    </div>

    

</div>

@endsection
