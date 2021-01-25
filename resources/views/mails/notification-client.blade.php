@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

@switch($data['etatCmd'])
    @case(1)
            Votre Commande vous sera bientôt livrée par un livreur

            Information du livreur

            Nom & Prénoms Client: {{ $data['name'] }}
            Téléphone: {{ $data['contact'] }}

        @break
    @case(2)
             Votre Commande vous a  bien été livrée.

        @break
    @case(3)
             Votre Commande vous a bien été annulée.
        @break
    @default

@endswitch
Merci,


  {{-- Subcopy --}}
  @isset($subcopy)
  @slot('subcopy')
      @component('mail::subcopy')
          {{ $subcopy }}
      @endcomponent
  @endslot
@endisset

{{-- Footer --}}
@slot('footer')
  @component('mail::footer')
      © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
  @endcomponent
@endslot
@endcomponent

