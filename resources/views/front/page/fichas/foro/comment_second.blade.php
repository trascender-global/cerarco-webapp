<div id="comment_second_{{ $message->id }}" class="comment-card comment-card-seconday d-none d-md-block">
    <div class="row flex-column flex-md-row">
        <div class="col-10">
            <p class="user-name-title ml-2 ml-md-3">{{ $message->user->name }}</p>
            <p class="post-date-title ml-2 ml-md-3">{{ $message->created_at->diffForHumans() }}</p>
        </div>
        <div class="col-1 mr-md-1 mt-2 mt-md-0 mb-0">
            <button type="button"
                class="interact-btn d-flex justify-content-center align-items-center btn_like_message"
                data-id="{{ $message->id }}"
                    data-forum="{{ $message->forum_id }}">
                <img 
                @if (Auth::user()) 
                        @if ($message->likes()->where('user_id', Auth::user()->id)->first()) 
                            src="{{ asset('assets/svg/like-icon-blue.svg') }}" 
                        @else 
                            src="{{ asset('assets/svg/like-icon.svg') }}"
                        @endif
                    @else 
                        src="{{ asset('assets/svg/like-icon.svg') }}" 
                    @endif alt="Like icon"
                    class="p-1">
                <span class="number-count">{{$message->likes->count()}}</span>
            </button>
        </div>
    </div>
    <div class="">
        <p class="description ml-2 ml-md-3">{{$message->comment}}</p>
    </div>
</div>