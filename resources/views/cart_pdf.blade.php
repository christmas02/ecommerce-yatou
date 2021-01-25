
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .text-right {
            text-align: right;
        }
    </style>

</head>
<body class="login-page" style="background: white">

    <div>
        <div class="row">
            <div class="col-xs-7">
                <h4>Winner Store Abidjan</h4>
                    <strong>Company Inc.</strong><br>
                    Telephone: <strong> +225 00 00 00 09</strong><br>
                    Email:<strong> info@winnerstore.com </strong><br><br>
            </div>

            <div class="col-xs-4">
                <img src="winner/images/footer-logo.png" alt="logo" width="200">
            </div>
        </div>

        <div style="margin-bottom: 0px">&nbsp;</div>

        <div class="row">
            <div class="col-xs-6">
                <address>
                  <span>{{ $email }}</span> <br>
                  <span>{{ $tel }}.</span> <br>
                  Chèr(e) <strong>{{ $nom }}<</strong><br>
                  Merci beaucoup pour votre commande et pour la confiance que vous placez en nous!
                  Nous vous facturons par la présente pour ce qui suit:
                </address>
            </div>

            <div class="col-xs-5">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th>Facture N0:</th>
                            <td class="text-right">{{ $matricule }}</td>
                        </tr>
                        <tr>
                            <th> Date: </th>
                            <td class="text-right">{{ $date }}</td>
                        </tr>
                    </tbody>
                </table>

                <div style="margin-bottom: 0px">&nbsp;</div>

                <table style="width: 100%; margin-bottom: 20px">
                    <tbody>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px"><div> </div></th>
                            <td style="padding: 5px" class="text-right"><strong> </strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <table class="table">
            <thead style="background: #F5F5F5;">
                <tr>
                    <th">Designation</th>
					          <th>Prix</th>
				          	<th>Quantite</th>
					          <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach (Cart::content() as $item)
                    <tr class="details">
                        <td><strong>{{ $item->name }} <br>Taille : {{ $item->taille }}</strong></td>
                        <td><strong>{{ $item->price }} CFA</strong></td>
                        <td>{{ $item->qty }}</td>
                        <td><strong class="primary-color">{{ $item->subtotal }} CFA</strong></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

            <div class="row">
                <div class="col-xs-6"></div>
                <div class="col-xs-5">
                    <table style="width: 100%">
                        <tbody>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Paiement </div></th>
                                <td style="padding: 5px" class="text-right"><strong> Paiement a la livraison </strong></td>
                            </tr>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> TOTAL </div></th>
                                <td style="padding: 5px" class="text-right"><strong> {{ Cart::total() }} XOF </strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <div class="row">
                <div class="col-xs-8 invbody-terms">
                     <br>
                    <br>
                    <h4></h4>
                    <p>winnerstoreabidjan.com</p>
                </div>
            </div>
        </div>

    </body>
    </html>

