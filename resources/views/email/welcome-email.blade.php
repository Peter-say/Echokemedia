@component('mail::message')
# Introduction

Hello 

@component('mail::button', ['url' => route("dashboard.dashboard")])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
