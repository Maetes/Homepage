<!DOCTYPE html>
<html lang="de" class="">
<head>
    @include('layout.head')
</head>
<body class="">
    {{--  div wird für mounten von Vue benötigt, nicht ändern oder entfernen  --}}
    <div id="app" class="min-h-screen bg-gray-100 font-basic">
        <FixedNavbar ref="fixednavbar"></FixedNavbar>
        <div id="navbar" class="w-full z-20 bg-mtw-primary-lighter">
            <NavbarContent></NavbarContent>
        </div>
        @yield('content')
    </div>
    @include('layout.footer')
</body>
</html>
