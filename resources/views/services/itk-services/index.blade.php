@extends('layout.subpage')

@section('content')
    <x-hero-with-card title="ITK-Services"
        mediaLink="/vid/hardware.mp4"
        mediaType="vid" vidType="video/mp4" buttonText="Button unsichtbar wenn kein Text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dicta ullam perspiciatis, repudiandae commodi dolores, rem dolorum fugiat earum enim dolore possimus accusantium alias ab autem tempora explicabo saepe laboriosam?
    </x-hero-with-card>


    <section class="bg-white  py-10">
        <div class="flex flex-col items-center justify-center ">
            <p class="text-lg text-mtw-text">Konnten wir Sie von uns überzeugen ?</p>
            <p class="text-3xl font-bold pb-10">Dann nehmen Sie jetzt gerne Kontakt mit uns.</p>
            <a class="px-5 py-3 bg-mtw-primary text-mtw-secondary rounded-xl text-2xl font-semibold hover:bg-mtw-darkgrey transform hover:scale-95" href="/#kontakt">Jetzt kontaktieren</a>

        </div>

    </section>

@endsection
