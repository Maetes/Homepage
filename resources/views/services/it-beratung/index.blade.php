@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="IT-Beratung"
        mediaLink="/vid/consult.mp4"
        mediaType="vid" vidType="video/mp4" buttonText="Beispiele für Beratungsleistungen">
        Wir beraten Sie nicht nur vollumfänglich zur <span class="font-semibold">Digitalisierung Ihrer Geschäftsprozesse</span>, sondern stehen Ihnen auch als verlässlicher Partner bei der Neugestaltung oder der Restrukturierung Ihrer gesamten IT-Landschaft zur Seite.
        <br><br>Unser Fokus liegt dabei stets auf Ihrem Geschäftsmodell und Ihren Vorstellungen.
    </x-hero-with-card>


    {{-- <div class="w-full h-32 bg-mtw-primary">
    </div> --}}

    <section class="bg-gray-50">
        <div class="pt-20 h-32 w-full bg-white">
            {{-- <h2 class="font-bold w-full text-3xl lg:text-5xl text-mtw-text text-center">Beispiele für Beratungsleistungen</h2> --}}
        </div>

        <div id="Beispiele für Beratungsleistungen" class="container px-5 py-16 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Netzwerktechnik</h1>
                <div class="leading-relaxed">Wir übernehmen alle Schritte zur Installation einer IP-Telefonanlage für Ihr Unternehmen. Neben der Installation und Konfiguration übernehmen wir die Verlegung sämtlicher dafür notwendiger Technik.</div>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-80" src="{{ asset('/img/network.jpg') }}" alt="stats">
            </div>
            </div>
      </section>
    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-80" src="{{ asset('/img/cloud.jpg') }}" alt="stats">
            </div>
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Cloud-Lösungen und zentrale Datenverarbeitung</h1>
                <div class="leading-relaxed">Wir beraten Sie beim Aufbau Ihrer eigenen Cloud-Lösung zur zentralen Informations- und Datenablage, die einen einfachen Informationsaustausch zwischen Standorten, Abteilungen oder Mitarbeitern ermöglicht.</div>
                </div>
            </div>

            </div>
      </section>
    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">

            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Digitalisierung von Geschäftsprozessen</h1>
                <div class="leading-relaxed">Beratung zur Umsetzung einer digitalen Kundenhotline. Neben des klassischen Telefonsupports beraten wir Sie zur Einführung von digitalen Lösungen wie Chatbots, Ticketsystemen, Kundenforen und weiteren Möglichkeiten.</div>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-80" src="{{ asset('/img/customer_center.webp') }}" alt="stats">
            </div>
            </div>
      </section>
    <section class="bg-gray-50">
        <div class="container px-5 py-16 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-80" src="{{ asset('/img/server_network.jpg') }}" alt="stats">
            </div>
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Modernisierung und Implementierung von IT-Lösungen</h1>
                <div class="leading-relaxed">Wir beraten Sie hinsichtlich der Vereinheitlichung Ihrer IT-Landschaft, insbesondere zur Eingliederung von historisch entstandenen Insellösungen in eine gesamte IT-Infrastruktur.</div>
                </div>
            </div>

            </div>
      </section>

    <section class="bg-white  py-10">
        <div class="flex flex-col items-center justify-center ">
            <p class="text-lg text-mtw-text">Konnten wir Sie von uns überzeugen ?</p>
            <p class="text-3xl font-bold pb-10">Dann nehmen Sie jetzt gerne Kontakt mit uns.</p>
            <a class="px-5 py-3 bg-mtw-primary text-mtw-secondary rounded-xl text-2xl font-semibold hover:bg-mtw-darkgrey transform hover:scale-95" href="/#kontakt">Jetzt kontaktieren</a>
        </div>
    </section>

@endsection
