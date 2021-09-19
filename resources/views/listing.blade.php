@extends('layouts.real')

@section('page-name')
    Dashboard
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Dashboard</a></li>--}}
    {{--    <li class="breadcrumb-item active">Dashboard</li>--}}
@endsection

@section('conteudo')

@endsection

@section('resultado')


    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-right">
        <div class="container">
            <div class="page-header">
                <h1>Property Listing</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">List Property</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-md-9 content property-listing" id="content">

                    <!-- Car Listing -->
                    <div class="row">


                        @forelse($casas as $casa)

                            <div class="thumbnail no-border no-padding thumbnail-property-card clearfix"
                                 style="height: max-content">
{{--                                <div class="media" >--}}
{{--                                    <a class="media-link" data-gal="prettyPhoto" href="/storage/{{$casa->url}}">--}}
                                        <img src="/storage/{{$casa->url}}" alt=""/>
{{--                                        <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
{{--                                    </a>--}}
                                </div>
                                <br>
                                <div class="caption">
                                    <div class="rating">
                                        <a href="#"> <img alt="" src="assets/img/map-marker-icon.png"> </a>
                                    </div>
                                    <h4 class="caption-title"><a href="#">{{$casa->bairro->descricao}}</a></h4>
                                    <h5 class="caption-title-sub">${{$casa->preco}}</h5>
                                    <div class="caption-text">{{$casa->descricao}}</div>
                                    <table class="table">
                                        <tr>
                                            {{--                                    <td><i class="fa fa-expand"></i> 250 sq ft </td>--}}
                                            {{--                                    <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                                            {{--                                    <td><i class="fa fa-tint"></i> {{$casa->banheiros}}</td>--}}

                                            <td><i class="fa fa-expand"></i> {{$casa->metros_quadrado}} m2</td>
                                            {{--                                                        <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                                            <td><i class="fa fa-bed"></i> {{$casa->quartos}} Quartos</td>
                                            {{--                                                        <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}
                                            <td><i class="fa fa-tint"></i> {{$casa->banheiros}} Banheiros</td>

                                            <td class="buttons"><a class="btn btn-theme"
                                                                   href="#contact-form">Contactar</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @empty

                            <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">
                                <p class="alert alert-danger">
                                    Nao foram encontradas residencias com os dados da pesquisa
                                </p>
                            </div>
                        @endforelse
                    </div>


                {{--                    <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">--}}
                {{--                        <div class="media">--}}
                {{--                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/property/featured-1200x800x2.jpg">--}}
                {{--                                <img src="assets/img/preview/property/featured-370x220x2.jpg" alt=""/>--}}
                {{--                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="caption">--}}
                {{--                            <div class="rating">--}}
                {{--                                <a href="#"> <img alt="" src="assets/img/map-marker-icon.png"> </a>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="caption-title"><a href="#">Modern Residence</a></h4>--}}
                {{--                            <h5 class="caption-title-sub">$275,000</h5>--}}
                {{--                            <div class="caption-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>--}}
                {{--                            <table class="table">--}}
                {{--                                <tr>--}}
                {{--                                    <td><i class="fa fa-expand"></i> 250 sq ft </td>--}}
                {{--                                    <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                {{--                                    <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}

                {{--                                    <td class="buttons"><a class="btn btn-theme" href="#">For Rent</a></td>--}}
                {{--                                </tr>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">--}}
                {{--                        <div class="media">--}}
                {{--                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/property/featured-1200x800x3.jpg">--}}
                {{--                                <img src="assets/img/preview/property/featured-370x220x3.jpg" alt=""/>--}}
                {{--                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="caption">--}}
                {{--                            <div class="rating">--}}
                {{--                                <a href="#"> <img alt="" src="assets/img/map-marker-icon.png"> </a>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="caption-title"><a href="#">Modern Residence</a></h4>--}}
                {{--                            <h5 class="caption-title-sub">$275,000</h5>--}}
                {{--                            <div class="caption-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>--}}
                {{--                            <table class="table">--}}
                {{--                                <tr>--}}
                {{--                                    <td><i class="fa fa-expand"></i> 250 sq ft </td>--}}
                {{--                                    <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                {{--                                    <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}

                {{--                                    <td class="buttons"><a class="btn btn-theme" href="#">For Rent</a></td>--}}
                {{--                                </tr>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">--}}
                {{--                        <div class="media">--}}
                {{--                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/property/featured-1200x800x4.jpg">--}}
                {{--                                <img src="assets/img/preview/property/featured-370x220x4.jpg" alt=""/>--}}
                {{--                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="caption">--}}
                {{--                            <div class="rating">--}}
                {{--                                <a href="#"> <img alt="" src="assets/img/map-marker-icon.png"> </a>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="caption-title"><a href="#">Modern Residence</a></h4>--}}
                {{--                            <h5 class="caption-title-sub">$275,000</h5>--}}
                {{--                            <div class="caption-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>--}}
                {{--                            <table class="table">--}}
                {{--                                <tr>--}}
                {{--                                    <td><i class="fa fa-expand"></i> 250 sq ft </td>--}}
                {{--                                    <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                {{--                                    <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}

                {{--                                    <td class="buttons"><a class="btn btn-theme" href="#">For Sale</a></td>--}}
                {{--                                </tr>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">--}}
                {{--                        <div class="media">--}}
                {{--                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/property/project-1200x800x1.jpg">--}}
                {{--                                <img src="assets/img/preview/property/project-370x220x1.jpg" alt=""/>--}}
                {{--                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="caption">--}}
                {{--                            <div class="rating">--}}
                {{--                                <a href="#"> <img alt="" src="assets/img/map-marker-icon.png"> </a>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="caption-title"><a href="#">Modern Residence</a></h4>--}}
                {{--                            <h5 class="caption-title-sub">$275,000</h5>--}}
                {{--                            <div class="caption-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>--}}
                {{--                            <table class="table">--}}
                {{--                                <tr>--}}
                {{--                                    <td><i class="fa fa-expand"></i> 250 sq ft </td>--}}
                {{--                                    <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                {{--                                    <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}

                {{--                                    <td class="buttons"><a class="btn btn-theme" href="#">For Sale</a></td>--}}
                {{--                                </tr>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">--}}
                {{--                        <div class="media">--}}
                {{--                            <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/property/project-1200x800x2.jpg">--}}
                {{--                                <img src="assets/img/preview/property/project-370x220x2.jpg" alt=""/>--}}
                {{--                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="caption">--}}
                {{--                            <div class="rating">--}}
                {{--                                <a href="#"> <img alt="" src="assets/img/map-marker-icon.png"> </a>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="caption-title"><a href="#">Modern Residence</a></h4>--}}
                {{--                            <h5 class="caption-title-sub">$275,000</h5>--}}
                {{--                            <div class="caption-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>--}}
                {{--                            <table class="table">--}}
                {{--                                <tr>--}}
                {{--                                    <td><i class="fa fa-expand"></i> 250 sq ft </td>--}}
                {{--                                    <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                {{--                                    <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}
                {{--                                    <td class="buttons"><a class="btn btn-theme" href="#">For Sale</a></td>--}}
                {{--                                </tr>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                <!-- Car Listing -->

                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i>
                                    Previous</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /CONTENT -->

                <!-- SIDEBAR -->
                <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget -->
                    <div class="widget shadow widget-find-property">
                        <h4 class="widget-title">Find Best Properties</h4>
                        <div class="widget-content">
                            <!-- Search form -->
                            <div class="form-search light">
                                <form action="#">
                                    @csrf

                                    <div class="form-group has-icon has-label">
                                        <label for="formSearchUpLocation3">Preco</label>
                                        <input
                                            name="preco"
                                            type="number" class="form-control"
                                            placeholder="Preco">
                                        <span class="form-control-icon"><i class="fa fa-dollar"></i></span>
                                    </div>

                                    <div class="form-group has-icon has-label">
                                        <label for="formSearchUpLocation3">Quartos</label>
                                        <input
                                            name="quartos"
                                            type="text" class="form-control"
                                            placeholder="Numero de quartos">
                                        <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                    </div>

                                    <div class="form-group has-label">
                                        <label>Bairro</label>
                                        <select name="bairro_id" class="selectpicker input-price"
                                                data-live-search="true"
                                                data-width="100%"
                                                data-toggle="tooltip" title="Select">
                                            <option>Seleccione o bairro</option>

                                            @forelse($bairros as $bairro)
                                                <option value="{{$bairro->id}}">{{$bairro->descricao}}</option>
                                            @empty
                                                <option>Property For</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    {{--                                    <div class="form-group has-label">--}}
                                    {{--                                        <label>Quartos</label>--}}
                                    {{--                                        <select--}}
                                    {{--                                            name="quartos"--}}
                                    {{--                                            class="selectpicker input-price" data-live-search="true" data-width="100%"--}}
                                    {{--                                            data-toggle="tooltip" title="Select">--}}
                                    {{--                                            <option>Flat</option>--}}
                                    {{--                                            <option>House</option>--}}
                                    {{--                                            <option>Villa</option>--}}
                                    {{--                                        </select>--}}

                                    {{--                                    </div>--}}

                                    {{--                                    <div class="form-group has-label selectpicker-wrapper">--}}
                                    {{--                                        <label>Budget</label>--}}
                                    {{--                                        <select--}}
                                    {{--                                            class="selectpicker input-price" data-live-search="true" data-width="100%"--}}
                                    {{--                                            data-toggle="tooltip" title="Select">--}}
                                    {{--                                            <option> Budget</option>--}}
                                    {{--                                            <option> < 5Lac</option>--}}
                                    {{--                                            <option> < 10Lac</option>--}}
                                    {{--                                        </select>--}}

                                    {{--                                    </div>--}}

                                    {{--                                    <div class="form-group selectpicker-wrapper">--}}
                                    {{--                                        <label>BHK</label>--}}
                                    {{--                                        <select--}}
                                    {{--                                            class="selectpicker input-price" data-live-search="true" data-width="100%"--}}
                                    {{--                                            data-toggle="tooltip" title="Select">--}}
                                    {{--                                            <option> 1 BHK</option>--}}
                                    {{--                                            <option> 2 BHK</option>--}}
                                    {{--                                            <option> 3 BHK</option>--}}
                                    {{--                                        </select>--}}

                                    {{--                                    </div>--}}

                                    {{--                                    <div class="form-group selectpicker-wrapper">--}}
                                    {{--                                        <label>Posted By</label>--}}
                                    {{--                                        <select--}}
                                    {{--                                            class="selectpicker input-price" data-live-search="true" data-width="100%"--}}
                                    {{--                                            data-toggle="tooltip" title="Select">--}}
                                    {{--                                            <option> Posted By</option>--}}
                                    {{--                                            <option> Owners</option>--}}
                                    {{--                                            <option> Brokers</option>--}}
                                    {{--                                            <option> Builders</option>--}}
                                    {{--                                        </select>--}}

                                    {{--                                    </div>--}}

                                    <button type="submit" id="formSearchSubmit3"
                                            class="btn btn-submit btn-theme btn-theme-dark btn-block">Find Property
                                    </button>

                                </form>
                            </div>
                            <!-- /Search form -->
                        </div>
                    </div>
                    <!-- /widget -->
                    <!-- widget price filter -->
                    <div class="widget shadow widget-filter-price">
                        <h4 class="widget-title">Price</h4>
                        <div class="widget-content">
                            <div id="slider-range"></div>
                            <input type="text" id="amount" readonly/>
                            <button class="btn btn-theme btn-theme-dark">Filter</button>
                        </div>
                    </div>
                    <!-- /widget price filter -->
                    <!-- widget testimonials -->
                    <div class="widget shadow">
                        <div class="widget-title">Testimonials</div>
                        <div class="testimonials-carousel">
                            <div class="owl-carousel" id="testimonials">
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus.
                                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in
                                                faucibus orci luctus et ultrices posuere cubilia.
                                            </div>
                                            <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at ReEstate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus.
                                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in
                                                faucibus orci luctus et ultrices posuere cubilia.
                                            </div>
                                            <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at ReEstate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus.
                                                Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in
                                                faucibus orci luctus et ultrices posuere cubilia.
                                            </div>
                                            <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at ReEstate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /widget testimonials -->
                    <!-- widget helping center -->
                    <div class="widget shadow widget-helping-center">
                        <h4 class="widget-title">Helping Center</h4>
                        <div class="widget-content">
                            <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
                            <h5 class="widget-title-sub">+90 555 444 66 33</h5>
                            <p><a href="mailto:support@supportcenter.com">support@supportcenter.com</a></p>
                            <div class="button">
                                <a href="#" class="btn btn-block btn-theme btn-theme-dark">Support Center</a>
                            </div>
                        </div>
                    </div>
                    <!-- /widget helping center -->
                </aside>
                <!-- /SIDEBAR -->

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->















    @if($vizinhos!=null)
        <section class="page-section">
            <div class="container">

                <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
                    <small>Mais resultados</small>
                    <span>Propriedades nos bairros vizinhos</span>
                </h2>

                <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

                    <!-- tab 2 -->
                    <div class="tab-pane fade active in" id="tab-2">

                        <div class="swiper swiper--offers-popular">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach($vizinhos as $casa)
                                        <div class="swiper-slide">
                                            <div class="thumbnail no-border no-padding thumbnail-property-card">
                                                <div class="media">
                                                    {{--                                                <span class="p-price">$90,250</span>--}}
                                                    <span class="p-price">${{$casa->preco}}</span>
                                                    {{--                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/property/featured-1200x800x1.jpg">--}}
                                                    <a class="media-link" data-gal="prettyPhoto"
                                                       href="/storage/{{$casa->url}}">
                                                        <img src="/storage/{{$casa->url}}" alt=""/>
                                                        <span class="icon-view"><strong><i
                                                                    class="fa fa-arrows-alt"></i></strong></span></a>
                                                </div>
                                                <div class="caption text-center">
                                                    <h4 class="caption-title"><a
                                                            href="#">{{$casa->bairro->descricao}}</a></h4>
                                                    {{--                                                <div class="caption-text">30 Webber Street, London, UK</div>--}}
                                                    <div class="caption-text">{{$casa->localizacao}}</div>
                                                    <div class="buttons">
                                                        <a class="btn btn-theme ripple-effect" href="#contact-form">Contactar</a>
                                                    </div>
                                                    <table class="table">
                                                        <tr>
                                                            {{--                                                        <td><i class="fa fa-expand"></i> 250 m2 </td>--}}
                                                            <td><i class="fa fa-expand"></i> {{$casa->metros_quadrado}}
                                                                m2
                                                            </td>
                                                            {{--                                                        <td><i class="fa fa-bed"></i> 1 Bedroom</td>--}}
                                                            <td><i class="fa fa-bed"></i> {{$casa->quartos}} Quartos
                                                            </td>
                                                            {{--                                                        <td><i class="fa fa-tint"></i> 1 Bathroom</td>--}}
                                                            <td><i class="fa fa-tint"></i> {{$casa->banheiros}}Banheiros
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>


                </div>

            </div>
        </section>


    @endif















    <!-- PAGE -->
    <section class="page-section contact dark" id="contact">
        <div class="container">

            <!-- Get in touch -->

            <h2 class="section-title">
                <small>Feel Free to Say Hello!</small>
                <span>Get in Touch With Us</span>
            </h2>

            <div class="row">
                <div class="col-md-6">
                    <!-- Contact form -->
                    <form name="contact-form" method="post" action="/contacto" class="contact-form alt"
                          id="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="name">Name</label>
                                        <input
                                            required
                                            type="text" name="nome" id="name" placeholder="Name" value="" size="30"
                                            data-toggle="tooltip" title="Name is required"
                                            class="form-control placeholder"/>
                                        <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="email">Email</label>
                                        <input
                                            required
                                            type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                            data-toggle="tooltip" title="Email is required"
                                            class="form-control placeholder"/>
                                        <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="titulo">Titulo</label>
                                        <input
                                            required
                                            type="text" name="titulo" id="titulo" placeholder="Titulo" value=""
                                            size="30"
                                            data-toggle="tooltip" title="Titulo is required"
                                            class="form-control placeholder"/>
                                        <span class="form-control-icon"><i class="fa fa-pencil"></i></span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="input-message">Message</label>
                            <textarea
                                required
                                name="mensagem" id="input-message" placeholder="Message" rows="4" cols="50"
                                data-toggle="tooltip" title="Message is required"
                                class="form-control placeholder"></textarea>
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit"
                                       class="form-button form-button-submit btn btn-block btn-theme" id="submit_btnn"
                                       value="Send message"/>
                            </div>
                        </div>

                    </form>
                    <!-- /Contact form -->
                </div>
                <div class="col-md-6">

                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>

                    <ul class="media-list contact-list">
                        <li class="media">
                            <div class="media-left"><i class="fa fa-home"></i></div>
                            <div class="media-body">Adress: 1600 Pennsylvania Ave NW, Washington, D.C.</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa"></i></div>
                            <div class="media-body">DC 20500, ABD</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-phone"></i></div>
                            <div class="media-body">Support Phone: 01865 339665</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-envelope"></i></div>
                            <div class="media-body">E mails: info@example.com</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-clock-o"></i></div>
                            <div class="media-body">Working Hours: 09:30-21:00 except on Sundays</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body">View on The Map</div>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- /Get in touch -->

        </div>
    </section>
    <!-- /PAGE -->

@endsection
