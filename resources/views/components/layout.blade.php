@props(['title'])
    
    @include('partials._header')
    
    {{$slot}}

    @include('partials._footer')