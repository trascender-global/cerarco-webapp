@yield('css')

<link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery-ui-touch-punch-master/jquery.ui.touch-punch.min.js') }}"></script>
@yield('head_script')

<script>
    var CSRF_TOKEN =  $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':CSRF_TOKEN
        }
    });
</script>