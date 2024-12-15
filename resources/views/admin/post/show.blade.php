@extends('layout.admin-layout')

@section('work-space')

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
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">

                <div class="blog-view">
                    <div class="blog-single-post">
                        <a href="{{ route('posts.index') }}" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
                        @php
                            $images = json_decode($post->image);
                        @endphp
                        @if ($images && count($images) > 0)
                        <div class="blog-image">
                            <img alt src="{{ asset('images/post/' . $images[0]) }}" class="img-fluid">
                        </div>
                            @endif




                        <h3 class="blog-title">{{ $post->title }}
                        </h3>
                        <div class="blog-info">
                            <div class="post-list">
                                <ul>
                                    <li>
                                        <div class="post-author">
                                            <a href="">


                                                @if ($post->user->image)
                                                    <img src="{{ asset('images/profile/' . $post->user->image) }}"
                                                        alt="Post Author">
                                                @else
                                                    <img src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                        alt="Profile') }}">
                                                @endif
                                                <span>by {{ $post->user->name }} </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li><i class="feather-clock"></i> {{ $post->created_at->diffForHumans() }}</li>
                                    <li><i class="feather-message-square"></i> {{ $post->comments->count() }} Comments</li>
                                    <li><i class="feather-eye me-1"></i> {{ $post->views }} </li>
                                    <li><i class="feather-grid"></i> {{ $post->category->name }}</li>
                                    @if ($post->category->name == 'Verified')
                                        <li><span class="badge badge-gradient-primary">Verified</span></li>
                                    @endif
                                    <li>
                                        <!-- Like/Unlike button -->
                                        @if ($post->isLikedBy(auth()->user()))
                                            <a href="{{ route('posts.unlike', $post) }}" class="text-danger"><i
                                                    class="fa fa-thumbs-down"> Unlike</i>
                                            </a>
                                        @else
                                            <a href="{{ route('posts.like', $post) }}" class="text-prime"><i
                                                    class="fa fa-thumbs-up"> Like</i>
                                            </a>
                                        @endif

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-content">
                            {!! $post->content !!}
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators{{ $post->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @if ($images && count($images) > 0)
                                            @foreach ($images as $index => $image)
                                                <li data-bs-target="#carouselExampleIndicators{{ $post->id }}" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                                            @endforeach
                                        @endif
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        @if ($images && count($images) > 0)
                                            @foreach ($images as $index => $image)
                                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                    <img class="d-block img-fluid" src="{{ asset('images/post/' . $image) }}" alt="Slide {{ $index + 1 }}">
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="assets/img/default.jpg" alt="No Image Available">
                                            </div>
                                        @endif
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $post->id }}" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators{{ $post->id }}" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card blog-comments">
                        <div class="card-header">
                            <h4 class="card-title">Comments ({{ $post->comments->count() }})</h4>
                        </div>

                        <div class="card-body pb-0">
                            @if ($post->comments->isNotEmpty())
                                <ul class="comments-list">
                                    @foreach ($post->comments->where('parent_comment_id', null) as $comment)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    @if ($comment->user->image)
                                                        <img class="avatar"
                                                            src="{{ asset('images/profile/' . $comment->user->image) }}">
                                                    @else
                                                        <img class="avatar"
                                                            src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                                            alt="Profile">
                                                    @endif
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-by">
                                                        <h5 class="blog-author-name">
                                                            {{ $comment->user->name }} <span class="blog-date"> <i
                                                                    class="feather-clock me-1"></i>
                                                                {{ $comment->created_at->diffForHumans() }}</span>
                                                        </h5>
                                                    </div>
                                                    <p>{{ $comment->content }}</p>
                                                    <a class="comment-btn reply-btn" href="#"
                                                        data-comment-id="{{ $comment->id }}">
                                                        <i class="fa fa-reply me-2"></i> Reply
                                                    </a>
                                                </div>
                                            </div>


                                            <ul class="comments-list reply">
                                                @include('user.comments', [
                                                    'comments' => $comment->childComments,
                                                ])
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No comments yet.</p>
                            @endif

                        </div>
                    </div>


                    <div class="card new-comment clearfix">
                        <div class="card-header">
                            <h4 class="card-title">Leave Comment</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posts.comment', $post) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea rows="4" name="content" class="form-control bg-grey" placeholder="Comments"></textarea>
                                </div>
                                <!-- Hidden input for parent comment ID -->
                                <input type="hidden" name="parent_comment_id" id="parentCommentId" value="">

                                <div class="submit-section">
                                    <button class="submit-btn btn-primary btn-blog" style="color:white;" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

    </div>
    <script>
        // Add event listener to reply buttons
        document.querySelectorAll('.reply-btn').forEach(function(replyBtn) {
            replyBtn.addEventListener('click', function(event) {
                event.preventDefault();
                // Get the comment ID from the data-comment-id attribute
                var commentId = this.getAttribute('data-comment-id');
                // Set the comment ID in the hidden input field
                document.getElementById('parentCommentId').value = commentId;
            });
        });
    </script>
@endsection
