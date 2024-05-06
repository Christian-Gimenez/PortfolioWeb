@include("header");

@if (session("login") === "error")
    @include("windowError");
@else
    @include("windowLogin");
@endif


@include("footer");
