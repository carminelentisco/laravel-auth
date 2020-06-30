@component('mail::message')
# NuovoPost

*E' stato creato un nuovo post*

{{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
Visita l'archivio
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent