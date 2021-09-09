@component('mail::message')
# Kontaktformular
gesendet:
{{date("d.m.Y H:m:s")}}

## E-Mail-Adresse:
@component('mail::panel')
{{$email}}
@endcomponent

## Name:
@component('mail::panel')
{{$name}}
@endcomponent

## Nachricht:
@component('mail::panel')
{{$message}}
@endcomponent

@endcomponent
