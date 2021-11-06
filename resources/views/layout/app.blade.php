<!DOCTYPE html>
<html class="overflow-x-hidden" lang="de">
<head>
    @include('layout.head')
</head>
<body>
    {{--  div wird für mounten von Vue benötigt, nicht ändern oder entfernen  --}}
    <div class="relative h-full" id="app">
        <FabButton></FabButton>
        <mobilemenu></mobilemenu>
        @yield('content')
        @include('layout.footer')
    </div>
</body>
</html>
