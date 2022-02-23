@if(session()->has('type') && session()->has('mensaje'))
    <div class="col-lg-12">
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@else
    @if(session()->has('mensaje'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Atención!</strong> {{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endif
