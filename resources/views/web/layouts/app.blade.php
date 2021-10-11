<!DOCTYPE html>
<html lang="en">

    @include('web.layouts.includes.head')
    @include('web.layouts.includes.header')
    {{-- @include('web.layouts.includes.banner') --}}


    @yield('contents')
    
    @include('web.layouts.includes.footer')
    @include('web.layouts.includes.script')



