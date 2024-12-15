@extends('layout.admin-layout')

@section('custom-css')
    <style>
        .status-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .status-select {
            display: flex;
            align-items: center;
        }

        .status-select select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .status-select button {
            margin-left: 10px;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .status-select button:hover {
            background-color: #0056b3;
        }
    </style>
@endsection
@section('work-space')

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">All Entries</h3>
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
            <form action="{{ route('superadmin.entries.search') }}" method="post">
                @csrf
                <input type="hidden" name="type" value="Pending">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Search by User name ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Search by Title ...">
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
            <div class="col-md-12 content container-fluid">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Pending Entries</h3>
                                </div>
                            </div>
                        </div>

                        @if ($allEntries->isEmpty())
                            <div class="alert alert-info">
                                No ip found.
                            </div>
                        @else
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>

                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Form Type</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allEntries as $entry)
                                        <tr id="entryRow{{ $entry->id }}">

                                            <td>{{ $entry->id }}</td>
                                            <td>{{  $entry->inventiontitle }}</td>

                                            <td>
                                                @if ($entry->formType == 1)
                                                    Geographic Info
                                                @elseif ($entry->formType == 2)
                                                    Trademark
                                                @elseif ($entry->formType == 3)
                                                    Copyright
                                                @elseif ($entry->formType == 4)
                                                    Industrial
                                                @elseif ($entry->formType == 5)
                                                    Patent
                                                @elseif ($entry->formType == 6)
                                                    Utility
                                                @endif

                                            </td>
                                            <td>{{ $entry->user->name }}</td>
                                            <td>
                                                <a> <span
                                                        class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
                                            </td>

                                            <td>
                                                <div class="actions">
                                                    <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                        class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>

                                                </div>
                                            </td>


                                            <td class="text-end">

                                                <div class="actions">
                                                    <form id="statusForm{{ $entry->id }}" class="status-form">
                                                        <!-- Status form inputs -->
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">
                                                            <input type="hidden" name="entryId"
                                                                value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status"
                                                                    id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>
                                                    </form>
                                                </div>






                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $allEntries->links() }} --}}
                            {{-- <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    @if ($allEntries->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">&laquo; Previous</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $allEntries->previousPageUrl() }}"
                                                rel="prev">&laquo; Previous</a>
                                        </li>
                                    @endif

                                    @foreach ($allEntries->getUrlRange(1, $allEntries->lastPage()) as $page => $url)
                                        @if ($page == $allEntries->currentPage())
                                            <li class="page-item active">
                                                <span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                    @if ($allEntries->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $allEntries->nextPageUrl() }}" rel="next">Next
                                                &raquo;</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Next &raquo;</span>
                                        </li>
                                    @endif
                                </ul>
                            </nav> --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function updateStatus(entryId) {
            let form = document.getElementById('statusForm' + entryId);
            let formData = new FormData(form);
            let status = formData.get('status');
            let formType = formData.get('formId');
            axios.put('{{ route('entry.update-status', ['id' => ':id', 'formType' => ':formType']) }}'
                    .replace(':id', entryId)
                    .replace(':formType', formType), {
                        status: status
                    })
                .then(response => {
                    console.log(response.data.message);
                    // Update the UI to reflect the changes
                    // Remove the entry from the UI if it is no longer pending
                    if (status !== 'pending') {
                        document.getElementById('entryRow' + entryId).remove();
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
@endsection
