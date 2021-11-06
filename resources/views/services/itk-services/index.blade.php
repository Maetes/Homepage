@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="Informations- und Telekommunikationstechnik"
        mediaLink="/vid/hardware.mp4"
        mediaType="vid" vidType="video/mp4" buttonText="Zu den Leistungen">
        Als technischer Partner stehen wir Ihnen jederzeit kompetent zur Seite. Von der Beratung der zu beschaffenden Infrastruktur bis hin zur Installation und Implementierung in Ihrem Unternehmen übernehmen wir jeden Arbeitsschritt.
    </x-hero-with-card>

    <section class="text-gray-600 body-font">
        <div class="pt-20 h-32 w-full bg-white">
        </div>
        <div id="Zu den Leistungen" class="container px-5 py-24 mx-auto">
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-mtw-primary-lighter text-mtw-secondary flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-16 sm:h-16 w-10 h-10 bi bi-hdd-network" viewBox="0 0 16 16">
                        <path d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8.5v3a1.5 1.5 0 0 1 1.5 1.5h5.5a.5.5 0 0 1 0 1H10A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5H.5a.5.5 0 0 1 0-1H6A1.5 1.5 0 0 1 7.5 10V7H2a2 2 0 0 1-2-2V4zm1 0v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1zm6 7.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5z"/>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Netzwerktechnik</h2>
                    <p class="leading-relaxed text-base pb-4">Mit der zunehmenden Digitalisierung ist es wichtig, dass alle Geräte reibungslos miteinander kommunizieren können und das gesamte Unternehmen vernetzt ist. Das ist eine komplexe Aufgabe, die wir gerne für Sie übernehmen.
                        <br>Angefangen beim Aufbau Ihres Netzwerks mit Servern, LAN und W-LAN, bis hin zur Verkabeleung und drahtlosen Vernetzung aller Endgeräte.
                        <br><br>Gerne beraten wir Sie auch beim Ausbau, Instandhaltung und der Problembehebung bestehender Infrastruktur.
                    <p>
                    <a href="{{ route('services.it-beratung') }}" class="px-4 py-2 text-sm sm:text-base rounded-lg bg-mtw-primary text-mtw-secondary hover:bg-gray-700 transform hover:scale-95 font-semibold">Mehr zur IT-Bertung</a>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">IP Telefonanlagen</h2>
                    <p class="leading-relaxed text-base">Wir übernehmen alle Schritte zur Installation einer IP-Telefonanlage für Ihr Unternehmen. Neben der Installation und Konfiguration übernehmen wir die Verlegung sämtlicher dafür notwendiger Technik.</p>
                </div>
                <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-mtw-primary-lighter text-mtw-secondary flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-16 sm:h-16 w-10 h-10 bi bi-headset" viewBox="0 0 16 16">
                        <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                      </svg>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-mtw-primary-lighter text-mtw-secondary flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-16 sm:h-16 w-10 h-10 bi bi-server" viewBox="0 0 16 16">
                        <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                        <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                        <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Server, Virtualisierung und PCs</h2>
                    <p class="leading-relaxed text-base">Wir setzten die Grundlage flexibler IT-Infrastrukturen und installieren und konfigurieren für Sie Desktop-PCs, Workstations, Laptops, Smartphones und jegliche weitere Endgeräte, die Sie für Ihren Geschäftsalltag benötigen.
                        <br><br>Bei der Konfiguration und Installation von PCs setzen wir vor allem auf Server-Virtualisierung, durch die zentral gesteuert verschiedene Betriebssysteme gleichzeitig auf nur einem Server laufen können. Das schafft <span class="font-bold">Flexibilität</span> bei der Auswahl von Anwendungen, <span class="font-bold">Ausfallsicherheit</span> durch die Virtualisierung, <span class="font-bold">Sicherheit</span> durch automatische Backups und größtenteils problemlose <span class="font-bold">Erweiterbarkeit</span> des bestehenden Systems.
                    </p>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Wartung und Support</h2>
                    <p class="leading-relaxed text-base">Zusätzlich zu unseren anderen Leistungen bieten wir auch grundsätzlichen Support in allen IT-Fragen und Problemen des Alltagsgeschäfts.
                        <br><br>Ein PC ist ausgefallen ? Internetverbindungen funktionieren nicht mehr ? Sie können sich nicht mehr anmelden ? Sie benötigen Hilfe bei der Einrichtung eines neuen Geräts ?
                        <br><br>Zusammen finden wir eine Lösung für Ihr Problem.
                    </p>
                </div>
                <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-mtw-primary-lighter text-mtw-secondary flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-16 sm:h-16 w-10 h-10 bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      </svg>
                </div>
            </div>
        </div>
        </section>

@endsection
