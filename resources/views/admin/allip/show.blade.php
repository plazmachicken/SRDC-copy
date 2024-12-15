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



        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif


        <div class="row ">
            <div class="tab-content profile-tab-cont">

                <div class="tab-pane fade show active" id="per_details_tab">

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">

                                    @if (isset($entry))
                                        @switch($formType)
                                            @case(1)
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>This is Geographical form</span>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{ $entry->name }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Application Type</p>
                                                    <p class="col-sm-9">{{ $entry->applicanttype }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Nationality </p>
                                                    <p class="col-sm-9">{{ $entry->nationality }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Postcode </p>
                                                    <p class="col-sm-9">{{ $entry->postcode }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Town</p>
                                                    <p class="col-sm-9">{{ $entry->town }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">State</p>
                                                    <p class="col-sm-9">{{ $entry->state }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                    <p class="col-sm-9">{{ $entry->telephone }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email</p>
                                                    <p class="col-sm-9">{{ $entry->email }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">website</p>
                                                    <p class="col-sm-9">{{ $entry->website }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Postcode Service</p>
                                                    <p class="col-sm-9">{{ $entry->postcodeservice }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Town Service</p>
                                                    <p class="col-sm-9">{{ $entry->townservice }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">State Service</p>
                                                    <p class="col-sm-9">{{ $entry->stateservice }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Representation</p>
                                                    <p class="col-sm-9">{{ $entry->representation }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Earlygi</p>
                                                    <p class="col-sm-9">{{ $entry->earlygi }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Emailgi</p>
                                                    <p class="col-sm-9">{{ $entry->emailgi }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Non Roman </p>
                                                    <p class="col-sm-9">{{ $entry->non_roman }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Character</p>
                                                    <p class="col-sm-9">{{ $entry->character }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Transliteration</p>
                                                    <p class="col-sm-9">{{ $entry->transliteration }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Translation</p>
                                                    <p class="col-sm-9">{{ $entry->translation }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Non National</p>
                                                    <p class="col-sm-9">{{ $entry->non_national }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Language</p>
                                                    <p class="col-sm-9">{{ $entry->language }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Translation National</p>
                                                    <p class="col-sm-9">{{ $entry->translation_national }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Class</p>
                                                    <p class="col-sm-9">{{ $entry->class }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">List of Goods</p>
                                                    <p class="col-sm-9">{{ $entry->listofgoods }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of protection</p>
                                                    <p class="col-sm-9">{{ $entry->date_of_protection }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Goods Description</p>
                                                    <p class="col-sm-9">{{ $entry->goods_description }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Supporting Documnet</p>
                                                    <p class="col-sm-9"><a
                                                            href="{{ route('geo.file.download', ['formId' => $entry, 'type' => 'supporting_documents1']) }}">{{ $entry->supporting_documents1 }}</a>
                                                    </p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Area Picture</p>
                                                    <p class="col-sm-9"><a
                                                            href="{{ route('geo.file.download', ['formId' => $entry, 'type' => 'area_picture']) }}">{{ $entry->area_picture }}</a>
                                                    </p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Colour </p>
                                                    <p class="col-sm-9">{{ $entry->colour }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Shape</p>
                                                    <p class="col-sm-9">{{ $entry->shape }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Texture</p>
                                                    <p class="col-sm-9">{{ $entry->texture }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Size</p>
                                                    <p class="col-sm-9">{{ $entry->size }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Weight</p>
                                                    <p class="col-sm-9">{{ $entry->weight }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Taste</p>
                                                    <p class="col-sm-9">{{ $entry->taste }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Proof of Origin</p>
                                                    <p class="col-sm-9">{{ $entry->proof_of_origin }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Casual Link</p>
                                                    <p class="col-sm-9">{{ $entry->causal_link }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Processing Techiques
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->processing_techniques }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Labling Description</p>
                                                    <p class="col-sm-9">{{ $entry->labelling_description }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Award Recognition</p>
                                                    <p class="col-sm-9">{{ $entry->award_recognition }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Inspection Body</p>
                                                    <p class="col-sm-9">{{ $entry->inspection_body }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Association</p>
                                                    <p class="col-sm-9">{{ $entry->association }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Supporting Document</p>
                                                    <p class="col-sm-9"> <a
                                                            href="{{ route('geo.file.download', ['formId' => $entry, 'type' => 'supporting_documents']) }}">{{ $entry->supporting_documents }}</a>
                                                    </p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
                                                    @if ($entry->approved_date)
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                       Status Updated
                                                        </p>
                                                        <p class="col-sm-9">
                                                            {{  $entry->approved_date}}
                                                        </p>
                                                    @endif
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Leave Comment</p>
                                                    <dev class="col-sm-9">

                                                        <form id="commentForm{{ $entry->id }}" class="status-form">
                                                            <div class="form-group col-sm-9">
                                                                <textarea rows="4" name="content" id="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                                            </div>

                                                        </form>

                                                    </dev>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        <span id="statusBadge{{ $entry->id }}"
                                                            class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">
                                                            {{ $entry->is_complete }}
                                                        </span>

                                                    </p>
                                                    <p class="col-sm-9">
                                                    <div class="actions">
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">

                                                            <input type="hidden" name="entryId" value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status" id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    </p>
                                                    <hr>
                                                </div>
                                            @break

                                            @case(2)
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>This is Trademark form</span>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{ $entry->name }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Type</p>
                                                    <p class="col-sm-9">{{ $entry->applicant_type }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Business Registration
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->business_registration }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">business address</p>
                                                    <p class="col-sm-9">{{ $entry->business_address }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                    <p class="col-sm-9">{{ $entry->phone_num }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Reference</p>
                                                    <p class="col-sm-9">{{ $entry->reference }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Trade Type</p>
                                                    <p class="col-sm-9">{{ $entry->trade_type }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">word</p>
                                                    <p class="col-sm-9">{{ $entry->word }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">device</p>
                                                    <p class="col-sm-9">{{ $entry->device }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">word device</p>
                                                    <p class="col-sm-9">{{ $entry->word_device }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Shape</p>
                                                    <p class="col-sm-9">{{ $entry->shape }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Style Word</p>
                                                    <p class="col-sm-9">{{ $entry->styleword }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Color</p>
                                                    <p class="col-sm-9">{{ $entry->color }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Sound</p>
                                                    <p class="col-sm-9">{{ $entry->sound }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Scent</p>
                                                    <p class="col-sm-9">{{ $entry->scent }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Hologram</p>
                                                    <p class="col-sm-9">{{ $entry->hologram }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Positioning</p>
                                                    <p class="col-sm-9">{{ $entry->positioning }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Motion</p>
                                                    <p class="col-sm-9">{{ $entry->motion }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Combination</p>
                                                    <p class="col-sm-9">{{ $entry->combination }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Description</p>
                                                    <p class="col-sm-9">{{ $entry->description }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Trademark Colo</p>
                                                    <p class="col-sm-9">{{ $entry->trademark_color }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Color Description</p>
                                                    <p class="col-sm-9">{{ $entry->color_description }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Graphic</p>
                                                    <p class="col-sm-9"><a
                                                            href="{{ route('tread.file.download', ['formId' => $entry, 'type' => 'graphics']) }}">{{ $entry->graphic }}</a>
                                                    </p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Disclaimer</p>
                                                    <p class="col-sm-9">{{ $entry->disclaimer }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Firstuse</p>
                                                    <p class="col-sm-9">{{ $entry->firstuse }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Additional Docs</p>
                                                    <p class="col-sm-9"><a
                                                            href="{{ route('tread.file.download', ['formId' => $entry, 'type' => 'additionalDocs']) }}">{{ $entry->additionalDocs }}</a>
                                                    </p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
                                                    @if ($entry->approved_date)
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                       Status Updated
                                                        </p>
                                                        <p class="col-sm-9">
                                                            {{  $entry->approved_date}}
                                                        </p>
                                                    @endif
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Leave Comment</p>
                                                    <dev class="col-sm-9">

                                                        <form id="commentForm{{ $entry->id }}" class="status-form">
                                                            <div class="form-group col-sm-9">
                                                                <textarea rows="4" name="content" id="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                                            </div>

                                                        </form>

                                                    </dev>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        <span id="statusBadge{{ $entry->id }}"
                                                            class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">
                                                            {{ $entry->is_complete }}
                                                        </span>

                                                    </p>
                                                    <p class="col-sm-9">
                                                    <div class="actions">
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">

                                                            <input type="hidden" name="entryId" value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status" id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    </p>
                                                    <hr>
                                                </div>
                                            @break

                                            @case(3)
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>This is Copyright form</span>
                                                </h5>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">work title</p>
                                                    <p class="col-sm-9">{{ $entry->worktitle }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">work translation</p>
                                                    <p class="col-sm-9">{{ $entry->worktranslation }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">work transliteration
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->worktransliteration }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">work language</p>
                                                    <p class="col-sm-9">{{ $entry->worklanguage }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">copyright work</p>
                                                    <p class="col-sm-9">{{ $entry->copyrightwork }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Derivative Work</p>
                                                    <p class="col-sm-9">{{ $entry->derivativework }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date Create</p>
                                                    <p class="col-sm-9">{{ $entry->datecreate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Publication Status</p>
                                                    <p class="col-sm-9">{{ $entry->publication_status }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Year Compilation</p>
                                                    <p class="col-sm-9">{{ $entry->year_compilation }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date First Publication
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->date_first_publication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Country Publication</p>
                                                    <p class="col-sm-9">{{ $entry->country_publication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Name</p>
                                                    <p class="col-sm-9">{{ $entry->authorname }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Id</p>
                                                    <p class="col-sm-9">{{ $entry->authorid }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Nationality</p>
                                                    <p class="col-sm-9">{{ $entry->authornationality }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Address</p>
                                                    <p class="col-sm-9">{{ $entry->authoraddress }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Postcode</p>
                                                    <p class="col-sm-9">{{ $entry->authorpostcode }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author City</p>
                                                    <p class="col-sm-9">{{ $entry->authorcity }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author State</p>
                                                    <p class="col-sm-9">{{ $entry->authorstate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Country</p>
                                                    <p class="col-sm-9">{{ $entry->authorcountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author Email</p>
                                                    <p class="col-sm-9">{{ $entry->authoremail }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                    <p class="col-sm-9">{{ $entry->telno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Fax</p>
                                                    <p class="col-sm-9">{{ $entry->faxno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Name</p>
                                                    <p class="col-sm-9">{{ $entry->ownername }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Id</p>
                                                    <p class="col-sm-9">{{ $entry->ownerid }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Company Name</p>
                                                    <p class="col-sm-9">{{ $entry->companyname }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Company No</p>
                                                    <p class="col-sm-9">{{ $entry->companyno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Add</p>
                                                    <p class="col-sm-9">{{ $entry->owneradd }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Postcode</p>
                                                    <p class="col-sm-9">{{ $entry->ownerpostcode }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner City</p>
                                                    <p class="col-sm-9">{{ $entry->ownercity }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Nationality</p>
                                                    <p class="col-sm-9">{{ $entry->ownernationality }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner State</p>
                                                    <p class="col-sm-9">{{ $entry->ownerstate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Country</p>
                                                    <p class="col-sm-9">{{ $entry->ownercountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Telno</p>
                                                    <p class="col-sm-9">{{ $entry->ownertelno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Email</p>
                                                    <p class="col-sm-9">{{ $entry->owneremail }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Owner Fax</p>
                                                    <p class="col-sm-9">{{ $entry->ownerfaxno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Name</p>
                                                    <p class="col-sm-9">{{ $entry->licenseename }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Id</p>
                                                    <p class="col-sm-9">{{ $entry->licenseeid }}</p>
                                                    <hr>


                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Company name
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->licenseecompanyname }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Company</p>
                                                    <p class="col-sm-9">{{ $entry->licenseecompno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Add</p>
                                                    <p class="col-sm-9">{{ $entry->licenseeadd }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Postcode</p>
                                                    <p class="col-sm-9">{{ $entry->licenseepostcode }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee City</p>
                                                    <p class="col-sm-9">{{ $entry->licenseecity }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Nationality
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->licenseenationality }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee State</p>
                                                    <p class="col-sm-9">{{ $entry->licenseestate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee country</p>
                                                    <p class="col-sm-9">{{ $entry->licenseecountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee telno</p>
                                                    <p class="col-sm-9">{{ $entry->licenseetelno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Email</p>
                                                    <p class="col-sm-9">{{ $entry->licenseeemail }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">licensee Fax</p>
                                                    <p class="col-sm-9">{{ $entry->licenseefaxno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
                                                    @if ($entry->approved_date)
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                       Status Updated
                                                        </p>
                                                        <p class="col-sm-9">
                                                            {{  $entry->approved_date}}
                                                        </p>
                                                    @endif
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Leave Comment</p>
                                                    <dev class="col-sm-9">

                                                        <form id="commentForm{{ $entry->id }}" class="status-form">
                                                            <div class="form-group col-sm-9">
                                                                <textarea rows="4" name="content" id="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                                            </div>

                                                        </form>

                                                    </dev>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        <span id="statusBadge{{ $entry->id }}"
                                                            class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">
                                                            {{ $entry->is_complete }}
                                                        </span>

                                                    </p>
                                                    <p class="col-sm-9">
                                                    <div class="actions">
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">

                                                            <input type="hidden" name="entryId" value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status" id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    </p>
                                                    <hr>
                                                </div>
                                            @break

                                            @case(4)
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>This is Industrial form</span>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{ $entry->name }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Author</p>
                                                    <p class="col-sm-9">{{ $entry->author }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Agent Name </p>
                                                    <p class="col-sm-9">{{ $entry->agent_name }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Article </p>
                                                    <p class="col-sm-9">{{ $entry->article }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Classification</p>
                                                    <p class="col-sm-9">{{ $entry->classification }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">View</p>
                                                    <p class="col-sm-9">{{ $entry->view }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Multi</p>
                                                    <p class="col-sm-9">{{ $entry->multi }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Association</p>
                                                    <p class="col-sm-9">{{ $entry->association }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Prio Country</p>
                                                    <p class="col-sm-9">{{ $entry->prioCountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">prio No</p>
                                                    <p class="col-sm-9">{{ $entry->prioNo }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">prio Date</p>
                                                    <p class="col-sm-9">{{ $entry->prioDate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ten</p>
                                                    <p class="col-sm-9">{{ $entry->ten }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Div No</p>
                                                    <p class="col-sm-9">{{ $entry->divNo }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Div Date</p>
                                                    <p class="col-sm-9">{{ $entry->divDate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Malay</p>
                                                    <p class="col-sm-9">{{ $entry->malay }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
                                                    @if ($entry->approved_date)
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                       Status Updated
                                                        </p>
                                                        <p class="col-sm-9">
                                                            {{  $entry->approved_date}}
                                                        </p>
                                                    @endif
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Leave Comment</p>
                                                    <dev class="col-sm-9">

                                                        <form id="commentForm{{ $entry->id }}" class="status-form">
                                                            <div class="form-group col-sm-9">
                                                                <textarea rows="4" name="content" id="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                                            </div>

                                                        </form>

                                                    </dev>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        <span id="statusBadge{{ $entry->id }}"
                                                            class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">
                                                            {{ $entry->is_complete }}
                                                        </span>

                                                    </p>
                                                    <p class="col-sm-9">
                                                    <div class="actions">
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">

                                                            <input type="hidden" name="entryId" value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status" id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    </p>
                                                    <hr>
                                                </div>
                                            @break

                                            @case(5)
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>This is Patent form</span>
                                                </h5>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{ $entry->name }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Id</p>
                                                    <p class="col-sm-9">{{ $entry->applicantid }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Address</p>
                                                    <p class="col-sm-9">{{ $entry->applicantaddress }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Nationality
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->applicantnationality }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                    <p class="col-sm-9">{{ $entry->telno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Fax</p>
                                                    <p class="col-sm-9">{{ $entry->faxno }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Status</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_status }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Name</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_name }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Address</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_address }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Divisional</p>
                                                    <p class="col-sm-9">{{ $entry->divisional }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Date</p>
                                                    <p class="col-sm-9">{{ $entry->filingdate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Date</p>
                                                    <p class="col-sm-9">{{ $entry->prioritydate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Application</p>
                                                    <p class="col-sm-9">{{ $entry->initialapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Filing</p>
                                                    <p class="col-sm-9">{{ $entry->initialfiling }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Country</p>
                                                    <p class="col-sm-9">{{ $entry->claimcountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Claim</p>
                                                    <p class="col-sm-9">{{ $entry->filingclaim }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Application</p>
                                                    <p class="col-sm-9">{{ $entry->claimapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Patent Symbol</p>
                                                    <p class="col-sm-9">{{ $entry->patentsymbol }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Early Application</p>
                                                    <p class="col-sm-9">{{ $entry->earlyapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
                                                    @if ($entry->approved_date)
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                       Status Updated
                                                        </p>
                                                        <p class="col-sm-9">
                                                            {{  $entry->approved_date}}
                                                        </p>
                                                    @endif
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Leave Comment</p>
                                                    <dev class="col-sm-9">

                                                        <form id="commentForm{{ $entry->id }}" class="status-form">
                                                            <div class="form-group col-sm-9">
                                                                <textarea rows="4" name="content" id="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                                            </div>

                                                        </form>

                                                    </dev>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        <span id="statusBadge{{ $entry->id }}"
                                                            class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">
                                                            {{ $entry->is_complete }}
                                                        </span>

                                                    </p>
                                                    <p class="col-sm-9">
                                                    <div class="actions">
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">

                                                            <input type="hidden" name="entryId" value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status" id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    </p>
                                                    <hr>
                                                </div>
                                            @break

                                            @case(6)
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>This is utility form</span>
                                                </h5>

                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Invention Title</p>
                                                    <p class="col-sm-9">{{ $entry->inventiontitle }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">{{ $entry->name }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Id</p>
                                                    <p class="col-sm-9">{{ $entry->applicantid }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Address</p>
                                                    <p class="col-sm-9">{{ $entry->applicantaddress }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Applicant Nationality
                                                    </p>
                                                    <p class="col-sm-9">{{ $entry->applicantnationality }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
                                                    <p class="col-sm-9">{{ $entry->telno }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Fax</p>
                                                    <p class="col-sm-9">{{ $entry->faxno }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Status</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_status }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Name</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_name }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Innovator Address</p>
                                                    <p class="col-sm-9">{{ $entry->innovator_address }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Divisional</p>
                                                    <p class="col-sm-9">{{ $entry->divisional }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Date</p>
                                                    <p class="col-sm-9">{{ $entry->filingdate }}</p>
                                                    <hr>

                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Priority Date</p>
                                                    <p class="col-sm-9">{{ $entry->prioritydate }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Application</p>
                                                    <p class="col-sm-9">{{ $entry->initialapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Initial Filing</p>
                                                    <p class="col-sm-9">{{ $entry->initialfiling }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Country</p>
                                                    <p class="col-sm-9">{{ $entry->claimcountry }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Filing Claim</p>
                                                    <p class="col-sm-9">{{ $entry->filingclaim }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Claim Application</p>
                                                    <p class="col-sm-9">{{ $entry->claimapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Patent Symbol</p>
                                                    <p class="col-sm-9">{{ $entry->patentsymbol }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Early Application</p>
                                                    <p class="col-sm-9">{{ $entry->earlyapplication }}</p>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Created At</p>
                                                    <p class="col-sm-9">{{ $entry->created_at->diffForHumans() }}</p>
                                                    <hr>
                                                    @if ($entry->approved_date)
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">
                                                       Status Updated
                                                        </p>
                                                        <p class="col-sm-9">
                                                            {{  $entry->approved_date}}
                                                        </p>
                                                    @endif
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Leave Comment</p>
                                                    <dev class="col-sm-9">

                                                        <form id="commentForm{{ $entry->id }}" class="status-form">
                                                            <div class="form-group col-sm-9">
                                                                <textarea rows="4" name="content" id="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                                            </div>

                                                        </form>

                                                    </dev>
                                                    <hr>
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Status</p>
                                                    <p class="col-sm-9">
                                                        <span id="statusBadge{{ $entry->id }}"
                                                            class="badge badge-soft-{{ $entry->is_complete == 'approved' ? 'success' : ($entry->is_complete == 'denied' ? 'danger' : 'warning') }} badge-border">
                                                            {{ $entry->is_complete }}
                                                        </span>

                                                    </p>
                                                    <p class="col-sm-9">
                                                    <div class="actions">
                                                        <form id="statusForm{{ $entry->id }}" class="status-form">

                                                            <input type="hidden" name="entryId" value="{{ $entry->id }}">
                                                            <input type="hidden" id="formId" name="formId"
                                                                value="{{ $entry->formType }}">
                                                            <div class="status-select">
                                                                <select name="status" id="statusSelect{{ $entry->id }}">
                                                                    <option value="approved">Approved</option>
                                                                    <option value="denied">Denied</option>
                                                                </select>
                                                                <button type="button" class="status-toggle"
                                                                    onclick="updateStatus({{ $entry->id }})">Change
                                                                    Status</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    </p>
                                                    <hr>
                                                </div>
                                            @break

                                            @default
                                                <p>No data found</p>
                                        @endswitch
                                    @else
                                        <p>No data found</p>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
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
                             </nav>  --}}


@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function updateStatus(entryId) {
            let form = document.getElementById('statusForm' + entryId);
            let formData = new FormData(form);
            let status = formData.get('status');
            let formType = formData.get('formId');

            let Newform = document.getElementById('commentForm' + entryId);
            let commentFormData = new FormData(Newform);
            let comment = commentFormData.get('content');
            console.log(comment);
            // Construct the URL dynamically
            let url = '{{ route('entry.update-status', ['id' => ':id', 'formType' => ':formType']) }}'
                .replace(':id', entryId)
                .replace(':formType', formType);

            // Send the PUT request with Axios
            axios.put(url, {
                    status: status,
                    content: comment
                })
                .then(response => {
                    console.log(response.data.message);
                    // Update status badge and button style
                    let statusBadge = document.getElementById('statusBadge' + entryId);
                    let statusButton = document.getElementById('statusButton' + entryId);
                    statusBadge.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                    statusBadge.classList.remove('badge-soft-warning', 'badge-soft-success', 'badge-soft-danger');
                    statusBadge.classList.add('badge-soft-' + (status === 'approved' ? 'success' : 'danger'));
                    statusButton.style.display = 'none'; // Hide the "Change Status" button

                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
@endsection
