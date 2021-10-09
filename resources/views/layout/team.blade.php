<!DOCTYPE html>
<html lang="de">
<head>
    @include('layout.head')
</head>
<body>
    {{--  div wird für mounten von Vue benötigt, nicht ändern oder entfernen  --}}
    <div class="relative h-full" id="app">
        <FixedNavbar ref="fixednavbar"></FixedNavbar>
        <div id="navbar" class="w-full z-20">
            <NavbarContent></NavbarContent>
        </div>
        @yield('content')
    </div>
</body>
</html>
