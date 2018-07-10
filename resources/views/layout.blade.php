<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Depress Out Loud!</title>
    <link href="{{URL::to('css/Supernice.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/formcustom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/postcustom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/navcustom.css')}}" rel="stylesheet" type="text/css">
    <script src="{{URL::to('jquery-3.0.0.min.js')}}"></script>
    <script src="{{URL::to('bootstrap.min.js')}}"></script>

</head>
<body>
    @include('navbar')
    @include('unav')

    <br>
    @include('alert')
    @yield('content')
    <script src="{{URL::to('likeajax.js')}}"></script>
</body>
</html>

<script>
    var token = "{{ csrf_token() }}";
    var urlLike = '{{ route('like') }}';
    var urlDislike = '{{ route('dislike') }}';
</script>


<script>
    $(document).ready(function() {
        $("html,body").animate({scrollTop: 0}, 1500);
    });
</script>

