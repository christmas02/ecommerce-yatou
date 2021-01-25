@extends('yeslo.header')

@section('content')
     <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Google Map Start -->
        <div class="container">
            <div id="map"></div>
        </div>
        <!-- Google Map End -->
        <!-- Contact Email Area Start -->
        <div class="contact-email-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nous joindre</h3>
                        <p class="text-capitalize mb-40">Etre plus proche de vous.</p>
                        <form id="contact-form" class="contact-form" action="mail.php" method="post">
                            <div class="address-wrapper">
                                <div class="row">    
                                    <div class="col-md-12">
                                        <div class="address-fname">
                                            <input type="text" name="name" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="address-email">
                                            <input type="email" name="email" placeholder="Adresse electronique ">
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm-12">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="Objet">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-textarea">
                                            <textarea name="message" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="form-message ml-15"></p>
                            <div class="col-xs-12 footer-content mail-content">
                                <div class="send-email">
                                    <input type="submit" value="Envoyer" class="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Email Area End -->
@endsection