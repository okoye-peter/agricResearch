<x-layout-component title="Home">
    <x-slot name="styles">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <style>
             img.slide-img{
                height: 32em;
             }
        </style>
    </x-slot>
    <!-- Slider Area Start Here -->
    <section class="ranna-slider-area">
        <div class="container">
            <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="30" data-margin="5"
                data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true"
                data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true"
                data-r-extra-large-dots="false">
                @foreach ($carousels->take(3) as $carousel)
                    <div class="ranna-slider-content-layout2">
                        <figure class="item-figure">
                            <a href="{{ route('blogs.show', $carousel->id) }}"><img src="{{ asset($carousel->file->url) }}" alt="{{ $carousel->file->type }}" class="slide-img"></a>
                        </figure>
                        <div class="item-content">
                            <span class="sub-title">{{ $carousel->category->name }}</span>
                            <h2 class="item-title">
                                <a href="{{ route('blogs.show', $carousel->id) }}">{{ $carousel->title }} </a>
                            </h2>
                            <ul class="item-rating">
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-empty"><i class="fas fa-star"></i></li>
                                <li><span>9<span> / 10</span></span> </li>
                            </ul>
                            <p>{{ substr($carousel->body, 0 , 105) }}...</p>
                            <ul class="entry-meta">
                                <li>
                                    <a href="{{ route('blogs.show', $carousel->id) }}">
                                        <i class="fas fa-clock"></i>{{ $carousel->reading_time }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs.show', $carousel->id) }}">
                                        <i class="fas fa-user"></i>
                                        by <span>{{ $carousel->author->name }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Slider Area End Here -->
    <!-- Random Recipe Start Here -->
    <section class="padding-bottom-45">
        <div class="container">
            <div class="row gutters-40">
                @foreach ($carousels->take(-3) as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="product-box-layout4">
                            <div class="item-figure">
                                <img src="{{ asset($blog->file->url) }}" alt="Product">
                                <a href="{{ route('blogs.show', $blog->id) }}" class="item-dot">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <div class="item-content">
                                <span class="sub-title">BREAKFAST</span>
                                <h3 class="item-title">
                                    <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                                <ul class="item-rating">
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-empty"><i class="fas fa-star"></i></li>
                                    <li><span>9<span> / 10</span></span> </li>
                                </ul>
                                <ul class="entry-meta">
                                    <li>
                                        <a href="{{ route('blogs.show', $blog->id) }}">
                                            <i class="fas fa-clock"></i>{{ $blog->reading_time }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogs.show', $blog->id) }}">
                                            <i class="fas fa-user"></i>by <span>{{ $blog->author->name }}</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-box-layout4">
                        <div class="item-figure">
                            <img src="{{ asset('assets/uploads/images/wilsan-u-BCATbA86WAw-unsplash.jpg') }}" alt="Product">
                            <a href="single-recipe1.html" class="item-dot">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="item-content">
                            <span class="sub-title">DESERT</span>
                            <h3 class="item-title"><a href="single-recipe1.html">Pumpkin Cheesecake With
                                    GingersnapCrust</a></h3>
                            <ul class="item-rating">
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-empty"><i class="fas fa-star"></i></li>
                                <li><span>9<span> / 10</span></span> </li>
                            </ul>
                            <ul class="entry-meta">
                                <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-block d-md-none d-lg-block col-sm-12">
                    <div class="product-box-layout4">
                        <div class="item-figure">
                            <img src="{{ asset('assets/uploads/images/wilsan-u-BCATbA86WAw-unsplash.jpg') }}" alt="Product">
                            <a href="single-recipe1.html" class="item-dot">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="item-content">
                            <span class="sub-title">JUICE</span>
                            <h3 class="item-title"><a href="single-recipe1.html">Blueberry Juice with Lemon Crema</a></h3>
                            <ul class="item-rating">
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-empty"><i class="fas fa-star"></i></li>
                                <li><span>9<span> / 10</span></span> </li>
                            </ul>
                            <ul class="entry-meta">
                                <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Random Recipe End Here -->
    <!-- Trending Recipe Start Here -->
    <section class="padding-bottom-45">
        <div class="container">
            <div class="row gutters-40">
                <div class="col-lg-8">
                    <div class="row gutters-40">
                        <div class="col-12">
                            <div class="product-box-layout4">
                                <div class="section-heading heading-dark">
                                    <h2 class="item-heading">TRENDING RECIPES</h2>
                                </div>
                                <div class="item-figure">
                                    <img src="{{ $trends->first()->file->url }}" alt="Product" class="w-full">
                                    <a href="#" class="item-dot">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                <div class="item-content">
                                    <span class="sub-title capitalize">{{ $trends->first()->category->name }}</span>
                                    <h2 class="item-title">
                                        <a href="{{ route('blogs.show', $trends->first()->id) }}">{{ $trends->first()->title }}</a>
                                    </h2>
                                    <ul class="item-rating">
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-fill"><i class="fas fa-star"></i></li>
                                        <li class="star-empty"><i class="fas fa-star"></i></li>
                                        <li><span>{{ $trends->first()->getRating() }}<span> / 5</span></span> </li>
                                    </ul>
                                    <p>{{ substr($trends->first()->body, 0, 175) }}</p>
                                    <ul class="entry-meta">
                                        <li>
                                            <a href="{{ route('blogs.show', $trends->first()->id) }}">
                                                <i class="fas fa-clock"></i>{{ $trends->first()->reading_time }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blogs.show', $trends->first()->id) }}">
                                                <i class="fas fa-user"></i>by <span>{{ $trends->first()->author->name }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @for ($i = 1; $i < $trends->count(); $i++)
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout4">
                                    <div class="item-figure">
                                        <img src="{{ asset($trends->get($i)->file->url) }}" alt="Product">
                                        <a href="{{ route('blogs.show', $trends->get($i)->id) }}" class="item-dot">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <span class="sub-title capitalize">{{ $trends->get($i)->category->name }}</span>
                                        <h3 class="item-title">
                                            <a href={{ route('blogs.show', $trends->get($i)->id) }}">{{ $trends->get($i)->title }}</a>
                                        </h3>
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>{{ $trends->get($i)->getRating() }}<span> / 5</span></span> </li>
                                        </ul>
                                        <ul class="entry-meta">
                                            <li>
                                                <a href={{ route('blogs.show', $trends->get($i)->id) }}">
                                                    <i class="fas fa-clock"></i>{{ $trends->get($i)->reading_time }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blogs.show', $trends->get($i)->id) }}">
                                                    <i class="fas fa-user"></i>by <span>{{ $trends->get($i)->author->name }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                    {{-- <div class="widget ranna-box-padding">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">ABOUT ME</h3>
                        </div>
                        <div class="widget-about">
                            <figure class="author-figure"><img src="{{ asset('assets/uploads/images/rajesh-ram-HOOKgN_zIY8-unsplash.jpg') }}" alt="about"></figure>
                            <figure class="author-signature"><img src="{{ asset('assets/uploads/images/rajesh-ram-HOOKgN_zIY8-unsplash.jpg') }}" alt="about"></figure>
                            <p>Fusce mauris auctor ollicituder teary iner hendrerit risusey aeenean rauctor pibus
                                doloer.</p>
                        </div>
                    </div> --}}
                    
                    <div class="widget ranna-box-padding">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">LATEST RECIPES</h3>
                        </div>
                        <div class="widget-latest">
                            <ul class="block-list remove-5th-child-lg">
                                @foreach ($latest_blogs as $index => $l_blog)
                                    <li class="single-item">
                                        <div class="item-img">
                                            {{-- <a href="#"><img src="{{ asset('assets/uploads/images/rajesh-ram-HOOKgN_zIY8-unsplash.jpg') }}" alt="Post"></a> --}}
                                            <a href="{{ route('blogs.show', $l_blog->id) }}">
                                                <img src="{{ asset($l_blog->file->url) }}" alt="Post">
                                            </a>
                                            <div class="count-number">{{ ++$index }}</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">{{ $l_blog->title }}</div>
                                            <h4 class="item-title">
                                                <a href="{{ route('blogs.show', $l_blog->id) }}">
                                                    {{ substr($blog->body, 0 ,41) }}...
                                                </a>
                                            </h4>
                                            <div class="item-post-by">
                                                <a href="{{ route('blogs.show', $l_blog->id) }}">
                                                    <i class="fas fa-user"></i>
                                                    <span>by</span>
                                                    {{ $blog->author->name }}
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <div class="widget ranna-box-padding">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">CATEGORIES</h3>
                        </div>
                        <div class="widget-categories">
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="#" class="capitalize">{{ $category->name }}
                                            <span>{{ $category->blogs->count() }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Recipe End Here -->
    <!-- Popular Recipe Start Here -->
    <section class="padding-bottom-45">
        <div class="container">
            <div class="row gutters-40">
                <div class="col-lg-8">
                    <div class="ranna-box-style">
                        <div class="section-heading heading-dark">
                            <h2 class="item-heading">POPULAR BLOGS</h2>
                        </div>
                        <div class="row gutters-40">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout6">
                                    <div class="item-figure">
                                        <img src="{{ asset('/assets/uploads/images/zoe-schaeffer-D_VjFp1ds1Y-unsplash.jpg') }}" alt="Product">
                                        <a href="single-recipe1.html" class="item-dot">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <span class="sub-title">BREAKFAST</span>
                                        <h3 class="item-title"><a href="single-recipe1.html">Asian Chicken Noodles</a></h3>
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>9<span> / 10</span></span> </li>
                                        </ul>
                                        <p>Pro sint falli definitiones noel ei verear civibus
                                            consequat efficiantue.Vestibulum ante ipsum primis in fau
                                            cibus.</p>
                                        <ul class="entry-meta remove-3rd-child-lg">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout6">
                                    <div class="item-figure">
                                        <img src="img/product/product15.jpg" alt="Product">
                                        <a href="single-recipe1.html" class="item-dot">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <span class="sub-title">SEA FOOD</span>
                                        <h3 class="item-title"><a href="single-recipe1.html">Italiano Salad Mixed</a></h3>
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>9<span> / 10</span></span> </li>
                                        </ul>
                                        <p>Pro sint falli definitiones noel ei verear civibus
                                            consequat efficiantue.Vestibulum ante ipsum primis in fau
                                            cibus.</p>
                                        <ul class="entry-meta remove-3rd-child-lg">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout6">
                                    <div class="item-figure">
                                        <img src="img/product/product16.jpg" alt="Product">
                                        <a href="single-recipe1.html" class="item-dot">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <span class="sub-title">SALAD</span>
                                        <h3 class="item-title"><a href="single-recipe1.html">Maxican Dessert</a></h3>
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>9<span> / 10</span></span> </li>
                                        </ul>
                                        <p>Pro sint falli definitiones noel ei verear civibus
                                            consequat efficiantue.Vestibulum ante ipsum primis in fau
                                            cibus.</p>
                                        <ul class="entry-meta remove-3rd-child-lg">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-block d-xl-none col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout6">
                                    <div class="item-figure">
                                        <img src="img/product/product14.jpg" alt="Product">
                                        <a href="single-recipe1.html" class="item-dot">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <span class="sub-title">BREAKFAST</span>
                                        <h3 class="item-title"><a href="single-recipe1.html">Asian Chicken Noodles</a></h3>
                                        <ul class="item-rating">
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-fill"><i class="fas fa-star"></i></li>
                                            <li class="star-empty"><i class="fas fa-star"></i></li>
                                            <li><span>9<span> / 10</span></span> </li>
                                        </ul>
                                        <p>Pro sint falli definitiones noel ei verear civibus
                                            consequat efficiantue.Vestibulum ante ipsum primis in fau
                                            cibus.</p>
                                        <ul class="entry-meta remove-3rd-child-lg">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                    <div class="widget ranna-box-padding">
                        <div class="widget-newsletter-subscribe">
                            <h3>GET LATEST UPDATES</h3>
                            <p>Newsletter Subscribe</p>
                            <form class="newsletter-subscribe-form">
                                <div class="form-group">
                                    <input type="text" placeholder="your e-mail address" class="form-control" name="email"
                                        data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group mb-none">
                                    <button type="submit" class="item-btn">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget ranna-box-padding">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">FEATURED ARTICLE</h3>
                        </div>
                        <div class="widget-featured-feed2">
                            <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3"
                                data-margin="5" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700"
                                data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                                data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
                                data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1"
                                data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
                                data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1"
                                data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                                <div class="featured-box-layout2">
                                    <div class="item-img">
                                        <img src="img/product/product17.jpg" alt="Brand" class="img-fluid">
                                    </div>
                                    <div class="item-content">
                                        <span class="ctg-name">BREAKFAST</span>
                                        <h4 class="item-title"><a href="single-recipe1.html">Baked Garlic Prawn</a></h4>
                                        <p>Definitiones noel ei verear intelle
                                            gatpri civibus consequat area
                                            refund.</p>
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-box-layout2">
                                    <div class="item-img">
                                        <img src="img/product/product18.jpg" alt="Brand" class="img-fluid">
                                    </div>
                                    <div class="item-content">
                                        <span class="ctg-name">DINNER</span>
                                        <h4 class="item-title"><a href="single-recipe1.html">Baked Garlic Prawn</a></h4>
                                        <p>Definitiones noel ei verear intelle
                                            gatpri civibus consequat area
                                            refund.</p>
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="featured-box-layout2">
                                    <div class="item-img">
                                        <img src="img/product/product19.jpg" alt="Brand" class="img-fluid">
                                    </div>
                                    <div class="item-content">
                                        <span class="ctg-name">SALAD</span>
                                        <h4 class="item-title"><a href="single-recipe1.html">Baked Garlic Prawn</a></h4>
                                        <p>Definitiones noel ei verear intelle
                                            gatpri civibus consequat area
                                            refund.</p>
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Recipe End Here -->
    <!-- Instagram Start Here -->
    {{-- <section class="instagram-feed-wrap">
        <div class="instagram-feed-title"><a href="#"><i class="fab fa-instagram"></i>Follow On Instagram</a></div>
        <ul class="instagram-feed-figure">
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure1.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure2.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure3.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure4.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure5.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure6.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure7.jpg" alt="Social"></a>
            </li>
            <li>
                <a href="single-recipe1.html"><img src="img/social-figure/social-figure8.jpg" alt="Social"></a>
            </li>
        </ul>
    </section> --}}
    <!-- Instagram End Here -->
    <x-slot name="scripts">
        <!-- Owl Carousel Js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    </x-slot>
</x-layout-component>
