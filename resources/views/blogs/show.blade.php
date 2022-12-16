<x-layout-component title="{{ $blog->title }}">
    <x-slot name="header">
        <style>
            /* .rate-wrapper .rate{
                float: left;
            }
            .rate-wrapper .rate input[type=radio]{
                display: none;
            }

            .rate-wrapper .rate .rate-item:not(.half)::before{
                content: '\f005';
                font-family: 'FontAwesome';
                display: inline-block;
            }
            .rate-wrapper .rate .rate-item.half{
                position: absolute;
                z-index: 9;
            }

            .rate-wrapper .rate .rate-item.half::before{
                content: '\f089';
                font-family: 'FontAwesome';
                display: inline-block;

            }
            .rate-wrapper .rate .rate-item{
                color: #dedede;
                float: right;
            }
            .rate-wrapper .rate

            .rate-wrapper .rate .rate-item:hover{
                color: gold;
            } */
            .single-recipe-layout2 .leave-review .rate-wrapper{
                align-items: center;
            }
            .rating{
                border: none;
                float: left;
                margin-bottom: 0.5em;
            }

            .rating > input{
                display: none;
            }

            .rating > label:before{
                content: '\f005';
                font-family: FontAwesome;
                margin: 5px;
                font-size: 1.5rem;
                display: inline-block;
                cursor: pointer;
            }

            .rating > .half:before{
                content: '\f089';
                position: absolute;
                cursor: pointer;
            }


            .rating > label{
                color: #ddd;
                float: right;
                cursor: pointer;
            }

            .rating > input:checked ~ label,
            .rating:not(:checked) > label:hover, 
            .rating:not(:checked) > label:hover ~ label{
                color: #ffb300;
            }

            .rating > input:checked + label:hover,
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label,
            .rating > input:checked ~ label:hover ~ label{
                color: #ffb300;
            }

            .comment_textarea{
                width: 25em;
                resize: none;
                border-color: #ddd;
                border-radius: 0.35em;
                font-size: 16px;
                padding: .5em;
            }

            .reply_rating_btn{
                padding: 0.5em 1.5em;
                background: #1e887a;
                color: white;
                font-weight: 600;
                border-radius: 0.35em;
            }
        </style>
    </x-slot>
    <!-- Single Recipe Main Banner Area Start Here -->
    <section class="single-recipe-main-banner">
        <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="5" data-margin="5" data-autoplay="true"
            data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false"
            data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
            data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true"
            data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false"
            data-r-large="1" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1"
            data-r-extra-large-nav="true" data-r-extra-large-dots="false">
            <div class="item-figure">
                <img src="{{ asset($blog->file->url) }}" alt="Banner" class="w-full max-h-[50em] object-cover">
            </div>
            {{-- <div class="item-figure">
                <img src="img/figure/single-banner2.jpg" alt="Banner">
            </div>
            <div class="item-figure">
                <img src="img/figure/single-banner3.jpg" alt="Banner">
            </div>
            <div class="item-figure">
                <img src="img/figure/single-banner4.jpg" alt="Banner">
            </div>
            <div class="item-figure">
                <img src="img/figure/single-banner5.jpg" alt="Banner">
            </div> --}}
        </div>
    </section>
    <!-- Single Recipe Main Banner Area End Here -->
    <!-- Single Recipe Without Sidebar Area Start Here -->
    <section class="single-recipe-wrap-layout2 padding-bottom-80">
        <div class="container">
            <div class="single-recipe-layout2">
                <div class="ctg-name">{{ $blog->category->name }}</div>
                <h2 class="item-title">{{ $blog->title }}</h2>
                <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                    <ul class="entry-meta">
                        <li class="single-meta">
                            <a href="{{ route('blogs.show', $blog->id) }}">
                                <i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}
                            </a>
                        </li>
                        <li class="single-meta">
                            <a href="#">
                                <i class="fas fa-user"></i>by 
                                <span>{{ $blog->author->name }}</span>
                            </a>
                        </li>
                        <li class="single-meta">
                            <ul class="item-rating">
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-fill"><i class="fas fa-star"></i></li>
                                <li class="star-empty"><i class="fas fa-star"></i></li>
                                <li><span>{{ $blog->getRating() }}<span> / 5</span></span> </li>
                            </ul>
                        </li>
                        {{-- <li class="single-meta">
                            <a href="#">
                                <i class="fas fa-heart"></i>
                                <span>02</span>
                                Likes
                            </a>
                        </li> --}}
                    </ul>
                    <ul class="action-item">
                        <li><button><i class="fas fa-print"></i></button></li>
                        <li><button><i class="fas fa-expand-arrows-alt"></i></button></li>
                        <li class="action-share-hover"><button><i class="fas fa-share-alt"></i></button>
                            <div class="action-share-wrap">
                                <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#" title="skype"><i class="fab fa-skype"></i></a>
                                <a href="#" title="rss"><i class="fas fa-rss"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item-feature">
                    <ul>
                        <li>
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="feature-title">PREP TIME</div>
                                        <div class="feature-sub-title">{{ $blog->reading_time }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon">
                                        <i class="fas fa-utensils"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="feature-title">COOK TIME</div>
                                        <div class="feature-sub-title">45 Mins</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="feature-title">SERVING</div>
                                        <div class="feature-sub-title">10 People</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon">
                                        <i class="far fa-eye"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="feature-title">VIEWS</div>
                                        <div class="feature-sub-title">3,450</div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <p class="item-description">{!! $blog->body !!}</p>
                <div class="tag-share">
                    <ul>
                        <li>
                            <ul class="inner-tag">
                                <li>Tag:</li>
                                <li>
                                    <a href="#">{{ $blog->category->name }}</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <ul class="inner-share">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="recipe-author">
                    <div class="media media-none--xs">
                        <img src="{{ asset($blog->author->file->url) }}" alt="Blog Author" class="rounded-circle media-img-auto max-h-44 max-w-[11em] h-44 w-44 object-cover">
                        <div class="media-body">
                            <h4 class="author-title">{{ $blog->author->name }}</h4>
                            <h5 class="author-sub-title">Written by</h5>
                            <ul class="author-social">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="recipe-reviews">
                    <div class="section-heading3 heading-dark">
                        <h2 class="item-heading">RECIPE REVIEWS</h2>
                    </div>
                    <div class="avarage-rating-wrap">
                        <div class="avarage-rating">Avarage Rating: 
                            <span class="rating-icon-wrap">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">({{ $blog->getRating() }})</span>                                        
                        </div>
                        <div class="total-reviews">Total Reviews:<span class="review-number">({{ $blog->ratings->count() }})</span></div>
                    </div>
                    <ul>
                        @foreach ($blog->ratings as $rating)
                            <li class="reviews-single-item">
                                <div class="media media-none--xs">
                                    <img src="{{ asset($rating->user->file->url) }}" alt="Comment" class="media-img-auto h-32 w-32 object-cover">
                                    <div class="media-body">
                                        <h4 class="comment-title">{{ $rating->user->name }}</h4>
                                        <span class="post-date">{{ $rating->created_at->format('M d, Y') }}</span>
                                        <p>{{ $rating->comment }}</p>
                                        <ul class="item-rating">
                                            <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                            <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                            <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                            <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                            <li class="single-item star-empty"><i class="fas fa-star"></i></li>
                                            <li class="single-item"><span>{{ $rating->rate }}<span> / 5</span></span> </li>
                                        </ul>
                                        <a href="#" class="item-btn openReplyModal" data-reply-id="{{ $rating->id }}">REPLY<i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            @if ($rating->comments->count())
                                @foreach ($rating->comments as $comment)
                                    <li class="reviews-single-item ml-32">
                                        <div class="media media-none--xs">
                                            <img src="{{ asset($comment->user->file->url) }}" alt="Comment" class="media-img-auto h-32 w-32 object-cover">
                                            <div class="media-body">
                                                <h4 class="comment-title">{{ $comment->user->name }}</h4>
                                                <span class="post-date">{{ $comment->created_at->format('M d, Y') }}</span>
                                                <p>{{ $comment->comment }}</p>
                                                {{-- <ul class="item-rating">
                                                    <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                    <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                    <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                    <li class="single-item star-fill"><i class="fas fa-star"></i></li>
                                                    <li class="single-item star-empty"><i class="fas fa-star"></i></li>
                                                    <li class="single-item"><span>{{ $comment->rate }}<span> / 5</span></span> </li>
                                                </ul>
                                                <a href="#" class="item-btn openReplyModal" data-reply-id="{{ $comment->id }}">REPLY<i class="fas fa-long-arrow-alt-right"></i></a> --}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
                @auth
                    <form method="POST" action="{{ route('blogs.rate', $blog->id) }}" class="leave-review">
                        @csrf
                        <div class="section-heading3 heading-dark">
                            <h2 class="item-heading">LEAVE A REVIEW</h2>
                        </div>
                        <div class="rate-wrapper">
                            <div class="rate-label">Rating</div>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rate" value="5"/><label for="star5" class="full"></label>
                                <input type="radio" id="star4.5" name="rate" value="4.5"/><label for="star4.5" class="half"></label>
                                <input type="radio" id="star4" name="rate" value="4"/><label for="star4" class="full"></label>
                                <input type="radio" id="star3.5" name="rate" value="3.5"/><label for="star3.5" class="half"></label>
                                <input type="radio" id="star3" name="rate" value="3"/><label for="star3" class="full"></label>
                                <input type="radio" id="star2.5" name="rate" value="2.5"/><label for="star2.5" class="half"></label>
                                <input type="radio" id="star2" name="rate" value="2"/><label for="star2" class="full"></label>
                                <input type="radio" id="star1.5" name="rate" value="1.5"/><label for="star1.5" class="half"></label>
                                <input type="radio" id="star1" name="rate" value="1"/><label for="star1" class="full"></label>
                                <input type="radio" id="star0.5" name="rate" value="0.5"/><label for="star0.5" class="half"></label>
                            </fieldset>
                            {{-- <div class="rate relative">
                                    <input type="radio" name="rate" value="5" id="five_star">
                                    <label for="five_star" class="rate-item"></label>

                                    <input type="radio" name="rate" value="4.5" id="four_half_star">
                                    <label for="four_half_star" class="rate-item half"></label>
                                    
                                    <input type="radio" name="rate" value="4" id="four_star">
                                    <label for="four_star" class="rate-item"></label>
                                    
                                    <input type="radio" name="rate" value="3.5" id="three_half_star">
                                    <label for="three_half_star" class="rate-item half"></label>
                                    
                                    <input type="radio" name="rate" value="3" id="three_star">
                                    <label for="three_star" class="rate-item"></label>
                                    
                                    
                                    <input type="radio" name="rate" value="2.5" id="two_half_star">
                                    <label for="two_half_star" class="rate-item half"></label>
                                    
                                    <input type="radio" name="rate" value="2" id="two_star">
                                    <label for="two_star" class="rate-item"></label>
                                    
                                    
                                    <input type="radio" name="rate" value="1.5" id="one_half_star">
                                    <label for="one_half_star" class="rate-item half"></label>

                                    <input type="radio" name="rate" value="1" id="one_star">
                                    <label for="one_star" class="rate-item"></label>
                                    
                                    <input type="radio" name="rate" value="0.5" id="half_star">
                                    <label for="half_star" class="rate-item half"></label>
                            </div> --}}
                        </div>
                        <div class="leave-form-box">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label>Comment :</label>
                                    <textarea placeholder="" class="textarea form-control" name="comment" rows="7" cols="20"
                                        data-error="Message field is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                {{-- <div class="col-lg-4 form-group">
                                    <label>Name :</label>
                                    <input type="text" placeholder="" class="form-control" name="name" data-error="Name field is required"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label>E-mail :</label>
                                    <input type="email" placeholder="" class="form-control" name="email" data-error="E-mail field is required"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label>Website :</label>
                                    <input type="email" placeholder="" class="form-control" name="email" data-error="E-mail field is required"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div> --}}
                                <div class="col-12 form-group mb-0">
                                    <button type="submit" class="item-btn">POST REVIEW</button>
                                </div>
                            </div>
                            <div class="form-response"></div>
                        </div>
                    </form>
                @endauth
            </div>
        </div>
    </section>
    <!-- Single Recipe Without Sidebar Area End Here -->
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

    <!-- reply Rating comment modal -->
    <div class="modal fade" id="RatingReplyModal"  tabindex="-1" role="dialog" aria-labelledby="RatingReplyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="mb-none">Reply</div>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa-solid fa-xmark text-2xl"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="reply-rating-form" id="RatingReplyForm" method="POST" action="{{ route('ratings.reply', $blog->id) }}" data-parsley-validate>
                        @csrf
                        <input type="hidden" name="reply_id" class="reply_comment_id">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <label>Reply :</label>
                                    <textarea placeholder="" class="comment_textarea block w-[40em] resize-none" name="comment" rows="7" cols="20"
                                        data-error="Message field is required" required data-parsley-required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <small class="error name"></small>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill reply_rating_btn ml-auto" type="submit">
                                Reply
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- reply rating comment modal ends --> 
    <x-slot name="footer">
        @if (session()->has('success'))
            <script>
                Swal.fire(
                    'Success',
                        @json(session('success')),
                    'success'
                )
            </script>
        @endif
        <script>
            $('.openReplyModal').on('click', function () {
                let link = $(this);
                $('input.reply_comment_id').val(link.data('reply-id'))
                $('#RatingReplyModal').modal('show');
            });
        </script>
    </x-slot>
</x-layout-component>