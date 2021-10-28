<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="{{ $admin_assets}}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

    </head>

<style>
    .rounded-profile{
        width: 80px;
        height: 80px;
        background: gray;        
        border-radius: 40px;
    }
</style>
    @include('web.layouts.includes.head')
    @include('web.layouts.includes.header')
    {{-- @include('web.layouts.includes.side_bar') --}}


    @yield('contents')
    
    @include('web.layouts.includes.footer')
    @include('web.layouts.includes.script')


</html>
