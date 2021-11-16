@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="Informations- und Telekommunikationstechnik"
        mediaLink="/vid/hardware.mp4"
        mediaType="vid" vidType="video/mp4" buttonText="Zu den Leistungen">
        Als technischer Partner stehen wir Ihnen jederzeit kompetent zur Seite. Von der Beratung der zu beschaffenden Infrastruktur bis hin zur Installation und Implementierung in Ihrem Unternehmen übernehmen wir jeden Arbeitsschritt.
    </x-hero-with-card>

    <section id="Zu den Leistungen"  class="bg-gray-50">

        <div class="container px-5 py-16 mx-auto flex flex-wrap">

            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Netzwerktechnik</h1>
                <p class="leading-relaxed text-base pb-4">Mit der zunehmenden Digitalisierung ist es wichtig, dass alle Geräte reibungslos miteinander kommunizieren können und das gesamte Unternehmen vernetzt ist. Das ist eine komplexe Aufgabe, die wir gerne für Sie übernehmen:
                    <br>Vom Aufbau Ihres Netzwerks mit Servern, LAN und W-LAN, bis hin zur Verkabelung und drahtlosen Vernetzung aller Endgeräte.
                    <br><br>Gerne beraten wir Sie auch beim Ausbau, Instandhaltung und der Problembehebung bestehender Infrastruktur.
                <p>
                </div>
                {{-- <div class="leading-relaxed">Neben des klassischen Telefonsupports beraten wir Sie zur Einführung von digitalen Lösungen wie Chatbots, Ticketsystemen, Kundenforen und weiteren Möglichkeiten.</div>
                </div> --}}
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/customer_center.webp') }}" alt="Bild Aufgeklappter Laptop auf Tisch"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/network.webp') }}" alt="stats">
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">
            <div class="flex sm:hidden flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">IP-Telefonanlagen</h1>
                <p class="leading-relaxed text-base">Wir übernehmen alle Schritte zur Installation einer IP-Telefonanlage für Ihr Unternehmen. Das schließt die Konfiguration und die Verlegung sämtlicher dafür notwendiger Technik ein.</p>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mb-6 sm:my-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/server_network.webp') }}" alt="Bild Netzwerkkabel and Server"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/ip_phone.webp') }}" alt="stats">
            </div>
            <div class="hidden sm:flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">IP-Telefonanlagen</h1>
                <p class="leading-relaxed text-base">Wir übernehmen alle Schritte zur Installation einer IP-Telefonanlage für Ihr Unternehmen. Das schließt die Konfiguration und die Verlegung sämtlicher dafür notwendiger Technik ein.</p>
            </div>

            </div>
      </section>

    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">

            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Server, Virtualisierung und PCs</h1>
                <div class="leading-relaxed">Gerne untertützen wir Sie beim Aufbau Ihrer eigenen Cloud-Lösung zur zentralen Informations- und Datenablage, die einen einfachen Informationsaustausch zwischen Standorten, Abteilungen oder Mitarbeitern ermöglicht.</div>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/cloud.webp') }}" alt="Bild Aneinandergereite Festplatten"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/server_rack.webp') }}" alt="stats">
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">
            <div class="flex sm:hidden flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Wartung und Support</h1>
                <p class="leading-relaxed text-base">Zusätzlich zu unseren anderen Leistungen bieten wir auch grundsätzlichen Support in allen IT-Fragen und Problemen des Alltagsgeschäfts.
                    <br><br>Ein PC ist ausgefallen ? Internetverbindungen funktionieren nicht mehr ? Sie können sich nicht mehr anmelden ? Sie benötigen Hilfe bei der Einrichtung eines neuen Geräts ?
                    <br><br>Zusammen finden wir eine Lösung für Ihr Problem.
                </p>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mb-6 sm:my-0">
                {{-- <lazyload tagtype="img" classes="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" loading='lazy' src="{{ asset('/img/server_network.webp') }}" alt="Bild Netzwerkkabel and Server"></lazyload> --}}
                <img class="object-cover object-center w-full h-80 sm:h-full lg:h-80 rounded-lg" src="{{ asset('/img/support.webp') }}" alt="stats">
            </div>
            <div class="hidden sm:flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Wartung und Support</h1>
                <p class="leading-relaxed text-base">Zusätzlich zu unseren anderen Leistungen bieten wir auch grundsätzlichen Support in allen IT-Fragen und Problemen des Alltagsgeschäfts.
                    <br><br>Ein PC ist ausgefallen ? Internetverbindungen funktionieren nicht mehr ? Sie können sich nicht mehr anmelden ? Sie benötigen Hilfe bei der Einrichtung eines neuen Geräts ?
                    <br><br>Zusammen finden wir eine Lösung für Ihr Problem.
                </p>
            </div>

            </div>
      </section>

@endsection
