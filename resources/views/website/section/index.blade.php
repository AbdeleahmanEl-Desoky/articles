@extends('layouts.website.app')

@section('title')
    <title>Tourism</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section section top_header">
        <img class="w-100 h-100"
            src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/5387e139ecda4bb4af5d88df105b4ea1/5387e139ecda4bb4af5d88df105b4ea1.jpg"
            alt="">
        <div class="button_home  p-1">
            <a href="#"> <button type="button" class="btn btn-primary rounded-pill">Back to home </button>
            </a>
        </div>
    </section>
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section ">

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start content                                  --}}
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- <div class="container">
            <div class="row">

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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
                <div class="col-12">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                      </ul>
                </div>
            </div>

        </div> --}}


        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="#" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="#" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="#" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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

                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12 col-lg-4  pt-2">
                    <div class="blog-box wow fadeIn">
                        <div class="post-media">
                            <a href="" title="">
                                <div class="image_artica ">
                                    <img src="https://news.cgtn.com/news/346b544e316b6a4d796b444d79596a4d35517a4e31457a6333566d54/img/04256a0c5dbb46a9b3254da10e0df0c8/04256a0c5dbb46a9b3254da10e0df0c8.jpg"
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


                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <!-- Pagination links will be dynamically added here -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   end content                                     --}}
        {{-- * -------------------------------------------------------------------------------- --}}
    </section>
    {{-- <script>
        // Get all pagination links
        const paginationLinks = document.querySelectorAll('.page-link');

        // Create an array of content items
        const contentItems = document.querySelectorAll('.blog-box');

        // Function to handle clicking on a pagination link
        function handlePaginationLinkClick(event) {
            // Prevent default link behavior
            event.preventDefault();

            // Get the index of the current link
            const linkIndex = Array.prototype.indexOf.call(paginationLinks, this);

            // Show the corresponding content items
            contentItems.forEach((item, index) => {
                if (index >= linkIndex * 3 && index < (linkIndex + 1) * 3) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Add click event listener to each pagination link
        paginationLinks.forEach(link => link.addEventListener('click', handlePaginationLinkClick));
    </script> --}}


    {{-- <script>
        // Get the container for pagination links
        const paginationContainer = document.querySelector('.pagination');

        // Create an array of content items
        const contentItems = document.querySelectorAll('.blog-box');

        // Calculate the total number of pages
        const totalPages = Math.ceil(contentItems.length / 3);

        // Function to handle clicking on a pagination link
        function handlePaginationLinkClick(event) {
            // Prevent default link behavior
            event.preventDefault();

            // Get the index of the clicked link
            const linkIndex = parseInt(this.getAttribute('data-index'));

            // Hide all content items
            contentItems.forEach(item => {
                item.style.display = 'none';
            });

            // Show the corresponding content items
            contentItems.forEach((item, index) => {
                if (index >= linkIndex * 3 && index < (linkIndex + 1) * 3) {
                    item.style.display = 'block';
                }
            });
        }

        // Add pagination links dynamically
        for (let i = 1; i <= totalPages; i++) {
            const paginationLink = document.createElement('li');
            paginationLink.classList.add('page-item');

            const link = document.createElement('a');
            link.classList.add('page-link');
            link.href = '#';
            link.textContent = i;

            // Set the data-index attribute to identify the index of the link
            link.setAttribute('data-index', i - 1);

            // Add click event listener to each pagination link
            link.addEventListener('click', handlePaginationLinkClick);

            paginationLink.appendChild(link);
            paginationContainer.appendChild(paginationLink);
        }

        // Initially, hide all content items
        contentItems.forEach(item => {
            item.style.display = 'none';
        });

        // Initially, show the content for the first pagination page
        handlePaginationLinkClick.call(paginationContainer.querySelector('.page-link'));
    </script> --}}



    <script>
        // Get the container for pagination links
        const paginationContainer = document.querySelector('.pagination');

        // Create an array of content items
        const contentItems = document.querySelectorAll('.blog-box');

        // Calculate the total number of pages
        const totalPages = Math.ceil(contentItems.length / 3);

        // Function to handle clicking on a pagination link
        function handlePaginationLinkClick(event) {
          // Prevent default link behavior
          event.preventDefault();

          // Get the index of the clicked link
          const linkIndex = parseInt(this.getAttribute('data-index'));

          // Hide all content items
          contentItems.forEach(item => {
            item.style.display = 'none';
          });

          // Show the corresponding content items
          contentItems.forEach((item, index) => {
            if (index >= linkIndex * 3 && index < (linkIndex + 1) * 3) {
              item.style.display = 'block';
            }
          });
        }

        // Add pagination links dynamically
        for (let i = 1; i <= totalPages; i++) {
          const paginationLink = document.createElement('li');
          paginationLink.classList.add('page-item');

          const link = document.createElement('a');
          link.classList.add('page-link');
          link.href = '#';
          link.textContent = i;

          // Set the data-index attribute to identify the index of the link
          link.setAttribute('data-index', i - 1);

          // Add click event listener to each pagination link
          link.addEventListener('click', handlePaginationLinkClick);

          paginationLink.appendChild(link);
          paginationContainer.appendChild(paginationLink);
        }

        // Initially, hide all content items
        contentItems.forEach(item => {
          item.style.display = 'none';
        });

        // Initially, show the content for the first pagination page
        handlePaginationLinkClick.call(paginationContainer.querySelector('.page-link'));

      </script>
@endsection
