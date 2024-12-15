{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Logs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>System Logs</h2>

        <div class="card mt-3">
            <div class="card-body">
                @if (count($logs) === 0)
                    <p>No logs found.</p>
                @else
                    <div
                        style="height: 500px; overflow-y: auto; background-color: #f8f9fa; padding: 15px; border-radius: 5px; border: 1px solid #dee2e6;">
                        <pre>{!! implode('', $logs) !!}</pre>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html> --}}


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


            <div class="card mt-3">
                <div class="col-12" style="margin-top: 30px; margin-left: 30px">
                    <h5 class="form-title"><span>Logs</span></h5>
                </div>
                <div class="card-body">
                    @if (count($logs) === 0)
                        <p>No logs found.</p>
                    @else
                        <div
                            style="height: 500px; overflow-y: auto; background-color: #f8f9fa; padding: 15px; border-radius: 5px; border: 1px solid #dee2e6;">
                            <pre>{!! implode('', $logs) !!}</pre>
                        </div>
                    @endif
                </div>
                <div class="col-3">
                    <!-- Print Button -->
                    <a href="{{ route('download-logs') }}" class="btn btn-primary hide-on-print">Download</a>
                </div>
            </div>

        </div>




    </div>

@endsection
