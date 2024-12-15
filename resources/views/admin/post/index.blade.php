@extends('layout.admin-layout')





@section('work-space')
    <style>
        .fixed-image-container {
            width: 100%;
            /* Or a fixed width, e.g., 300px */
            height: 200px;
            /* Set your desired fixed height */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fixed-size-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Use 'cover' to fill, or 'contain' to fit within */
        }
    </style>

    <div class="content container-fluid">

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
            <div class="alert alert-success" id="successAlert">
                {{ session('success') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <div class="alert alert-info">
                No Posts found.
            </div>
        @else
            <div class="row">
                <div class="col-md-9">
                    <ul class="list-links mb-4">
                        <div class="col-auto">
                            <a href="#grid" id="gridView" class="invoices-links active">
                                <i class="feather feather-grid"></i>
                            </a>
                            <a href="#list" id="listView" class="invoices-links">
                                <i class="feather feather-list"></i>
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="col-md-3 text-md-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-blog mb-3"><i
                            class="feather-plus-circle me-1"></i> Add New</a>
                </div>
            </div>

            <div class="row d-flex flex-wrap" id="gridViewContent"style="display: block;">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">

                                @php
                                    $images = json_decode($post->image);
                                @endphp

                                @if ($images && count($images) > 0)
                                    <div class="fixed-image-container">
                                        <a href="{{ route('user.posts.detail', $post->id) }}">
                                            <img class="img-fluid fixed-size-image"
                                                src="{{ asset('images/post/' . $images[0]) }}" alt="Post Image">
                                        </a>
                                    </div>
                                @endif

                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> {{ $post->views }}
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="{{ route('superadmin.profile.user', $post->user->id) }}">
                                                @if ($post->user->image)
                                                    <img src="{{ asset('images/profile/' . $post->user->image) }}"
                                                        alt="Post Author">
                                                @else
                                                    <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                        alt="Profile">
                                                @endif
                                                <span>
                                                    <span class="post-title">{{ $post->user->name }}</span>
                                                    <span class="post-date"><i class="far fa-clock"></i>
                                                        {{ $post->created_at->diffForHumans() }}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a
                                        href="{{ route('posts.detail', $post->id) }}">{{ $post->title }}</a></h3>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="{{ route('posts.edit', $post->id) }}" class="text-success"><i
                                                class="feather-edit-3 me-1"></i> Edit</a>
                                        @if (auth()->user()->role !== 2)
                                            <a href="{{ route('posts.destroy', $post->id) }}"
                                                onclick="event.preventDefault(); if(confirm('Delete Confirmation')) {
                                            document.getElementById('delete-form-{{ $post->id }}').submit();
                                        } return false;"
                                                class="text-danger"><i class="feather-trash-2 me-1"></i> Delete</a>
                                        @endif


                                        <form id="delete-form-{{ $post->id }}"
                                            action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <!-- Active/Inactive button -->
                                        @if ($post->active == true)
                                            <a href="{{ route('posts.activate', $post) }}"
                                                class="text-success deactivate-post"><i class="feather-eye me-1"></i>
                                                Active</a>
                                        @else
                                            <a href="{{ route('posts.activate', $post) }}"
                                                class="text-danger deactivate-post"><i
                                                    class="feather-eye-off me-1"></i>Inactive</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row" id="listViewContent" style="display: none;">
                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                    <thead class="student-thread">
                        <tr>

                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>date</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>

                                <td>{{ $post->id }}</td>
                                <td>
                                    <h2>
                                        <a href="{{ route('posts.detail', $post->id) }}">
                                            <b>{{ $post->title }}</b><br>
                                            {!! Str::limit(strip_tags($post->content), 50, '...') !!}
                                        </a>
                                    </h2>
                                </td>
                                <td><a
                                        href="{{ route('superadmin.profile.user', $post->user->id) }}">{{ $post->user->name }}</a>
                                </td>
                                <td>
                                    @if ($post->active == true)
                                        <a href="{{ route('posts.activate', $post) }}"
                                            class="text-success deactivate-post"><i class="feather-eye me-1"></i>
                                            Inactive</a>
                                    @else
                                        <a href="{{ route('posts.activate', $post) }}"
                                            class="text-danger deactivate-post"><i
                                                class="feather-eye-off me-1"></i>Inactive</a>
                                    @endif
                                </td>
                                <td>{{ $post->created_at }}</td>
                                <td class="text-end">
                                    <div class="actions">
                                        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                            <i class="feather-eye"></i>
                                        </a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm bg-danger-light">
                                            <i class="feather-edit"></i>
                                        </a>
                                        @if (auth()->user()->role !== 2)
                                            <a href="{{ route('posts.destroy', $post->id) }}"
                                                onclick="event.preventDefault();
                                                        if(confirm('Delete Confirmation')) {
                                                            document.getElementById('delete-form-{{ $post->id }}').submit();
                                                        }
                                                        return false;"
                                                style="color: red;" class="btn btn-sm bg-danger-light">
                                                <i class="feather-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $post->id }}"
                                                action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        @endif

        <div class="row ">
            <div class="col-md-12">
                <div class="pagination-tab  d-flex justify-content-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            @if ($posts->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo; Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $posts->previousPageUrl() }}" rel="prev">&laquo;
                                        Previous</a>
                                </li>
                            @endif

                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                @if ($page == $posts->currentPage())
                                    <li class="page-item active">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            @if ($posts->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $posts->nextPageUrl() }}" rel="next">Next
                                        &raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">Next &raquo;</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content doctor-profile">
                    <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                                class="feather-x-circle"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="delete-wrap text-center">
                            <div class="del-icon"><i class="feather-x-circle"></i></div>
                            <h2>Sure you want to delete</h2>
                            <div class="submit-section">
                                <a href="blog.html" class="btn btn-success me-2">Yes</a>
                                <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the alert exists
            const successAlert = document.getElementById('successAlert');
            if (successAlert) {
                // Set a timeout to remove the alert after 4 seconds
                setTimeout(function() {
                    successAlert.style.display = 'none'; // Hide the alert
                }, 4000); // 4000 milliseconds = 4 seconds
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            const listViewButton = document.getElementById('listView');
            const gridViewButton = document.getElementById('gridView');
            const listViewContent = document.getElementById('listViewContent');
            const gridViewContent = document.getElementById('gridViewContent');

            // Function to toggle between grid and list views
            function toggleView(view) {
                if (view === 'list') {
                    listViewContent.style.display = 'block';
                    gridViewContent.style.display = 'none';
                    listViewButton.classList.add('active');
                    gridViewButton.classList.remove('active');

                    // Remove d-flex and flex-wrap classes when switching to list view
                    gridViewContent.classList.remove('d-flex', 'flex-wrap');
                } else {
                    gridViewContent.style.display = 'block';
                    listViewContent.style.display = 'none';
                    gridViewButton.classList.add('active');
                    listViewButton.classList.remove('active');

                    // Add d-flex and flex-wrap classes for grid view
                    gridViewContent.classList.add('d-flex', 'flex-wrap');
                }
            }

            // Event listeners for switching views
            listViewButton.addEventListener('click', function() {
                toggleView('list');
            });

            gridViewButton.addEventListener('click', function() {
                toggleView('grid');
            });

            // Initial check to set view state (optional)
            if (gridViewButton.classList.contains('active')) {
                toggleView('grid');
            } else if (listViewButton.classList.contains('active')) {
                toggleView('list');
            }
        });
    </script>
@endsection
