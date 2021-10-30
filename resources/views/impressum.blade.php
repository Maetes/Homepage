@extends('layout.app')

@section('content')
    <div id="navbar" class="w-full z-20">
        <NavbarContent></NavbarContent>
    </div>

    <div class="mx-auto px-10 lg:px-32 py-10 font-basic">
        <h1 class="text-2xl font-semibold font-title pb-3">Impressum</h1>
        {{--  Impressum Content --}}

        <h2>Angaben gemäß § 5 TMG:</h2>
        <hr>
        <p>MTW IT-Solutions UG (haftungsbeschränkt)</p>
        <br><br>
        <h3>Postanschrift:</h3>
        <hr>
        <p>Am Spargelfeld 9<br>53797 Lohmar</p>
        <br><br>
        <h3>Kontakt:</h3>
        <hr>
        <p>Telefon: (02241) 9558782<br>E-Mail: mail@mtw-it.de</p>
        <br><br>
        <h3>Geschäftsführer: </h3>
        <hr>
        <p></p>
        <ul style="list-style-type:none; padding: 0; margin: 0; ">
            <li>Müller, Martin</li>
            <li>Tomczak, Tim</li>
            <li>Walbröl, Sven</li>
        </ul>(jeweils einzelvertretungsberechtigt)
        <br><br>
        <h3>Handelsregister:</h3>
        <hr>
        <p>Amtsgericht Siegburg
            <br>HRB 16697<br></p>
        <br><br>
        <h3>Umsatzsteuer-Identifikationsnummer (USt-IdNr.):</h3>
        <hr>
        <p>DE346806402</p>

    </div>
@endsection
