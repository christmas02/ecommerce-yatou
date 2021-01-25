@component('mail::message')
@switch($data['etatCmd'])
    @case(1)
            Vous avez reçu une nouvelle commande à livrée.

            Matricule  Commande:  {{ $data['matricule'] }}
            Lieu de Livraison:  {{ $data['lieu'] }}
            Nom & Prénoms Client: {{ $data['nomClient'] }}
            Téléphone: {{ $data['telephone'] }}
        @break
    @case(2)
            La Commande à bien été livrée Merci d'avoir executer votre travail.
        @break
    @case(3)
            votre Commande a bien été Annulée.
        @break
    @default

@endswitch



Merci,<br>
{{ config('app.name') }}
@endcomponent
