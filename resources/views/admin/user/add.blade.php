@extends('layout.admin-layout')
@section('custom-css')
    <style>
        .multi-select {
            display: flex;
            box-sizing: border-box;
            flex-direction: column;
            position: relative;
            width: 100%;
            user-select: none;
        }

        .multi-select .multi-select-header {
            border: 1px solid #dee2e6;
            padding: 7px 30px 7px 12px;
            overflow: hidden;
            gap: 7px;
            min-height: 45px;
        }

        .multi-select .multi-select-header::after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23949ba3' viewBox='0 0 16 16'%3E%3Cpath d='M8 13.1l-8-8 2.1-2.2 5.9 5.9 5.9-5.9 2.1 2.2z'/%3E%3C/svg%3E");
            height: 12px;
            width: 12px;
        }

        .multi-select .multi-select-header.multi-select-header-active {
            border-color: #c1c9d0;
        }

        .multi-select .multi-select-header.multi-select-header-active::after {
            transform: translateY(-50%) rotate(180deg);
        }

        .multi-select .multi-select-header.multi-select-header-active+.multi-select-options {
            display: flex;
        }

        .multi-select .multi-select-header .multi-select-header-placeholder {
            color: #65727e;
        }

        .multi-select .multi-select-header .multi-select-header-option {
            display: inline-flex;
            align-items: center;
            background-color: #f3f4f7;
            font-size: 14px;
            padding: 3px 8px;
            border-radius: 5px;
        }

        .multi-select .multi-select-header .multi-select-header-max {
            font-size: 14px;
            color: #65727e;
        }

        .multi-select .multi-select-options {
            display: none;
            box-sizing: border-box;
            flex-flow: wrap;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 999;
            margin-top: 5px;
            padding: 5px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .multi-select .multi-select-options::-webkit-scrollbar {
            width: 5px;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-track {
            background: #f0f1f3;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb {
            background: #cdcfd1;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb:hover {
            background: #b2b6b9;
        }

        .multi-select .multi-select-options .multi-select-option,
        .multi-select .multi-select-options .multi-select-all {
            padding: 4px 12px;
            height: 42px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-radio {
            margin-right: 14px;
            height: 16px;
            width: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-text {
            box-sizing: border-box;
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: inherit;
            font-size: 16px;
            line-height: 20px;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio {
            border-color: #40c979;
            background-color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio::after,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio::after {
            content: "";
            display: block;
            width: 3px;
            height: 7px;
            margin: 0.12em 0 0 0.27em;
            border: solid #fff;
            border-width: 0 0.15em 0.15em 0;
            transform: rotate(45deg);
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-text {
            color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option:hover,
        .multi-select .multi-select-options .multi-select-option:active,
        .multi-select .multi-select-options .multi-select-all:hover,
        .multi-select .multi-select-options .multi-select-all:active {
            background-color: #f3f4f7;
        }

        .multi-select .multi-select-options .multi-select-all {
            border-bottom: 1px solid #f1f3f5;
            border-radius: 0;
        }

        .multi-select .multi-select-options .multi-select-search {
            padding: 7px 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 10px 10px 5px 10px;
            width: 100%;
            outline: none;
            font-size: 16px;
        }

        .multi-select .multi-select-options .multi-select-search::placeholder {
            color: #b2b5b9;
        }

        .multi-select .multi-select-header,
        .multi-select .multi-select-option,
        .multi-select .multi-select-all {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            font-size: 16px;
            color: #212529;
        }
    </style>
@endsection
@section('work-space')

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Add User</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>

                    </ul>
                </div>
            </div>
        </div>



        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="bank-inner-details">
                    <div class="row">
                        <form action="{{ route('superadmin.user.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Name<span class="text-danger">*</span></label>
                                        <input name="name" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input name="email" type="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Password<span class="text-danger">*</span></label>
                                        <input name="password" type="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password<span class="text-danger">*</span></label>
                                        <input name="password_confirmation" type="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class=" blog-categories-btn pt-0">
                                <div class="bank-details-btn ">
                                    <button type="submit" class="btn bank-cancel-btn me-2">Add User</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>



    </div>

@endsection

@section('custom-js')

@endsection
