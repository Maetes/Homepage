<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}

<link rel="manifest" href="/manifest.json">
<link rel="apple-touch-icon" sizes="57x57" href="/img/logos/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/logos/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/logos/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/logos/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/logos/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/logos/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/logos/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/logos/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/logos/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/logos/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/logos/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/logos/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/logos/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#005a80">
<meta name="msapplication-TileImage" content="/img/logos/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#005a80">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/manifest.js')}}"></script>
<script src="{{asset('/js/vendor.js')}}"></script>
<script src="{{asset('/js/app_defer.js')}}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
