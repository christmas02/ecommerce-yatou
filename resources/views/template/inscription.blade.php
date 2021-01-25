@extends('template.header2')

@section('content')
<div class="page-header">
	<div class="container">
		<ol class="breadcrumb">
			<li class="active">Inscription</li>
		</ol>
	</div>
</div>

<section class="checkout container">
	<div class="row">
		<section class="billing-address col-md-6 col-md-offset-3">
			<header>
				<h3 class="section-title"><span class="step-no">1.</span> Inscription Client</h3>
			</header>
			<div class="billing-address-form">
				<form method="post" name="formulaire1" action="{{ action('Welcome@storeClient') }}">
					@csrf
					<div class="form-group">
						<label for="first-name">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="Entrez votre Nom ">
                        <br>
                        @if(!empty($errors->has('name')))
                            <div class="alert alert-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
					</div>
					<div class="form-group">
						<label for="last-name">Prenoms</label></label>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrez vos Prenoms">
                        <br>
                        @if(!empty($errors->has('prenom')))
                            <div class="alert alert-danger">
                                {{ $errors->first('prenom') }}
                            </div>
                        @endif
					</div>
					<div class="form-group">
						<label for="email">Adresse Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Entrez votre Email">
                        <br>
                        @if(!empty($errors->has('email')))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
					</div>
					<div class="form-group">
						<label for="street-address">Telephone </label>
                        <input type="text" class="form-control" name="telephone" placeholder="00 00 00 00">
                        <br>
                        @if(!empty($errors->has('telephone')))
                            <div class="alert alert-danger">
                                {{ $errors->first('telephone') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
						<label for="street-address">Mot de passe </label>
                        <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe">
                        <br>
                        @if(!empty($errors->has('password')))
                            <div class="alert alert-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
						<label for="street-address">Confirmer le mot de passe </label>
						<input type="password" id="password" class="form-control" name="password_confirmation" placeholder="Confirmez votre mot de passe ">
					</div>
                    <input type="hidden" name="role" value="1">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
				</form>
			</div>
		</section>

	</div>
</section>


@endsection
