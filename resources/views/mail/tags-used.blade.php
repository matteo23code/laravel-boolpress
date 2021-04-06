@component('mail::message')
    # Attenzione!!! Nuovi tag!

    Ti servono dei tag??

    @foreach ($tags as $tag)
        * {{ $tag->name }},
    @endforeach
    @component('mail::button', ['url' => ''])
        Clicca qui!
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
