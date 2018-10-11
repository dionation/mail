@component('mail::message')
# Bonjour Admin
{{$named}} A un message pour vous.
###{{$email}}
@component('mail::panel')
{{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
