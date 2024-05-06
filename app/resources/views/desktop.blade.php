@include('header')

@if ($first_login)
    @include('welcomeWindow')
@endif

@include('navBar')
@include('startMenu')

@include('footer')
