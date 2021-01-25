@component('mail::message')


@if($data['typeMessage'] == 'client')

    @switch($data['etatCmd'])
        @case(1)
                Chère client(e) Votre Commande vous sera bientôt livrée par un livreur

                #Information du livreur

                Nom & Prénoms Client: {{ $data['name'] }}
                Téléphone: {{ $data['contact'] }}

            @break
        @case(2)
                Chère client votre Commande vous a  bien été livrée.
                @component('mail::button', ['url' => 'http://localhost:8000'])
                    Retour sur WinnerStore
                @endcomponent
            @break
        @case(3)
                Chère client votre Commande vous a bien été annulée.
                @component('mail::button', ['url' => 'http://localhost:8000'])
                    Retour sur WinnerStore
                @endcomponent
            @break
        @default

    @endswitch

@else
    @switch($data['etatCmd'])

        @case(1)
                Chère Livreur merci d'avoir éffectuée cette commande.

                Matricule  Commande:  {{ $data['matricule'] }}
                Lieu de Livraison:  {{ $data['lieu'] }}
                Nom & Prénoms Client: {{ $data['nomClient'] }}
                Téléphone: {{ $data['telephone'] }}
            @break
        @case(2)
                Chère Livreur La Commande à bien été livrée Merci d'avoir executer votre travail.
            @break
        @case(3)
                votre Commande a bien été Annulée.
            @break
        @default

    @endswitch


@endif


Merci,<br>
{{ config('app.name') }}
@endcomponent
