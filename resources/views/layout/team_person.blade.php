<!DOCTYPE html>
<html lang="de">
<head>
    @include('layout.head')
</head>
<body>
    {{--  div wird für mounten von Vue benötigt, nicht ändern oder entfernen  --}}
    <div id="app">
        <FixedNavbar ref="fixednavbar"></FixedNavbar>
        <div id="navbar" class="w-full z-20 bg-mtw-primary-lighter">
            <NavbarContent></NavbarContent>
        </div>
        <div class="mx-auto min-h-screen px-6 xl:px-24 2xl:px-32 bg-gray-100 h-full pt-20 lg:pt-32 font-basic">
            <div class="grid grid-cols-12 gap-2">
                <div class="lg:hidden col-span-12 bg-white rounded-md shadow p-2">
                    <h1 class="flex justify-center items-center text-xl font-title font-medium">{{ $user_info['name'] }}</h1>
                    <h3 class="flex justify-center items-center text-gray-500">{{ $user_info['position'] }}</h3>
                </div>
                <div class="col-span-12 lg:col-span-6 flex justify-center items-center">
                    <img class="rounded-md shadow-md" src="{{ $user_info['profile_image'] }}" alt="Profilbild">
                </div>
                <div class="col-span-12 lg:hidden p-2 bg-white rounded-md shadow-md">
                    <div class="grid grid-cols-5 gap-2 mx-auto">
                        <span class="flex justify-center items-center col-span-1 text-mtw-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                        </span>
                        <div class="flex-col col-span-4 ml-3">
                            <p>{{ $user_info['email'] }}</p>
                        </div>
                        @if ($user_info['telefon'] !== '')
                            <span class="flex justify-center items-center col-span-1 text-mtw-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </span>
                            <div class="flex-col col-span-4 ml-3">
                                <p>{{ $user_info['telefon'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="hidden lg:flex flex-col col-span-6 p-2 bg-white rounded-md shadow-md justify-between">
                    <div>
                        <h1 class="flex justify-center items-center text-xl font-title font-medium">{{ $user_info['name'] }}</h1>
                        <h3 class="flex justify-center items-center text-gray-500 font-basic">{{ $user_info['position'] }}</h3>
                        <p class="mt-4 px-4">@yield('info_text')</p>
                    </div>
                    <div class="flex justify-evenly">
                        <a href="mailto:$user_info['email']" class="flex items-center transform hover:scale-105 hover:text-mtw-primary">
                            <span class="text-mtw-primary mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg>
                            </span>
                            {{ $user_info['email'] }}
                        </a>
                        @if ($user_info['telefon'] !== '')
                        <a href="tel:{{ $user_info['telefon'] }}" class="flex items-center transform hover:scale-105 hover:text-mtw-primary">
                            <span class="text-mtw-primary mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </span>
                            {{ $user_info['telefon'] }}
                        </a>
                        @endif
                    </div>
                </div>
                <div class="lg:hidden col-span-12 p-2 bg-white rounded-md shadow-md mt-2">
                    @yield('info_text')
                </div>
                {{-- @if ($user_info['text']!='')
                    <div class="col-span-12 p-2 bg-white rounded-md shadow-md">
                        <p>{{ $user_info['text'] }}</p>
                    </div>
                @endif --}}
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>
</html>
