<x-layout-component title="Blogs">
    <!-- Recipe Without Sidebar Area Start Here -->
    <section class="recipe-without-sidebar-wrap padding-top-80 padding-bottom-22">
        <div class="container">
            <form method="GET" action="{{ route('blogs.index') }}" class="adv-search-wrap">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Search . . ." />
                    <div class="btn-group">
                        <div class="input-group-btn adv-search-fill-btn">
                            <button type="button" id="adv-serch" class="btn-adv-serch">
                                <i class="icon-plus flaticon-add-plus-button"></i>
                                <i class="icon-minus fas fa-minus"></i>
                                Advanced Search
                            </button>
                        </div>
                        <div class="input-group-btn">
                            <button type="submit" class="btn-search"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="advance-search-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="item-title">BY CATEGORIES</h3>
                            <ul class="search-items grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-1">
                                @foreach ($categories as $category)
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="{{ $category->name }}" type="checkbox" name="cat[]" value="{{ $category->id }}">
                                            <label for="{{ $category->name }}" class="capitalize">{{ $category->name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-box-layout1">
                            <figure class="item-figure">
                                <a href="{{ route('blogs.show', $blog->id) }}">
                                    <img src="{{ asset($blog->file->url) }}" alt="Product" class="object-fit w-full h-[15.5em]">
                                </a>
                            </figure>
                            <div class="item-content">
                                <span class="sub-title capitalize">{{ $blog->category->name }}</span>
                                <h3 class="item-title">
                                    <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                                <ul class="item-rating">
                                    <li class="star-fill">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="star-fill">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="star-fill">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="star-fill">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="star-empty">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <span> {{ $blog->getRating() }}/ 5</span>
                                        </span> 
                                    </li>
                                </ul>
                                <p>{!! substr($blog->body, 0, 105) !!}...</p>
                                <ul class="entry-meta">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-clock"></i>{{ $blog->reading_time }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-user"></i>by <span>{{ $blog->author->name }}</span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">
                                            <i class="fas fa-heart"></i><span>02</span> Likes
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Recipe Without Sidebar Area End Here -->
</x-layout-component>