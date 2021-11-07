<section class="text-gray-800 font-basic">
    <div id="services" class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <h2 class="sm:text-3xl text-2xl font-semibold font-title text-mtw-text mb-4">Unsere Services</h2>
{{--            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>--}}
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-mtw-primary inline-flex"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-3 lg:grid-cols-3 lg:grid-rows-1 gap-4 lg:gap-4 xl:gap-6 mx-auto px-2 sm:px-10">
{{--        <div class="flex space-x-3 sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">--}}

            <div class="p-4 flex flex-col text-center items-center bg-gray-100 rounded-2xl shadow-md transform hover:border hover:border-gray-200 hover:-translate-y-2 hover:bg-mtw-lightblue hover:text-gray-900 ease-out duration-300">
{{--                <img src="{{asset('/storage/img/app_dev.jpg')}}">--}}

                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-mtw-primary text-mtw-secondary mb-5 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg font-title font-bold mb-3">Softwareentwicklung</h2>
                    <p class="leading-relaxed text-base font-basic flex-grow">Wir entwickeln die Website oder App, die Sie sich wünschen: Landingpages, Unternehmensportale, CMS-Systeme oder auch völlig individuelle Softwarelösungen. Einen Auszug unserer verwendeten Technologien finden Sie im Portfolio.</p>
                    <a class="mt-3 text-mtw-primary inline-flex items-center font-basic" href="{{ route('services.softwareentwicklung') }}">Hier erfahren Sie mehr
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 flex flex-col text-center items-center bg-gray-100 rounded-2xl shadow-md transform hover:border hover:border-gray-200 hover:-translate-y-2 hover:bg-mtw-lightblue hover:text-gray-900 ease-out duration-300">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-mtw-primary text-mtw-secondary mb-5 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg font-title font-bold mb-3">IT-Beratung</h2>
                    <p class="leading-relaxed text-base font-basic">Sie sind sich unsicher in digitalen Fragen oder haben sogar konkrete Vorstellungen, wissen aber nicht, wie Sie es umsetzen sollen? Sie benötigen Hilfe oder einen Partner in digitalen Fragen für sich oder Ihr Unternehmen?</p>
                    <a class="mt-3 text-mtw-primary inline-flex items-center font-basic" href="{{ route('services.it-beratung') }}">Wir beraten Sie gerne
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 flex flex-col text-center items-center bg-gray-100 rounded-2xl shadow-md transform hover:border hover:border-gray-200 hover:-translate-y-2 hover:bg-mtw-lightblue hover:text-gray-900 ease-out duration-300">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-mtw-primary text-mtw-secondary mb-5 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hdd-network" viewBox="0 0 16 16">
                        <path d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8.5v3a1.5 1.5 0 0 1 1.5 1.5h5.5a.5.5 0 0 1 0 1H10A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5H.5a.5.5 0 0 1 0-1H6A1.5 1.5 0 0 1 7.5 10V7H2a2 2 0 0 1-2-2V4zm1 0v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1zm6 7.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5z"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg font-title font-bold mb-3">Informations- und Telekommunikationstechnik</h2>
                    <p class="leading-relaxed font-basic text-base">Sie benötigen technische Ausstattung oder Hilfe bei der Installation und Beschaffung? Sowohl bei der benötigten Soft- und Hardware helfen wir Ihnen gerne analog oder digital Fuß zu fassen und solide Lösungen für Sie oder Ihr Unternehmen zu finden und zu installieren.</p>
                    <a class="mt-3 text-mtw-primary inline-flex items-center font-basic" href="{{ route('services.itk-services') }}">Wir beraten Sie gerne
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
