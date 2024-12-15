@extends('layout.admin-layout')

@section('custom-css')
    <style>
        .table-responsive {
            overflow-x: auto;
        }

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


        <div class="row">
            <div class="col-md-12">
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Patent">Patent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Utility">Utility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Treadmark">Trademark</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Industrial">Industrial Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Geographical">Geographical Indication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Copyright">Copyright</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">
                    @php
                        $ID_COUNT = 0;
                    @endphp
                    <div id="Patent" class="tab-pane fade show active">
                        <div class="card table-responsive">
                            <div class="card-body ">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Patent Entries</h3>
                                        </div>

                                    </div>
                                </div>

                                {{-- @if ($form == 5) --}}
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>

                                            <th>ID</th>
                                            <th>Invention Title</th>
                                            <th>Name</th>
                                            <th>Applicant Id</th>

                                            <th>Created By</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patEntries as $entry)
                                            <tr id="entryRow{{ $entry->id }}">
                                                @php
                                                    $ID_COUNT++;
                                                @endphp
                                                <td>{{ $ID_COUNT }}</td>
                                                <td>{{ $entry->inventiontitle }}</td>
                                                <td>{{ $entry->name }}</td>
                                                <td>{{ $entry->applicantid }}</td>


                                                <td>{{ $entry->user->name }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                                {{-- <td>{{ $entry->created_at->diffForHumans() }}</td> --}}
                                                <td>
                                                    <a> <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
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
                            </div>
                        </div>
                    </div>
                    <div id="Geographical" class="tab-pane fade">
                        <div class="card table-responsive">
                            <div class="card-body ">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Geographic Entries</h3>
                                        </div>
                                    </div>
                                </div>

                                {{-- @if ($form == 1) --}}
                                <table class="table respocive">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>ID</th>
                                            <th>Invention Title</th>
                                            <th>Name</th>
                                            <th>Application Type</th>

                                            <th>User</th>

                                            <th>View</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ID_COUNT = 0;
                                        @endphp
                                        @foreach ($geoEntries as $entry)
                                            <tr id="entryRow{{ $entry->id }}">

                                                @php
                                                    $ID_COUNT++;
                                                @endphp
                                                <td>{{ $ID_COUNT }}</td>

                                                <td>{{ $entry->inventiontitle }}</td>
                                                <td>{{ $entry->name }}</td>
                                                <td>{{ $entry->applicanttype }}</td>

                                                <td>{{ $entry->user->name }}</td>


                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>

                                                <td>
                                                    <a> <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
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
                            </div>
                        </div>
                    </div>


                    <div id="Utility" class="tab-pane fade">
                        <div class="card table-responsive">
                            <div class="card-body ">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Utility Entries</h3>
                                        </div>

                                    </div>
                                </div>

                                {{-- @if ($form == 1) --}}
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>

                                            <th>ID</th>
                                            <th>Invention Title</th>
                                            <th>Name</th>
                                            <th>Applicant Id</th>

                                            <th>Created By</th>
                                            <th>View</th>


                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ID_COUNT = 0;
                                        @endphp
                                        @foreach ($utilEntries as $entry)
                                            <tr id="entryRow{{ $entry->id }}">
                                                @php
                                                    $ID_COUNT++;
                                                @endphp
                                                <td>{{ $ID_COUNT }}</td>
                                                <td>{{ $entry->inventiontitle }}</td>
                                                <td>{{ $entry->name }}</td>
                                                <td>{{ $entry->applicantid }}</td>


                                                <td>{{ $entry->user->name }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                                {{-- <td>{{ $entry->created_at->diffForHumans() }}</td> --}}
                                                <td>
                                                    <a> <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
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
                            </div>
                        </div>
                    </div>

                    <div id="Treadmark" class="tab-pane fade">
                        <div class="card table-responsive">
                            <div class="card-body ">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Trademark Entries</h3>
                                        </div>

                                    </div>
                                </div>

                                {{-- @if ($form == 1) --}}
                                <table class="table respocive">
                                    <thead class="student-thread">
                                        <tr>

                                            <th>ID</th>
                                            <th>Invention Title</th>
                                            <th>Name & Address</th>
                                            <th>Applicant Type</th>

                                            <th>Created By</th>

                                            <th>View</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ID_COUNT = 0;
                                        @endphp
                                        @foreach ($tradeEntries as $entry)
                                            <tr id="entryRow{{ $entry->id }}">

                                                @php
                                                    $ID_COUNT++;
                                                @endphp
                                                <td>{{ $ID_COUNT }}</td>
                                                <td>{{ $entry->inventiontitle }}</td>
                                                <td>{{ $entry->name }}</td>
                                                <td>{{ $entry->applicant_type }}</td>
                                                <td>{{ $entry->user->name }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                                <td>
                                                    <a> <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
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
                            </div>
                        </div>
                    </div>

                    <div id="Industrial" class="tab-pane fade">
                        <div class="card table-responsive">
                            <div class="card-body ">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Industrial Entries</h3>
                                        </div>

                                    </div>
                                </div>

                                {{-- @if ($form == 5) --}}
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>

                                            <th>ID</th>
                                            <th>Invention Title</th>
                                            <th>Name</th>


                                            <th>Created By</th>
                                            <th>Created At</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ID_COUNT = 0;
                                        @endphp
                                        @foreach ($industEntries as $entry)
                                            <tr id="entryRow{{ $entry->id }}">

                                                @php
                                                    $ID_COUNT++;
                                                @endphp
                                                <td>{{ $ID_COUNT }}</td>
                                                <td>{{ $entry->inventiontitle }}</td>
                                                <td>{{ $entry->name }}</td>


                                                <td>{{ $entry->user->name }}</td>
                                                <td>{{ $entry->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>

                                                <td>
                                                    <a> <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
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
                            </div>
                        </div>
                    </div>


                    <div id="Copyright" class="tab-pane fade">
                        <div class="card table-responsive">
                            <div class="card-body ">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Copyright Entries</h3>
                                        </div>

                                    </div>
                                </div>

                                {{-- @if ($form == 3) --}}
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>

                                            <th>ID</th>
                                            <th>invention title</th>
                                            <th>work title</th>
                                            <th>work translation</th>


                                            <th>Created By</th>
                                            <th>Created At</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ID_COUNT = 0;
                                        @endphp
                                        @foreach ($copyEntries as $entry)
                                            <tr id="entryRow{{ $entry->id }}">

                                                @php
                                                    $ID_COUNT++;
                                                @endphp
                                                <td>{{ $ID_COUNT }}</td>

                                                <td>{{ $entry->inventiontitle }}</td>
                                                <td>{{ $entry->worktitle }}</td>
                                                <td>{{ $entry->worktranslation }}</td>

                                                <td>{{ $entry->user->name }}</td>
                                                <td>{{ $entry->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('superadmin.ips.show', ['formType' => $entry->formType, 'id' => $entry->id]) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>

                                                <td>
                                                    <a> <span
                                                            class="badge badge-soft-warning badge-border">{{ $entry->is_complete }}</span></a>
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
                            </div>
                        </div>
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
