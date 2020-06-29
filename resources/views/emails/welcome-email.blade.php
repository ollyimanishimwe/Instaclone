@component('mail::message')
# Welcome to this chat and we love to see you here

uryoherwe.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
