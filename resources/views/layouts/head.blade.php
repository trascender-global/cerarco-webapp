@yield('css')

<link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>

<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>

@yield('head_script')

<script>
    var CSRF_TOKEN =  $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':CSRF_TOKEN
        }
    });
</script>