@extends('layouts.website.app')

@section('title')
    <title>Article</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section">
        <video autoplay muted id="myVideo" onended="showImages()">
            <source class="h-100 w-100" src="{{ asset('website/assets/video/rain2.mp4') }}" type="video/mp4">
        </video>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="display:none;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel_height active">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/1.jpg') }}"
                        alt="First slide">
                    <div class="carousel-buttons  p-1">
                        <button type="button" class="btn btn-primary" onclick="executeCommand(1)">Button 1</button>
                        <button type="button" class="btn btn-secondary" onclick="executeCommand(2)">Button 2</button>
                        <button type="button" class="btn btn-success" onclick="executeCommand(3)">Button 3</button>
                    </div>
                </div>
                <div class="carousel-item carousel_height">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/2.jpg') }}"
                        alt="Second slide">
                    <div class="carousel-buttons  p-1">
                        <button type="button" class="btn btn-primary" onclick="executeCommand(1)">Button 1</button>
                        <button type="button" class="btn btn-secondary" onclick="executeCommand(2)">Button 2</button>
                        <button type="button" class="btn btn-success" onclick="executeCommand(3)">Button 3</button>
                    </div>
                </div>
                <div class="carousel-item carousel_height">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/1.jpg') }}"
                        alt="Third slide">
                    <div class="carousel-buttons  p-1">
                        <button type="button" class="btn btn-primary" onclick="executeCommand(1)">Button 1</button>
                        <button type="button" class="btn btn-secondary" onclick="executeCommand(2)">Button 2</button>
                        <button type="button" class="btn btn-success" onclick="executeCommand(3)">Button 3</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section top_header">

        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-6">
                    <div class="sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Index</h4>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="col-12 col-lg-4 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="col-12 col-lg-4 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-12 col-lg-4 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>



                {{-- <div class="col-12 col-lg-6 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>




                <div class="col-12 col-lg-6 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div> --}}


                <div class="col-12 col-lg-4 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="col-12 col-lg-4 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-12 col-lg-4 border-bottom border-right pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                        alt="" class="img-fluid">
                                </div>
                                <h4 class="text-center text-primary">Ways to reach the world through mobile
                                </h4>
                            </a>
                        </div>

                        <div class="blog-meta big-meta text-center">
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <div class="d-flex justify-content-around">
                                <p>20 July,2017</p>
                                <p><i class="fa fa-eye"></i> 441</p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
