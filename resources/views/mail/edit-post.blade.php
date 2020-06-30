@component('mail::message')
# Post Aggiornato

*E' stato Aggiornato il post un post*

{{ $title }}

<hr>

{{ $body }}


@component('mail::button', ['url' => config('app.url') . '/posts'])
Visita l'archivio
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent