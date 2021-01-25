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
                                <h3>Créer son compte Ets LEIM</h3>
                            </div>
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Nom et Prenom<span>*</span></label>
                                            <input name="name" type="text" required>
                                            <input name="role" hidden type="text" value="1" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Adresse ekectronique<span>*</span></label>
                                            <input name="email" type="email" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Mot de passe<span>*</span></label>
                                            <input name="password" type="password" required>
                                        </div>	
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group message">
                                            <label>Confirmation mot de passe<span>*</span></label>
                                            <input name="password_confirmation" type="password"  required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">S'inscrire</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--/ End Contact -->
	
@endsection
