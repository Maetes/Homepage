<div>
    <div class="font-basic py-5 md:py-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-0">
                <div class="flex flex-col justify-between 2xl:justify-evenly px-4">
                    <h1 class="font-bold text-3xl md:text-3xl xl:text-4xl 2xl:text-5xl text-mtw-text break-words">{{ $title }}</h1>
                    <p class="text-gray-600 text-lg pt-4 2xl:pt-0">
                        {{ $slot }}
                    </p>
                </div>
                @if ($buttonText !== "")
                <div class="block md:hidden py-5 px-4 mb-8">
                    <a href="#{{ $buttonText }}" class="px-3 py-2 text-sm rounded-lg bg-mtw-primary text-mtw-secondary font-semibold">{{ $buttonText }}</a>
                </div>
                @endif

                <div class="mx-auto h-full w-11/12 sm:w-10/12 relative">
                    <div class="absolute h-full w-full top-0 z-0 transform -rotate-3 rounded-xl bg-gradient-to-br from-mtw-primary to-mtw-secondary"></div>
                    {{-- <video class="h-full rounded-xl transform rotate-3 translate-x-1 z-10 object-cover" muted loop preload="auto" autoplay>
                        <source src="https://player.vimeo.com/external/173394760.sd.mp4?s=f7c192f6a68de1be330319f7a3959619162f8710&amp;profile_id=164&amp;oauth2_token_id=57447761" type="video/mp4">
                    </video> --}}
                    @if ($mediaType==='img')
                        <img class="h-full rounded-xl transform rotate-3 translate-x-1 z-10 object-cover" src="{{ $mediaLink }}" alt="coding bild">
                        {{-- <img class="h-full rounded-xl transform rotate-3 translate-x-1 z-10 object-cover" src="https://images.pexels.com/photos/574069/pexels-photo-574069.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="coding bild"> --}}
                    @elseif($mediaType==='vid')
                        {{-- <lazyload tagtype='video' classes="h-full w-full rounded-xl transform rotate-3 translate-x-1 z-10 object-cover" poster='/img/camera-video-off.svg' playsinline autoplay='' muted='' loop='' preload='auto' src='{{ $mediaLink }}' type='{{ $vidType }}'></lazyload> --}}
                        <video class="h-full rounded-xl transform rotate-3 translate-x-1 z-10 object-cover" muted loop preload="auto" autoplay>
                            <source src="{{ $mediaLink }}" type="{{ $vidType }}">
                        </video>
                    @endif


                </div>
                @if ($buttonText !== "")
                <div class="hidden md:block py-5 2xl:py-0 px-4">
                    <a href="#{{ $buttonText }}" class="px-3 py-2 lg:px-4 lg:py-3 text-base rounded-lg bg-mtw-primary text-mtw-secondary font-semibold">{{ $buttonText }}</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
