@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="IT-Beratung"
        mediaLink="/vid/consult.mp4"
        mediaType="vid" vidType="video/mp4" buttonText="Beispiele für Beratungsleistungen">
        Wir beraten Sie nicht nur vollumfänglich zur <span class="font-semibold">Digitalisierung Ihrer Geschäftsprozesse</span>, sondern stehen Ihnen auch als verlässlicher Partner bei der Neugestaltung oder der Restrukturierung Ihrer gesamten IT-Landschaft zur Seite.
        <br><br>Unser Fokus liegt dabei stets auf Ihrem Geschäftsmodell und Ihren Vorstellungen.
    </x-hero-with-card>
    <div class="pt-20 h-32 w-full bg-white">
        {{-- <h2 class="font-bold w-full text-3xl lg:text-5xl text-mtw-text text-center">Beispiele für Beratungsleistungen</h2> --}}
    </div>
    {{-- <div class="w-full h-32 bg-mtw-primary flex flex-wrap items-center justify-center">
        <p class="text-gray-50 text-3xl font-bold pr-5 text-center">Sie suchen nach Softwarelösungen ?</p>
        <a href="{{ route('services.softwareentwicklung') }}" class="px-4 py-2 text-sm sm:text-base rounded-lg bg-gray-700 text-mtw-secondary hover:bg-gray-800 transform hover:scale-95 font-semibold">Hier informieren</a>
    </div> --}}

    {{-- <div class="w-full h-32 bg-mtw-primary">
    </div> --}}

    <section id="Beispiele für Beratungsleistungen"  class="bg-gray-50">

        <div class="container px-5 py-16 mx-auto flex flex-wrap">

            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Digitalisierung von Geschäftsprozessen</h1>
                <div class="leading-relaxed">Die Digitalisierung von Prozessen ist heute erforderlich, um morgen weiterhin wettbewerbsfähig zu sein.
                    <br>Wir beraten Sie zur effektiven und effizienten Digitalisierung Ihrer Geschäftsprozesse.
                    <br>Die Dokumentation und Analyse bestehender Prozesse erfolgt mittels moderner Prozessmanagementverfahren. So werden Chancen zum Einsatz von Digitalisierungsmaßnahmen für jeden Prozessschritt sichtbar.
                    <br>Die Restrukturierung oder Neugestaltung der Prozesse erfolgt zeitgleich mit deren Digitalisierung.
                </div>
                </div>
                {{-- <div class="leading-relaxed">Neben des klassischen Telefonsupports beraten wir Sie zur Einführung von digitalen Lösungen wie Chatbots, Ticketsystemen, Kundenforen und weiteren Möglichkeiten.</div>
                </div> --}}
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/customer_center.webp') }}" alt="Bild Aufgeklappter Laptop auf Tisch"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/customer_center.webp') }}" alt="stats">
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">
            <div class="flex sm:hidden flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Modernisierung und Implementierung von IT-Lösungen</h1>
                <div class="leading-relaxed">Historisch gewachsene IT-Strukturen und Insellösungen sind nicht selten unübersichtlich, bedingen manuelle Eingriffe und schaffen Anwenderhürden.
                    <br>Gemeinsam mit Ihnen entwickeln wir Ihre Lösung einer ganzheitlichen IT-Struktur.
                    <br>Diese kann durch die Schaffung intelligenter Schnittstellen oder die Ersetzung von Software durch Anwendungen, die miteinander kommunizieren, realisiert werden.</div>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mb-6 sm:my-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/server_network.webp') }}" alt="Bild Netzwerkkabel and Server"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/server_network.webp') }}" alt="stats">
            </div>
            <div class="hidden sm:flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Modernisierung und Implementierung von IT-Lösungen</h1>
                <div class="leading-relaxed">Historisch gewachsene IT-Strukturen und Insellösungen sind nicht selten unübersichtlich, bedingen manuelle Eingriffe und schaffen Anwenderhürden.
                    <br>Gemeinsam mit Ihnen entwickeln wir Ihre Lösung einer ganzheitlichen IT-Struktur. Diese kann durch die Schaffung intelligenter Schnittstellen oder die Ersetzung von Software durch Anwendungen, die miteinander kommunizieren, realisiert werden.</div>
                </div>
            </div>

            </div>
      </section>

    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">

            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Cloud-Lösungen und zentrale Datenverarbeitung</h1>
                <div class="leading-relaxed">Gerne untertützen wir Sie beim Aufbau Ihrer eigenen Cloud-Lösung zur zentralen Informations- und Datenablage, die einen einfachen Informationsaustausch zwischen Standorten, Abteilungen oder Mitarbeitern ermöglicht.</div>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/cloud.webp') }}" alt="Bild Aneinandergereite Festplatten"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/cloud.webp') }}" alt="stats">
            </div>
        </div>
    </section>



@endsection
