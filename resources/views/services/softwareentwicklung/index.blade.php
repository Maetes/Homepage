@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="Softwareentwicklung"
        mediaLink="{{ asset('/vid/Notebook.mp4') }}"
        mediaType="vid" vidType="video/mp4" buttonText="Zum Entwicklungsprozess">
        Wir entwickeln Ihre individuelle Softwarelösung nach Ihren Wünschen.
        <br>Wir bieten ein breites Kompetenzspektrum, das es uns erlaubt sowohl <span class="font-bold">Webanwendungen</span>, als auch <span class="font-bold">mobile Apps</span> zu entwickeln.
        <br><br>Die Nutzung fortschrittlicher Technologien und Einhaltung von <span class="font-bold">höchsten Sicherheitsstandards</span> ist dabei eine Selbstverständlichkeit für uns.
        {{-- Wir entwickeln moderne, responsive Websites basierend auf den neusten und zuverlässigsten Technologien.
        <br>Landingpages als Ihre digitale Visitenkarte, repräsentative Unternehmensportale, Blogs, Onlineshops oder ganz individuelle Softwarelösungen.
        <br><br>Außerdem bieten wir auch hybride mobile App-Lösungen basierend auf Webtechnologien an, die dadurch sowohl auf iOS, als auch auf Andorid gleichermaßen verfügbar sind. --}}
    </x-hero-with-card>

    <div class="w-full h-32 bg-mtw-primary"></div>
    <div class="container mx-auto transform -translate-y-20 grid grid-cols-1 px-6 sm:px-20 md:px-6 md:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-8">
        <x-card>
            <x-slot name="title">Webseitenerstellung</x-slot>
            Wer sich im Internet gut präsentieren und auch schnell gefunden werden möchte, benötigt eine moderne, repräsentative und
            suchmaschinenoptimierte Homepage. Das gilt für Kleingewerbe, große Unternehmen, wie auch für Privatpersonen.
            <br>
            <p class="font-medium pt-1">Wir erstellen die individuelle Webseite, die Sie sich wünschen.</p>
        </x-card>
        <x-card>
            <x-slot name="title">Content Management-Systeme</x-slot>
            Für größere Portale, Blogs oder Webseiten mit vielen Inhalten empfehlen wir <abbr
                title="Content Management Systeme">CMS-Systeme</abbr>, die es Ihnen ermöglichen Ihre Inhalte ohne technisches Hintergrundwissen selbst zu
            verwalten und zu generieren.
            <br><br>Hierzu nutzen wir <span class="font-semibold">Wordpress</span>, <span
                class="font-semibold">Typo3</span> oder bei individuellen Vorstellungen auch <span class="font-semibold">selbst
                entwickelte Lösungen</span> zum Content Management.
        </x-card>
        <x-card>
            <x-slot name="title">Shopsysteme</x-slot>
            Wer Produkte verkaufen möchte, für den ist eine gute Präsenz im E-Commerce unumgänglich.
            <br>Wunschweise bauen oder optimieren wir Ihren Onlineshop.
        </x-card>
        <x-card>
            <x-slot name="title">Individuelle Softwarelösungen</x-slot>
            Sie möchten Ihre individuellen Prozesse digitalisieren oder haben eine Idee, die nicht in das Standardkorsett von anderen Lösungen passt? Kein Problem!
            <br><br>Hier sind wir mit modernsten Technologien fachlich bestens aufgestellt, um Sie zu beraten und Ihre maßgeschneiderte Lösung zu entwickeln.
        </x-card>
    </div>

    <section id="Zum Entwicklungsprozess" class="text-gray-600 body-font py-10">
        <div class="mx-auto  ">
            <h1 class="font-bold text-3xl lg:text-5xl text-mtw-text text-center">Unser Entwicklungsprozess</h1>
            <h3 class="text-xl text-center pt-3">In 6 Schritten mit uns zu Ihrem erfolgreichen digitalen Produkt</h3>
        </div>
        <div class="container px-5 py-12 mx-auto flex flex-wrap">
            <div class="flex relative group pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 transform group-hover:scale-105 ease-in-out duration-300 w-10 h-10 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-mtw-primary text-white relative z-10 title-font font-medium text-sm">
                    1</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-20 h-20 group-hover:bg-mtw-text ease-in-out duration-300 bg-mtw-primary text-mtw-secondary rounded-lg inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" class="bi bi-easel2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z"/>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 transform group-hover:translate-x-2 ease-in-out duration-300">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Planung des Projektes</h2>
                        <p class="leading-relaxed">Am Anfang jedes erfolgreichen Projektes steht eine solide Planung. Hier werden Zeitrahmen, Ziele und Wünsche festgehalten, um das Projekt erfolgreich nach Ihren Erwartungen abschließen zu können.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative group pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 transform group-hover:scale-105 ease-in-out duration-300 w-10 h-10  rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-mtw-primary text-white relative z-10 title-font font-medium text-sm">
                    2</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-20 h-20 group-hover:bg-mtw-text ease-in-out duration-300 bg-mtw-primary text-mtw-secondary rounded-lg inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 transform group-hover:translate-x-2 ease-in-out duration-300">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Analyse und Definition von Anforderungen</h2>
                        <p class="leading-relaxed">Um ein Produkt entwicklen zu können, müssen zunächst konkrete Anforderungen definiert werden. Definierte Meilensteine dienen der Kontrolle der Umsetzung von Anforderungen und des Projektfortschritts.</p>
                        <p class="leading-relaxed pt-2">Durch die von uns angewendeten agilen Entwicklungsverfahren können Anforderungen im Laufe eines Projektes jederzeit angepasst oder neu hinzugenommen werden.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative group pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 transform group-hover:scale-105 ease-in-out duration-300 w-10 h-10  rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-mtw-primary text-white relative z-10 title-font font-medium text-sm">
                    3</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-20 h-20 group-hover:bg-mtw-text ease-in-out duration-300 bg-mtw-primary text-mtw-secondary rounded-lg inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 transform group-hover:translate-x-2 ease-in-out duration-300">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Entwurf und Prototyp</h2>
                        <p class="leading-relaxed">Im Rahmen der festgehaltenen Anforderungen erfolgt die Entwicklung eines Prototypen oder eines Erstentwurfs. Nach gemeinsamer Durchsicht und Durchsprache können weitere Feinjustierungen vorgenommen werden.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative group pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 transform group-hover:scale-105 ease-in-out duration-300 w-10 h-10  rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-mtw-primary text-white relative z-10 title-font font-medium text-sm">
                    4</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-20 h-20 group-hover:bg-mtw-text ease-in-out duration-300 bg-mtw-primary text-mtw-secondary rounded-lg inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 transform group-hover:translate-x-2 ease-in-out duration-300">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Entwicklung und Realisierung</h2>
                        <p class="leading-relaxed">Im gemeinsamen Austausch erfolgt sukzessive die Entwicklung des Produktes. So können Sie stets Einblick in die laufende Entwicklung nehmen.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative group pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 transform group-hover:scale-105 ease-in-out duration-300 w-10 h-10  rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-mtw-primary text-white relative z-10 title-font font-medium text-sm">
                    5</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-20 h-20 group-hover:bg-mtw-text ease-in-out duration-300 bg-mtw-primary text-mtw-secondary rounded-lg inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                          </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 transform group-hover:translate-x-2 ease-in-out duration-300">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Tests und Einführung</h2>
                        <p class="leading-relaxed">Durch technische und fachliche Tests kann hohe Qualität und korrekte Umsetzung der definierten Anforderungen gewährleistet werden. Gemeinsam mit Ihnen wird das Produkt in Ihrem Unternehmen implementiert. Bei Bedarf übernehmen wir gerne die Schulung Ihrer Mitarbeiter, vor Ort oder in einem Onlineseminar.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative group pb-10 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 transform group-hover:scale-105 ease-in-out duration-300 w-10 h-10  rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-mtw-primary text-white relative z-10 title-font font-medium text-sm">
                    6</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-20 h-20 group-hover:bg-mtw-text ease-in-out duration-300 bg-mtw-primary text-mtw-secondary rounded-lg inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" class="bi bi-question-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0 transform group-hover:translate-x-2 ease-in-out duration-300">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Support und Wartung</h2>
                        <p class="leading-relaxed">Auch nach Abschluss eines Projektes begleiten wir Sie.</p>
                        <p>Regelmäßige Updates und zuverlässiger Support gewährleisten den dauerhaft reibungslosen Einsatz des Produktes in Ihrem Unternehmen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
