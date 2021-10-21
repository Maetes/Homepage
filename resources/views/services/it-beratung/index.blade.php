@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="IT-Beratung"
        mediaLink="/vid/consult.mp4"
        mediaType="vid" vidType="video/mp4" buttonText="">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum consectetur facere est quo similique, doloremque dignissimos consequuntur. Dolorum delectus possimus, vitae at voluptatum harum eius nesciunt consequatur excepturi quas sit?
    </x-hero-with-card>


    <section class="bg-white  py-10">
        <div class="flex flex-col items-center justify-center ">
            <p class="text-lg text-mtw-text">Konnten wir Sie von uns überzeugen ?</p>
            <p class="text-3xl font-bold pb-10">Dann nehmen Sie jetzt gerne Kontakt mit uns.</p>
            <a class="px-5 py-3 bg-mtw-primary text-mtw-secondary rounded-xl text-2xl font-semibold hover:bg-mtw-darkgrey transform hover:scale-95" href="/#kontakt">Jetzt kontaktieren</a>

        </div>

    </section>

@endsection
