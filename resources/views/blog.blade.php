@extends('layouts.gts')

@section('title', __('BLOG') )

@section('content')

	<!-- Banner  -->
    <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(/storage/images/banner/bnr2.png), var(--gradient-sec);  background-size: cover, 200%; ">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1>Blog Large</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Large</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Blog Large -->
    <div class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 m-b30">
                    <aside class="side-bar sticky-top left">
                        <div class="widget style-1">
                            <div class="search-bx style-1">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-search"></i></span>
                                        </div>
                                        <input name="text" class="form-control" placeholder="Search" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary gradient"><i class="la la-long-arrow-right"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h2 class="widget-title">Category</h2>
                            <ul>
                                <li class="cat-item cat-item-26"><a href="#">Audio</a> (3)</li>
                                <li class="cat-item cat-item-36"><a href="#">Beauty</a> (4)</li>
                                <li class="cat-item cat-item-43"><a href="#n">Fashion</a> (3)</li>
                                <li class="cat-item cat-item-27"><a href="#">Images</a> (1)</li>
                                <li class="cat-item cat-item-40"><a href="#">Lifestyle</a> (3)</li>
                            </ul>
                        </div>
                        <div class="widget recent-posts-entry style-1">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-media">
                                        <a href="blog-details-3.html"><img src="/storage/images/blog/recent-blog/pic1.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                        <div class="dlab-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2020 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-media">
                                        <a href="blog-details-3.html"><img src="/storage/images/blog/recent-blog/pic2.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                        <div class="dlab-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2020 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-media">
                                        <a href="blog-details-3.html"><img src="/storage/images/blog/recent-blog/pic3.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                        <div class="dlab-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2020 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-media">
                                        <a href="blog-details-3.html"><img src="/storage/images/blog/recent-blog/pic3.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                        <div class="dlab-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2020 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget widget_categories">
                            <h2 class="widget-title">Archives</h2>
                            <ul>
                                <li><a href="javascript:void(0);">January</a>(3)</li>
                                <li><a href="javascript:void(0);">Fabruary</a>(4)</li>
                                <li><a href="javascript:void(0);">March</a>(4)</li>
                                <li><a href="javascript:void(0);">April</a>(3)</li>
                                <li><a href="javascript:void(0);">May</a>(4)</li>
                                <li><a href="javascript:void(0);">Jun</a>(1)</li>
                                <li><a href="javascript:void(0);">July</a>(4)</li>
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud style-1">
                            <h2 class="widget-title">Tages</h2>
                            <div class="tagcloud">
                                <a href="javascript:void(0);">Business</a>
                                <a href="javascript:void(0);">News</a>
                                <a href="javascript:void(0);">Brand</a>
                                <a href="javascript:void(0);">Website</a>
                                <a href="javascript:void(0);">Internal</a>
                                <a href="javascript:void(0);">Strategy</a>
                                <a href="javascript:void(0);">Brand</a>
                                <a href="javascript:void(0);">Mission</a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-8 col-lg-8 m-b30">
                    <div class="dlab-blog m-b50 no-image">
                        <div class="dlab-info">
                            <div class="dlab-meta">
                                <ul>
                                    <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                    <li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);">Johne Doe</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>

                                </ul>
                            </div>
                            <h4 class="dlab-title">
                                <a href="blog-details-3.html">Quisque sem tortor, convallis in arcu eu, accumsan finibus massa donec et sapien risus.</a>
                            </h4>
                            <p class="m-b20">Phasellus vestibulum velit in lacinia ultrices. Aenean vel euismod risus, ac congue lectus. In hac habitasse platea dictumst. Vivamus et felis imperdiet, commodo augue in, condimentum tellus. Quisque a velit a eros malesuada ullamcorper. </p>
                            <a href="blog-details-3.html" class="btn btn-lg shadow gradient btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="dlab-blog m-b50">
                        <div class="dlab-media rounded dlab-img-effect zoom post-video">
                            <a href="blog-details-3.html">
                                <img src="/storage/images/blog/default/thum2.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=pyRjzvdOSHk" class="popup-youtube post-video-icon fa fa-play"></a>
                                <div class=""></div>
                            </a>
                        </div>
                        <div class="dlab-info">
                            <div class="dlab-meta">
                                <ul>
                                    <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                    <li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);">Johne Doe</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
                                </ul>
                            </div>
                            <h4 class="dlab-title">
                                <a href="blog-details-3.html">Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere dolor.</a>
                            </h4>
                            <p class="m-b20">Phasellus vestibulum velit in lacinia ultrices. Aenean vel euismod risus, ac congue lectus. In hac habitasse platea dictumst. Vivamus et felis imperdiet, commodo augue in, condimentum tellus. Quisque a velit a eros malesuada ullamcorper. </p>
                            <a href="blog-details-3.html" class="btn btn-lg shadow gradient btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="dlab-blog m-b50">
                        <div class="dlab-media rounded">
                            <div class="post-carousel owl-carousel owl-theme owl owl-btn-center-lr owl-btn-2">
                                <div class="item"><img class="rounded-sm" src="/storage/images/blog/default/thum1.jpg" alt=""></div>
                                <div class="item"><img class="rounded-sm" src="/storage/images/blog/default/thum2.jpg" alt=""></div>
                                <div class="item"><img class="rounded-sm" src="/storage/images/blog/default/thum3.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="dlab-info">
                            <div class="dlab-meta">
                                <ul>
                                    <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                    <li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);">Johne Doe</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
                                </ul>
                            </div>
                            <h4 class="dlab-title">
                                <a href="blog-details-3.html">Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis lectus vel euismod.</a>
                            </h4>
                            <p class="m-b20">Phasellus vestibulum velit in lacinia ultrices. Aenean vel euismod risus, ac congue lectus. In hac habitasse platea dictumst. Vivamus et felis imperdiet, commodo augue in, condimentum tellus. Quisque a velit a eros malesuada ullamcorper. </p>
                            <a href="blog-details-3.html" class="btn btn-lg shadow gradient btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="dlab-blog post-quote m-b50">
                        <div class="post-quote-icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 298.667 298.667" style="enable-background:new 0 0 298.667 298.667;" xml:space="preserve"><polygon points="0,170.667 64,170.667 21.333,256 85.333,256 128,170.667 128,42.667 0,42.667"/><polygon points="170.667,42.667 170.667,170.667 234.667,170.667 192,256 256,256 298.667,170.667 298.667,42.667"/></svg>
                        </div>
                        <div class="dlab-info ">
                            <h4 class="dlab-title">
                                <a href="blog-details-3.html">Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis lectus vel euismod.</a>
                            </h4>
                        </div>
                    </div>
                    <nav aria-label="Blog Pagination">
                        <ul class="pagination text-center p-t20">
                            <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
                            <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


@endsection
