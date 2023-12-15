@extends('layouts.website.app')

@section('title')
    <title>Home Page</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section">
     <div class='video'>
        <video autoplay muted id="myVideo" onended="showImages()">
            <source class="" src="{{ asset('website/assets/video/rain.mp4') }}" type="video/mp4">
        </video>
     </div>

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="display:none;">

            <div class="carousel-inner">
                <div class="carousel-item carousel_height active ">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/1.jpg') }}"
                        alt="First slide">
                    <div class="carousel-buttons  p-1">
                        <button type="button" class="btn btn-primary" onclick="executeCommand(1)">Button 1</button>
                        <button type="button" class="btn btn-secondary" onclick="executeCommand(2)">Button 2</button>
                        <button type="button" class="btn btn-success" onclick="executeCommand(3)">Button 3</button>
                    </div>
                </div>
                <div class="carousel-item carousel_height ">
                    <img class="d-block h-100 w-100" src="{{ asset('website/assets/images/header/2.jpg') }}"
                        alt="Second slide">
                    <div class="carousel-buttons  p-1">
                        <button type="button" class="btn btn-primary" onclick="executeCommand(1)">Button 1</button>
                        <button type="button" class="btn btn-secondary" onclick="executeCommand(2)">Button 2</button>
                        <button type="button" class="btn btn-success" onclick="executeCommand(3)">Button 3</button>
                    </div>
                </div>
                <div class="carousel-item carousel_height ">
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
    <section class="section">
        <div class="container">
            <div class="row">
                {{--  *  -------------------------------------------------------------------------------- --}}
                {{--  *                                   start side part                                 --}}
                {{--  *  -------------------------------------------------------------------------------- --}}
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget mt-5">
                            <h2 class="widget-title">Index</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="">Marketing <span>(21)</span></a></li>
                                    <li><a href="">SEO Service <span>(15)</span></a></li>
                                    <li><a href="">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="">Make Money <span>(22)</span></a></li>
                                    <li><a href="">Blogging <span>(66)</span></a></li>
                                    <li><a href="">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Sections</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="">Marketing <span>(21)</span></a></li>
                                    <li><a href="">SEO Service <span>(15)</span></a></li>
                                    <li><a href="">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="">Make Money <span>(22)</span></a></li>
                                    <li><a href="">Blogging <span>(66)</span></a></li>
                                    <li><a href="">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * -------------------------------------------------------------------------------- --}}
                {{-- *                                   end side part                                  --}}
                {{-- * -------------------------------------------------------------------------------- --}}

                {{-- * -------------------------------------------------------------------------------- --}}
                {{-- *                               start view articales                               --}}
                {{-- * -------------------------------------------------------------------------------- --}}

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build w-100">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
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
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="" title="">
                                        <div class="image_artical ">
                                            <img src="https://taxjustice.net/wp-content/uploads/fly-images/2314/Sun-sea-tourism-1-1200x630-c.png"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                            <hr class="invis">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="" title="">
                                        <div class="image_artical ">
                                            <img src="https://blog-cdn.reedsy.com/directories/admin/featured_image/591/large_dissecting-the-cover-of-a-book-ee0d6a.jpg"
                                                alt="" class="img-fluid w-100 h-100">
                                        </div>
                                        <h4 class="text-center text-primary">Ways to reach the world through mobile phones
                                        </h4>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus
                                        enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <div class="d-flex justify-content-around">
                                        <p>20 July,2017</p>
                                        <p><i class="fa fa-eye"></i> 441</p>
                                    </div>

                                </div><!-- end meta -->
                            </div>
                        </div>
                    </div>
                </div>

                {{-- * -------------------------------------------------------------------------------- --}}
                {{-- *                                end view articales                                --}}
                {{-- * -------------------------------------------------------------------------------- --}}



            </div>
        </div>
    </section>
@endsection
