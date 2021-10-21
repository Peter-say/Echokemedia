@component('mail::message')
# Introduction

Hello  {{$user->user->name}}

@component('mail::button', ['url' => route("admin.dashboard")])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
