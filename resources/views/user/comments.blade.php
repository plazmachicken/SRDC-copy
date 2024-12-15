@if ($comments->isNotEmpty())
    <ul>
        @foreach ($comments as $comment)
            <li>
                <div class="comment">
                    <div class="comment-author">
                        @if ($comment->user->image)
                            <img class="avatar" src="{{ asset('images/profile/' . $comment->user->image) }}">
                        @else
                            <img class="avatar" src="{{ asset('assets/img/profiles/icons8-user-100.png') }}"
                                alt="Profile">
                        @endif
                    </div>
                    <div class="comment-block">
                        <div class="comment-by">
                            <h5 class="blog-author-name">{{ $comment->user->name }} <span class="blog-date"> <i
                                        class="feather-clock me-1"></i>
                                    {{ $comment->created_at->diffForHumans() }}</span></h5>
                        </div>
                        <p>{{ $comment->content }}</p>
                        <a class="comment-btn reply-btn" href="#" data-comment-id="{{ $comment->id }}">
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
@endif
