@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    {{-- Body --}}
   <p class="text-align">
     Bonjour .<br>
     Vous avez une nouvelle commande.  
    

    <table class="panel" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="panel-content">
            <table width="100%" cellpadding="0" cellspacing="0">
                     <tr class="panel-item">
                        <td><strong> Votre panier</strong></td>
                        <td></td>
                    </tr>
                     @foreach (Cart::content() as $item)
                     <tr class="panel-item">
                        <td>{{ $item->name }} X {{ $item->qty }} </td>
                        <td></td>
                        <td>{{ $item->subtotal }} CFA</td>
                    </tr>
                    @endforeach
            </table>
        </td>
    </tr>
  </table>
  <br>
  <table class="panel" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="panel-content">
            <table width="100%" cellpadding="0" cellspacing="0">
                     <tr class="panel-item">
                        <td><p><strong>Moyenne de paiement</strong></p> </td>
                        <td></td>
                        <td><p>Paiement a la livraison</p></td>
                    </tr>
                    <tr class="panel-item">
                        <td><p><strong>TOTAL</strong></p> </td>
                        <td></td>
                        <td><p>{{ Cart::total() }} XOF</p></td>
                    </tr>
            </table>
        </td>
    </tr>
  </table>
</p>


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
