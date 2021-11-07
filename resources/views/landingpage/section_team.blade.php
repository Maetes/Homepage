<section class="text-gray-600 bg-gray-100 body-font">
    <div id="team" class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full">
            <div class="text-center mb-20">
                <h2 class="sm:text-3xl text-2xl font-semibold font-title text-mtw-text mb-4">Unser Team</h2>
                {{--            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>--}}
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-mtw-primary inline-flex"></div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center mx-auto -m-4">
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="h-full flex flex-col items-center text-center">
                    <a href="{{ route('team.martin') }}">
                        <img width="256" height="224" alt="team" class="opacity-60 hover:opacity-90 flex-shrink-0 rounded-lg w-64 h-56 object-cover object-center mb-4" src="./img/team/martin.webp">
                    </a>
                    <div class="w-full">
                        <a href="{{ route('team.martin') }}">
                            <h3 class="title-font font-medium text-lg text-gray-900">Martin Müller</h3>
                        </a>
                        <h4 class="text-gray-500 mb-3">Geschäftsführer</h4>
                        <span class="inline-flex">

                                        {{--<a class="text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                                        --}}
                            <a aria-label="send email to martin@mtw-it.de" class="ml-2 text-gray-500" href="mailto:martin@mtw-it.de">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="h-full flex flex-col items-center text-center">
                    <a href="{{ route('team.tim') }}">
                        <img width="256" height="224" alt="team" class="opacity-60 hover:opacity-90 flex-shrink-0 rounded-lg w-64 h-56 object-cover object-center mb-4" src="./img/team/tim.webp">
                    </a>
                    <div class="w-full">
                        <a href="{{ route('team.tim') }}">
                            <h3 class="title-font font-medium text-lg text-gray-900">Tim Tomczak</h3>
                        </a>
                        <h4 class="text-gray-500 mb-3">Geschäftsführer</h4>
                        <span class="inline-flex">

                            {{-- <a class="text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>--}}
              <a aria-label="send email to tim@mtw-it.de" class="ml-2 text-gray-500" href="mailto:tim@mtw-it.de">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="h-full flex flex-col items-center text-center">
                    <a href="{{ route('team.sven') }}">
                        <img width="256" height="224" alt="team" class="opacity-60 hover:opacity-90 flex-shrink-0 rounded-lg w-64 h-56 object-cover mb-4" src="/img/team/sven.webp">
                    </a>
                    <div class="w-full">
                        <a href="{{ route('team.sven') }}">
                            <h3 class="title-font font-medium text-lg text-gray-900">Sven Walbröl</h3>
                        </a>
                        <h4 class="text-gray-500 mb-3">Geschäftsführer</h4>
                        <span class="inline-flex">

                            {{-- <a class="text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>--}}
              <a aria-label="send email to sven@mtw-it.de" class="ml-2 text-gray-500" href="mailto:sven@mtw-it.de">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
