<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center text-sm-left">
                        <h2 class="breadcrumb-title">{{ $title }}</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-6">
                        <ul class="breadcrumb-list text-center text-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ $seccion }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>