{{--<span class="absolute z-0 top-0 h-full w-full bg-gradient-to-t from-white via-mtw-lightblue to-mtw-lightblue" style="clip-path: polygon(0 0, 100% 0, 100% 79%, 20% 100%, 0 100%, 0 50%);"></span>--}}
{{--<span class="absolute z-0 top-0 h-full w-full bg-mtw-primary bg-opacity-50" style="clip-path: polygon(0 0, 100% 0, 100% 80%, 0% 100%, 0 100%);"></span>--}}
<span class="absolute z-0 top-0 h-full w-full bg-mtw-primary bg-opacity-50"></span>
{{--<span class="absolute z-0 top-0 h-full w-full" ></span>--}}



<section class="flex flex-col h-full text-gray-800 relative" >
{{--    <div class="absolute top-0 w-full h-full">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%">--}}
{{--            <path fill="#0099ff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,202.7C384,192,480,160,576,154.7C672,149,768,171,864,165.3C960,160,1056,128,1152,128C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>--}}
{{--        </svg>--}}
{{--    </div>--}}
    <div id="navbar" class="w-full z-20">
        <NavbarContent></NavbarContent>
    </div>
    <div class="flex-auto -mt-20 z-10" >
        <div class="flex flex-col h-full justify-center ">
            <div class="flex flex-col sm:mt-auto sm:flex-row justify-center items-center">
                <div class="font-title h-64 pb-10 sm:pb-0 pl-10  text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mr-10">
                    <h1 class="">Wir schaffen Ihre</h1>
{{--                    <h1 class="h-20 inline-flex bg-clip-text font-extrabold text-transparent bg-gradient-to-br via-mtw-primary from-mtw-primary to-mtw-secondary">IT-Lösung</h1>--}}
                    <h1 class="h-10 sm:h-20 inline-flex text-mtw-primary">IT-Lösungen</h1>
{{--                    <p class="text-sm sm:text-base lg:text-lg font-medium font-basic">Web- und Appentwicklung &centerdot; IT-Beratung &centerdot; ITK-Services</p>--}}
                    <Typewriter></Typewriter>
                </div>
                <div class="hidden sm:block relative lg:pr-20">
                    <div class="relative z-10">
                        <img class="z-10 h-5/6 w-5/6" src="{{asset('./img/illustration/illustration.svg')}}" alt="Illustration">
                    </div>
                    <div class="absolute bottom-0 right-0 sm:right-14 md:right-16 lg:right-24 z-0" >
                        <img class="z-0 h-4/6 w-4/6 rotate-img-big sm:w-44 sm:h-44 md:w-60 md:h-60 lg:h-72 lg:w-72 xl:w-full xl:h-full" src="{{asset('./img/illustration/illustration_zahnrad_big.svg')}}" alt="Illustration">
                    </div>
                    <div class="absolute top-0 z-0" >
                        <img class="z-0 h-4/6 w-4/6 rotate-img sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-44 lg:h-44 xl:w-full xl:h-full" src="{{asset('./img/illustration/illustration_zahnrad.svg')}}" alt="Illustration">
                    </div>
                </div>
                <div class="sm:hidden pt-10 -mb-10 relative">
                    {{--Verhältnis: 1,1266--}}
                    <div class="relative z-10">
                        <img class="z-10" src="{{asset('./img/illustration/illustration_small.svg')}}" alt="Illustration">
                    </div>
                    <div class="absolute bottom-0 right-0 z-0" >
                        <img class="z-0 rotate-img-big" src="{{asset('./img/illustration/illustration_zahnrad_big_small.svg')}}" alt="Illustration">
                    </div>
                    <div class="absolute top-0 z-0" >
                        <img class="z-0 rotate-img" src="{{asset('./img/illustration/illustration_zahnrad_small.svg')}}" alt="Illustration">
                    </div>
                </div>
            </div>
            @include('landingpage.section_customer-logos')

        </div>

    </div>
</section>
