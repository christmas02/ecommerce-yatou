

<page backtop="10mm">
    
	
	<style>
  .details td{
  text-align:center;
  font-size:14px;
  border-bottom: 1px solid #DADADA;
  border-top: 1px solid #DADADA;
  padding:10px 10px;
  }

  th {
  color: #30323A;
  text-transform: uppercase;
  border-bottom: 1px solid #DADADA;
  border-top: 1px solid #DADADA;
  text-align:center;
  padding:15px 10px;
  width:130px;
  }
  .footer td{
  color: red;
  text-transform: uppercase;
  border-bottom: 1px solid #DADADA;
  border-top: 1px solid #DADADA;
  text-align:center;
  padding:15px 10px;
  font-size:17px;
  }
  .logo-enter{
    height:100px;
    margin-bottom:50px;
    float:left;
    display:block;
  }
  .infos-client{
    height:100px;
    margin-bottom:50px;
    float:right;
    display:block;
  }

</style>


<page_header backtop="0mm">
    <strong> {{ strtoupper(config('app.name')) }} </strong>
</page_header>
<page_footer>
  <table style="font-size:8pt" align="center">
    <tr>
      <td>
        - <small> {{ config('app.name') }} </small>
      </td>
    </tr>
  </table>
</page_footer>
<div class="logo-enter">
    <img src="stylle/img/logos.png" alt=""> <br><br>
    Telephone: <strong> +225 00 00 00 00</strong><br><br>
    Email:<strong> info@microde.com </strong><br><br>
    Date: <strong>{{ $date }}</strong>
</div>

       <div class="infos-client">
         <h3>INFORMATIONS CLIENT</h3>
         Nom et prenom : <strong>{{ $nom2 }}</strong> <strong> {{ $prenom2 }}</strong><br><br>
         Status : <strong> Non salariere </strong><br><br> 
         Telephone : <strong>{{ $tel2 }} </strong><br><br>
         Email : <strong>{{ $email2 }} </strong><br><br>
         Lieux de livraison : <strong>{{ $ville2 }} </strong><br><br>
         Mode de payement : <strong>{{ $souscrip2 }} </strong>
         Numero de la cni : <strong>{{ $cni }} </strong>
        </div>


<hr>

<table class="shopping-cart">
      <thead>
        <tr>
          <th class="titre">Designation</th>
					<th class="titre">Prix</th>
					<th class="titre">Quantite</th>
					<th class="titre">Total</th>
			  </tr>
      </thead>
      <tbody>
      @foreach (Cart::content() as $item)
        <tr class="details">
          <td><strong>{{ $item->name }}</strong></td>
          <td><strong>{{ $item->price }} CFA</strong></td>
          <td>{{ $item->qty }}</td>
          <td><strong class="primary-color">{{ $item->subtotal }} CFA</strong></td>
        </tr>
      @endforeach
				<tr class="footer">
				  <td colspan="3">TOTAL</td>
					<td  class="total">{{ Cart::total() }} CFA</td>
				</tr>
    </tbody>
  </table>
 

</page>


