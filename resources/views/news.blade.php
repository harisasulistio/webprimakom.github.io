@extends('layout2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pr-5 pr-sm-0 pl-sm-0">
                <!-- ================================= Section plans -->
                <section class="section is-sm section-blog2">
                    <div class="container">
						<div class="section-head">
							<h2 class="section-title is-center">News<span class="text-primary">. </span></h2>
						</div>
                        <div class="row">
							<!--  blog item -->
							@foreach($getArticle as $key => $dt)
                            <div class="col-lg-12">
                                <div class="card-blog">
                                    <a href="{{ url('/blog/'.$dt->slug) }}">
                                        <img src="{{ asset('storage/featured_images/'.$dt->featured_images) }}" alt="" class="img-blog">
                                    </a>
                                    <div class="card-blog-wrap">
                                        <a href="{{ url('/blog/'.$dt->slug) }}">
										<h4 class="title-blog">{{ $dt->title }}</h4>
                                        </a>
                                        <p class="desc-blog">
											{!!Str::limit(strip_tags($dt->article), $limit = 175, $end = '...') !!}
										</p>
                                        <div class="meta-blog">
                                            <span class="author">By <a href="#" title="Posts by ayoub" rel="author">Admin Primakom</a></span>
										<span class="date">{{ $dt->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
							</div>
							@endforeach
                            <!--  blog item -->
                            {{--<div class="col-lg-6">
                                <div class="card-blog">
                                    <a href="#">
                                        <img src="../assets/images/bg/post7.png" alt="" class="img-blog">
                                    </a>
                                    <div class="card-blog-wrap">
                                        <a href="#">
                                            <h4 class="title-blog"> A Comprehensive Guide to Local SEO in 2019 </h4>
                                        </a>
                                        <p class="desc-blog"> Leveraged loans,” extended to junk-rated and highly
                                            leveraged
                                            companies, are
                                            too risky for banks to keep on their books. </p>
                                        <div class="meta-blog">
                                            <span class="author">By <a href="#" title="Posts by ayoub" rel="author">ayoub
                                                    creabik</a></span>
                                            <span class="date">7 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

                            <!--  blog item -->
                            {{--<div class="col-lg-6">
                                <div class="card-blog">
                                    <a href="#">
                                        <img src="../assets/images/bg/post8.png" alt="" class="img-blog">
                                    </a>
                                    <div class="card-blog-wrap">
                                        <a href="#">
                                            <h4 class="title-blog"> A Comprehensive Guide to Local SEO in 2019 </h4>
                                        </a>
                                        <p class="desc-blog"> Leveraged loans,” extended to junk-rated and highly
                                            leveraged
                                            companies, are
                                            too risky for banks to keep on their books. </p>
                                        <div class="meta-blog">
                                            <span class="author">By <a href="#" title="Posts by ayoub" rel="author">ayoub
                                                    creabik</a></span>
                                            <span class="date">7 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

                            <!--  blog item -->
                            {{--<div class="col-lg-12">
                                <div class="card-blog">
                                    <a href="#">
                                        <img src="../assets/images/bg/post9.png" alt="" class="img-blog">
                                    </a>
                                    <div class="card-blog-wrap">
                                        <a href="#">
                                            <h4 class="title-blog">Teamwork is essential for small teams to take on new
                                                challenges </h4>
                                        </a>
                                        <p class="desc-blog"> Leveraged loans,” extended to
                                            junk-rated and highly leveraged
                                            companies, are
                                            too risky for banks to keep on their books. </p>
                                        <div class="meta-blog">
                                            <span class="author">By <a href="#" title="Posts by ayoub" rel="author">ayoub
                                                    creabik</a></span>
                                            <span class="date">7 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

                            <!--  blog item -->
                            {{--<div class="col-lg-6">
                                <div class="card-blog">
                                    <a href="#">
                                        <img src="../assets/images/bg/post7.png" alt="" class="img-blog">
                                    </a>
                                    <div class="card-blog-wrap">
                                        <a href="#">
                                            <h4 class="title-blog"> Experience the breathtaking views </h4>
                                        </a>
                                        <p class="desc-blog"> Leveraged loans,”
                                            extended to junk-rated and highly
                                            leveraged
                                            companies, are
                                            too risky for banks to keep on their
                                            books. </p>
                                        <div class="meta-blog">
                                            <span class="author">By <a href="#" title="Posts by ayoub" rel="author">ayoub
                                                    creabik</a></span>
                                            <span class="date">7 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

                            <!--  blog item -->
                            {{--<div class="col-lg-6">
                                <div class="card-blog">
                                    <a href="#">
                                        <img src="../assets/images/bg/post1.png" alt="" class="img-blog">
                                    </a>
                                    <div class="card-blog-wrap">
                                        <a href="#">
                                            <h4 class="title-blog">
                                                A Comprehensive
                                                Guide to Local SEO
                                                in 2019 </h4>
                                        </a>
                                        <p class="desc-blog">
                                            Leveraged loans,”
                                            extended to junk-rated
                                            and highly leveraged
                                            companies, are
                                            too risky for banks to
                                            keep on their books.
                                        </p>
                                        <div class="meta-blog">
                                            <span class="author">By
                                                <a href="#" title="Posts by ayoub" rel="author">ayoub
                                                    creabik</a></span>
                                            <span class="date">7
                                                minute ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}

                        </div>
                        <div class="flex center">
                            <div class="load-more">
                                <span> Load More articles </span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    <!-- ============== widget -->
                    <div class="widget">
                        <h3 class="widget-title">Search</h3>
                        <div class="widget-wrap">
                            <div class="search-group"> <input type="text" class="search-input" name="s"
                                    placeholder="Search">
                                <button type="submit" class="search-submit">
                                    <ion-icon name="search"></ion-icon>
                                </button>
                            </div>


                        </div>
                    </div>
                    <!-- ============== widget -->

                    <div class="widget">
                        <h3 class="widget-title">Stay updated</h3>
                        <p class="widget-desc">Don’t miss our newest business blog posts. Sign up for the newsletter!
                        </p>
                        <div class="widget-wrap">
                            <div class="email-group"> <input type="text" class="email-input" name="s"
                                    placeholder="example@mail.com">
                                <button type="submit" class="email-submit btn btn-primary">
                                    SIGN UP
                                </button>
                            </div>


                        </div>
                    </div>
                    <!-- ============== widget -->

                    <div class="widget">
                        <h3 class="widget-title">Recent Posts
                        </h3>
                        <div class="widget-wrap">
                            <ul class="rec-posts">
								@foreach($getlatest as $key => $data)
                                <li>
                                    <div class="post-group post-group--sm">
                                        <div class="post-group__row">
                                            <div class="post-group__left"> <a href="#" class="post-group__thumb"> <img src="{{ asset('storage/featured_images/'.$data->featured_images) }}">
                                                </a>
                                            </div>
                                            <div class="post-group__right">
											<div class="h6"><a href="{{ url('/blog/'.$data->slug) }}">{{ Str::limit(strip_tags($data->title), $limit = 50, $end = '...') }}</a></div>
                                                <div class="post-group__desc">
                                                    <p>{!!Str::limit(strip_tags($data->article), $limit = 75, $end = '...') !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</li>
								@endforeach
                            </ul>

                        </div>
                    </div>
                    <!-- ============== widget -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>

                        <div class="widget-wrap">
                            <ul>
								@foreach($getCategory as $key => $d)
							<li class="cat-item "><a href="#"> {{ $d->category }} </a></li>
								@endforeach
                            </ul>


                        </div>
                    </div>
                    <!-- ============== widget -->

                    {{--<div class="widget">
                        <h3 class="widget-title">Tags</h3>

                        <div class="widget-wrap">
                            <div class="tagcloud">
                                <a rel="nofollow" href="#">design business</a>
                                <a rel="nofollow" href="#">ui/ux</a>
                                <a rel="nofollow" href="#">digikit</a>
                                <a rel="nofollow" href="#">advantages</a>
                                <a rel="nofollow" href="#">optimization</a>
                                <a rel="nofollow" href="#">global articles</a>
                                <a rel="nofollow" href="#">stock images</a>
                                <a rel="nofollow" href="#">bankrupt</a>
                                <a rel="nofollow" href="#">advantages</a>
                                <a rel="nofollow" href="#">SEO</a>
                                <a rel="nofollow" href="#">creabik</a>
                                <a rel="nofollow" href="#">design</a>
                                <a rel="nofollow" href="#">design</a>
                                <a rel="nofollow" href="#">themeforest</a>
                                <a rel="nofollow" href="#">envato</a>
                                <a rel="nofollow" href="#">analytics</a>
                                <a rel="nofollow" href="#">ceo</a>
                                <a rel="nofollow" href="#">great</a>
                                <a rel="nofollow" href="#">post</a>
                                <a rel="nofollow" href="#">vlogs</a>
                                <a rel="nofollow" href="#">daily work</a>
                                <a rel="nofollow" href="#">user interface</a>
                                <a rel="nofollow" href="#">marketer </a>
                                <a rel="nofollow" href="#">facebook manager</a>

                                <a rel="nofollow" href="#">insta marketer</a>


                            </div>


                        </div>
                    </div>--}}
                    <!-- ============== widget -->

                    <div class="widget">
                        <h3 class="widget-title text-dark">Advertising</h3>

                        <div class="widget-wrap">
                            <div class="ads">
                                <img src="../assets/images/others/ads.svg" alt="">
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@stop