@extends('template.header')
@section('content')
        
<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
		<div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h3>Connexion</h3>
                            </div>
                            <!-- Login Form -->
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                                
                                <input id="email" class="fadeIn second" type="email" name="email" placeholder="Adresse electronique">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif

                                <input id="password" type="password" class="fadeIn third" placeholder="Mot de passe" name="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                                <input type="submit" class="fadeIn fourth" value="Se connecter">
                                <div style="margin-top: -20px;">ou</div>
                                <a href="register.html"><div class="underlineHover" ><b>Créer un compte</b></div></a><br><br>

                            </form>
                            <!-- Remind Passowrd -->
                            <div id="formFooter">
                            <a class="underlineHover" href="#"><i>Mot de passe oublié?</i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--/ End Contact -->
	
@endsection
