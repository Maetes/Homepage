<!DOCTYPE html>
<html lang="de" class="h-full">
<head>
    @include('layout.head')
</head>
<body class="h-full">
    {{--  div wird für mounten von Vue benötigt, nicht ändern oder entfernen  --}}
    <div id="app" class="h-full">
        <FixedNavbar ref="fixednavbar"></FixedNavbar>
        <div id="navbar" class="w-full z-20">
            <NavbarContent></NavbarContent>
        </div>
        @yield('content')
    </div>
    @include('layout.footer')
</body>
</html>
