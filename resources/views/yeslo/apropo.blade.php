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
        <!-- About Main Area Start -->
        <div class="about-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="about-img">
                            <img class="img" src="{{asset('/yeslo/img/banner/about.jpg')}}" alt="about-us">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="about-content">
                            <h3>Qui sommes nous?</h3>
                            <p>Mellentesque faucibus dapibus dapibus. Morbi aliquam aliquet neque. Donec placerat
                                dapibus sollicitudin. Morbi arcu nisi, mattis ullamcorper in, dapibus ac nunc. Cras
                                bibendum mauris et sapien nibh feugiat. scelerisque accumsan nibh gravida. Quisque
                                aliquet justo elementum lectus ultrices bibendum.</p> <br>
                            <p>dapibus ac nunc. Cras bibendum mauris et sapien feugiat. scelerisque accumsan nibh
                                gravida. Quisque aliquet justo elementum lectus ultrices bibendum.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Main Area End -->
        <!-- Our Mission Start -->
        <div class="about-bottom pt-50 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="ht-single-about pb-sm-40">
                            <h3>Notre experience</h3>
                            <h5>fusce fringilla porttitor iaculi sed quam libero, adipiscing sed erat id praesent eu
                                nis.</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada
                                vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu,
                                pellentesque at sodales sit amet, Phasellus tempor nunc eleifend cursus molestie. Mauris
                                lectus arcu, pellentesque at sodales sit amet,</p>
                            <p>Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla,
                                sagittis non erat id, dictum vestibulum ligula. Maecenas sed enim sem.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ht-single-about">
                            <h3>Notre valeurs</h3>
                            <div class="ht-about-work">
                                <span>1</span>
                                <div class="ht-work-text">
                                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
                                    </p>
                                </div>
                            </div>
                            <div class="ht-about-work">
                                <span>2</span>
                                <div class="ht-work-text">
                                    <h5><a href="#">DONEC FERMENTUM EROS</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
                                    </p>
                                </div>
                            </div>
                            <div class="ht-about-work">
                                <span>3</span>
                                <div class="ht-work-text">
                                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Mission End -->
@endsection