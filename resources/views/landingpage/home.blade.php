@extends('layout.app')

@section('content')
    <FixedNavbar ref="fixednavbar"></FixedNavbar>
{{--    <FloatingContactForm></FloatingContactForm>--}}
    @include('landingpage.section_top')
    @include('landingpage.section_services')
    @include('landingpage.section_portfolio')
    @include('landingpage.section_team')
    @include('landingpage.section_contact')
    @include('landingpage.footer')
{{--    @include('landingpage.section_services-two')--}}
{{--    <div class="absolute inset-0 z-0">--}}
{{--        <svg viewBox="0 0 1128 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(0, 90, 128, 1)" d="M 0 0 C 3 0 -9 401 -6 401 L -6 401 L -6 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(0, 90, 128, 1)" d="M -7 401 C 93 401 93 376 193 376 L 193 376 L 193 0 L -7 0 Z" stroke-width="0"></path> <path fill="rgba(0, 90, 128, 1)" d="M 192 376 C 392.5 376 392.5 450 593 450 L 593 450 L 593 0 L 192 0 Z" stroke-width="0"></path><path fill="rgba(0, 90, 128, 1)" d="M 592 450 C 755.5 450 755.5 377 919 377 L 919 377 L 919 0 L 592 0 Z" stroke-width="0"></path><path fill="rgba(0, 90, 128, 1)" d="M 918 377 C 1023 377 1023 400 1128 400 L 1128 400 L 1128 0 L 918 0 Z" stroke-width="0"></path><path fill="rgba(0, 90, 128, 1)" d="M 1127 400 C 1127.5 400 1127.5 0 1128 0 L 1128 0 L 1128 0 L 1127 0 Z" stroke-width="0"></path></svg>--}}
{{--    </div>--}}
@endsection
