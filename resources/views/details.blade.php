@extends('layouts.real')

@section('page-name')
    Detalhes
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Dashboard</a></li>--}}
    {{--    <li class="breadcrumb-item active">Dashboard</li>--}}
@endsection


@section('resultado')
{{--@php(dd($casa))--}}
    <section class="page-section">
        <div class="container">

            <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <small>Offering the whole range of properties</small>
                <span>{{$casa->descricao}}</span>
                <small>{{$casa->preco}}</small>

            </h2>


            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="first-slide" src="/storage/{{$casa->url}}" alt="First slide">
{{--                        <div class="container">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <h1>Example headline.</h1>--}}
{{--                                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>--}}
{{--                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    @foreach($casa->imagens as $imagem)
                    <div class="item">
                        <img class="second-slide" src="/storage/{{$imagem->url}}" alt="Second slide">
{{--                        <div class="container">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <h1>Another example headline.</h1>--}}
{{--                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
{{--                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <table>
                <tr><td>Tipo de imovel: </td> <td><b>{{$casa->tipo_imovel}}</b></td></tr>
                <tr><td>Dimensoes: </td> <td><b>{{$casa->metros_quadrado}}</b></td></tr>
                <tr><td>Quartos: </td> <td><b>{{$casa->quartos}}</b></td></tr>
                <tr><td>Garagem: </td> <td><b>{{$casa->garagem?"Tem":"Não tem"}}</b></td></tr>
                <tr><td>Bairro: </td> <td><b>{{$casa->bairro->descricao}}</b></td></tr>
            </table>


{{--            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--                <div class="carousel-inner">--}}
{{--                    <div class="carousel-item active">--}}
{{--                        <img src="..." class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img src="..." class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img src="..." class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">--}}
{{--                <ul id="tabs1" class="nav"><!----}}
{{--                                --><li class=""><a href="#tab-x1" data-toggle="tab">Villa</a></li><!----}}
{{--                                --><li class="active"><a href="#tab-x2" data-toggle="tab">House</a></li><!----}}
{{--                                --><li class=""><a href="#tab-x3" data-toggle="tab">Office</a></li><!----}}
{{--                                --><li class=""><a href="#tab-x4" data-toggle="tab">Industrial</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">--}}
{{--                <!-- tab 1 -->--}}
{{--                <div class="tab-pane fade active in" id="tab-x1">--}}
{{--                    <div class="property-big-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-3">--}}
{{--                                <div class="tabs awesome-sub">--}}
{{--                                    <ul id="tabs4" class="nav"><!----}}
{{--                                                    --><li class=""><a href="#tab-x1x1" data-toggle="tab">Luxury Mansion</a></li><!----}}
{{--                                                    --><li class="active"><a href="#tab-x1x2" data-toggle="tab">Elegant Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x1x3" data-toggle="tab">Sophisticated Residence</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x1x4" data-toggle="tab">Futuristic Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x1x4" data-toggle="tab">Stylish Apartment</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}

{{--                                <!-- Sub tabs content -->--}}
{{--                                <div class="tab-content">--}}

{{--                                    <div class="tab-content">--}}

{{--                                        <div class="tab-pane fade" id="tab-x1x1">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-8">--}}
{{--                                                    <!-- Swiper -->--}}
{{--                                                    <div class="swiper-container" id="swiperSlider1x1">--}}
{{--                                                        <div class="swiper-wrapper">--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a class="btn btn-zoom" href="" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                                <a href="" data-gal="prettyPhoto"><img class="img-responsive" src="" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/storage/{{$casa->url}}" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                                <a href="" data-gal="prettyPhoto"><img class="img-responsive" src="" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- Add Pagination -->--}}
{{--                                                        <div class="row property-thumbnails"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <div class="property-details">--}}
{{--                                                        <div class="price">--}}
{{--                                                            <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="list">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Air Conditioning</li>--}}
{{--                                                                <li>Fully Furnished</li>--}}
{{--                                                                <li>Garage</li>--}}
{{--                                                                <li>Balcony</li>--}}
{{--                                                                <li>Storage</li>--}}
{{--                                                                <li>Security System</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="button">--}}
{{--                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade active in" id="tab-x1x2">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-8">--}}
{{--                                                    <!-- Swiper -->--}}
{{--                                                    <div class="swiper-container" id="swiperSlider1x2">--}}
{{--                                                        <div class="swiper-wrapper">--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- Add Pagination -->--}}
{{--                                                        <div class="row property-thumbnails"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <div class="property-details">--}}
{{--                                                        <div class="price">--}}
{{--                                                            <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="list">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Air Conditioning</li>--}}
{{--                                                                <li>Fully Furnished</li>--}}
{{--                                                                <li>Garage</li>--}}
{{--                                                                <li>Balcony</li>--}}
{{--                                                                <li>Storage</li>--}}
{{--                                                                <li>Security System</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="button">--}}
{{--                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="tab-x1x3">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-8">--}}
{{--                                                    <!-- Swiper -->--}}
{{--                                                    <div class="swiper-container" id="swiperSlider1x3">--}}
{{--                                                        <div class="swiper-wrapper">--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- Add Pagination -->--}}
{{--                                                        <div class="row property-thumbnails"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <div class="property-details">--}}
{{--                                                        <div class="price">--}}
{{--                                                            <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="list">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Air Conditioning</li>--}}
{{--                                                                <li>Fully Furnished</li>--}}
{{--                                                                <li>Garage</li>--}}
{{--                                                                <li>Balcony</li>--}}
{{--                                                                <li>Storage</li>--}}
{{--                                                                <li>Security System</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="button">--}}
{{--                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="tab-x1x4">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-8">--}}
{{--                                                    <!-- Swiper -->--}}
{{--                                                    <div class="swiper-container" id="swiperSlider1x4">--}}
{{--                                                        <div class="swiper-wrapper">--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- Add Pagination -->--}}
{{--                                                        <div class="row property-thumbnails"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <div class="property-details">--}}
{{--                                                        <div class="price">--}}
{{--                                                            <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="list">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Air Conditioning</li>--}}
{{--                                                                <li>Fully Furnished</li>--}}
{{--                                                                <li>Garage</li>--}}
{{--                                                                <li>Balcony</li>--}}
{{--                                                                <li>Storage</li>--}}
{{--                                                                <li>Security System</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="button">--}}
{{--                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade " id="tab-x1x5">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-8">--}}
{{--                                                    <!-- Swiper -->--}}
{{--                                                    <div class="swiper-container" id="swiperSlider1x5">--}}
{{--                                                        <div class="swiper-wrapper">--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="swiper-slide">--}}
{{--                                                                <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                                <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- Add Pagination -->--}}
{{--                                                        <div class="row property-thumbnails"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <div class="property-details">--}}
{{--                                                        <div class="price">--}}
{{--                                                            <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="list">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Air Conditioning</li>--}}
{{--                                                                <li>Fully Furnished</li>--}}
{{--                                                                <li>Garage</li>--}}
{{--                                                                <li>Balcony</li>--}}
{{--                                                                <li>Storage</li>--}}
{{--                                                                <li>Security System</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="button">--}}
{{--                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- /Sub tabs content -->--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- tab 2 -->--}}
{{--                <div class="tab-pane fade active in" id="tab-x2">--}}

{{--                    <div class="property-big-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-3">--}}
{{--                                <div class="tabs awesome-sub">--}}
{{--                                    <ul id="tabs-x2" class="nav"><!----}}
{{--                                                    --><li class=""><a href="#tab-x2x1" data-toggle="tab">Luxury Mansion</a></li><!----}}
{{--                                                    --><li class="active"><a href="#tab-x2x2" data-toggle="tab">Elegant Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x2x3" data-toggle="tab">Sophisticated Residence</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x2x4" data-toggle="tab">Futuristic Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x2x5" data-toggle="tab">Stylish Apartment</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-9">--}}

{{--                                <!-- Sub tabs content -->--}}
{{--                                <div class="tab-content">--}}

{{--                                    <div class="tab-pane fade" id="tab-x2x1">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider2x1">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade active in" id="tab-x2x2">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider2x2">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x2x3">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider2x3">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x2x4">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider2x4">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x2x5">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider2x5">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- /Sub tabs content -->--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <!-- tab 3 -->--}}
{{--                <div class="tab-pane fade" id="tab-x3">--}}

{{--                    <div class="property-big-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-3">--}}
{{--                                <div class="tabs awesome-sub">--}}
{{--                                    <ul id="tabs-x3" class="nav"><!----}}
{{--                                                    --><li class=""><a href="#tab-x3x1" data-toggle="tab">Luxury Mansion</a></li><!----}}
{{--                                                    --><li class="active"><a href="#tab-x3x2" data-toggle="tab">Elegant Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x3x3" data-toggle="tab">Sophisticated Residence</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x3x4" data-toggle="tab">Futuristic Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x3x5" data-toggle="tab">Stylish Apartment</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-9">--}}

{{--                                <!-- Sub tabs content -->--}}
{{--                                <div class="tab-content">--}}

{{--                                    <div class="tab-pane fade" id="tab-x3x1">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider3x1">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade active in" id="tab-x3x2">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider3x2">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x3x3">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider3x3">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x3x4">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider3x4">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x3x5">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider3x5">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- /Sub tabs content -->--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <!-- tab 4 -->--}}
{{--                <div class="tab-pane fade" id="tab-x4">--}}

{{--                    <div class="property-big-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-3">--}}
{{--                                <div class="tabs awesome-sub">--}}
{{--                                    <ul id="tabs-x4" class="nav"><!----}}
{{--                                                    --><li class=""><a href="#tab-x4x1" data-toggle="tab">Luxury Mansion</a></li><!----}}
{{--                                                    --><li class="active"><a href="#tab-x4x2" data-toggle="tab">Elegant Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x4x3" data-toggle="tab">Sophisticated Residence</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x4x4" data-toggle="tab">Futuristic Apartment</a></li><!----}}
{{--                                                    --><li class=""><a href="#tab-x4x5" data-toggle="tab">Stylish Apartment</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-9">--}}

{{--                                <!-- Sub tabs content -->--}}
{{--                                <div class="tab-content">--}}

{{--                                    <div class="tab-pane fade" id="tab-x4x1">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider4x1">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade active in" id="tab-x4x2">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider4x2">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x4x3">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider4x3">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x4x4">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider4x4">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab-x4x5">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container" id="swiperSlider4x5">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x1.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x2.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x3.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide">--}}
{{--                                                            <a class="btn btn-zoom" href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                                                            <a href="/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="/assets/img/preview/property/cat1-600x450x4.jpg" alt=""/></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="row property-thumbnails"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="property-details">--}}
{{--                                                    <div class="price">--}}
{{--                                                        <strong>$275,000</strong> <i class="fa fa-info-circle"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="list">--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Air Conditioning</li>--}}
{{--                                                            <li>Fully Furnished</li>--}}
{{--                                                            <li>Garage</li>--}}
{{--                                                            <li>Balcony</li>--}}
{{--                                                            <li>Storage</li>--}}
{{--                                                            <li>Security System</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="button">--}}
{{--                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">View Details</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- /Sub tabs content -->--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

        </div>
    </section>



@endsection
