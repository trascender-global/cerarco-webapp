<div id="comment_{{ $topic->id }}">
    <div class="comment-card comment-card-primary ml-2 ml-md-0 mb-2 mb-md-3">
        <div class="row flex-column flex-md-row">
            <div class="col-7">
                <p class="user-name-title ml-2 ml-md-3">{{ $topic->user->name }}</p>
                <p class="post-date-title ml-2 ml-md-3">{{ $topic->created_at->diffForHumans() }}</p>
            </div>
            <div class="col-1 mt-2 mt-md-0 mr-md-1 mb-0 ml-1 ml-md-4">
                <button type="button"
                    class="interact-btn d-flex justify-content-center align-items-center btn_like_topic"
                    data-id="{{ $topic->id }}"
                    data-forum="{{ $topic->forum_id }}"
                    >
                    <img 
                    @if (Auth::user()) 
                        @if ($topic->likes()->where('user_id', Auth::user()->id)->first()) 
                            src="{{ asset('assets/svg/like-icon-blue.svg') }}" 
                        @else 
                            src="{{ asset('assets/svg/like-icon.svg') }}"
                        @endif
                    @else 
                        src="{{ asset('assets/svg/like-icon.svg') }}" 
                    @endif alt="Like icon" class="p-1">
                    <span class="number-count">{{ $topic->likes->count() }}</span>
                </button>
            </div>
            <div class="col-2 mt-2 mt-md-0 mb-0 ml-1 ml-md-3">
                <button type="button"
                    class="interact-btn d-flex justify-content-center align-items-center btn_message_topic"
                    data-id="{{ $topic->id}}"
                    data-forum="{{ $topic->forum_id}}">
                    <img src="{{ asset('assets/svg/share-arrow.svg') }}" width="24" height="24" alt="Like icon"
                        class="p-1">
                    <span class="reply-title">Respuestas</span>
                    <span class="number-count" id="number_count_topic_{{$topic->id}}">{{ $topic->topic_messages->count() }}</span>
                </button>
            </div>
        </div>
        <div class="">
            <p class="description ml-2 ml-md-3">{{ $topic->description }}</p>
        </div>
    </div>
</div>
