<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/app_defer.js')}}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
