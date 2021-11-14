<!DOCTYPE html>
<html lang="de" class="">
<head>
    @include('layout.head')
</head>
<body class="">
    {{--  div wird für mounten von Vue benötigt, nicht ändern oder entfernen  --}}
    <div id="app" class="relative min-h-screen bg-gray-100 font-basic">
        <FabButton></FabButton>
        
        <FixedNavbar ref="fixednavbar"></FixedNavbar>
        <div id="navbar" class="w-full z-20 bg-mtw-primary-lighter">
            <NavbarContent></NavbarContent>
        </div>

        @yield('content')
        <section class="bg-white  py-10">
            <div class="flex flex-col items-center justify-center ">
                <p class="text-lg text-mtw-text text-center">Konnten wir Sie von uns überzeugen?</p>
                <p class="text-3xl font-bold text-center pb-10">Dann nehmen Sie jetzt gerne Kontakt mit uns auf.</p>
                <a class="px-5 py-3 bg-mtw-primary text-mtw-secondary rounded-xl text-2xl font-semibold hover:bg-mtw-darkgrey transform hover:scale-95" href="/#kontakt">Jetzt kontaktieren</a>
            </div>
        </section>
        {{-- <mobilecontactform info_company="{{ json_encode($info_company)}}"></mobilecontactform> --}}
        <mobilemenu></mobilemenu>
    </div>
    @include('layout.footer')

</body>
</html>
