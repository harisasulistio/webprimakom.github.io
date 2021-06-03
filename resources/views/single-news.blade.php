@extends('layout2')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-lg-8 pr-5 pr-sm-0 pl-sm-0">
                <!-- ================================= Section plans -->
                <section class="section is-sm section-blog2">
                    <div class="container">

                        <div class="row">
							<!--  blog item -->
							@foreach($getArticle as $key => $dt)
                            <div class="col-lg-12">
								<h6 class="section-title mt-5">{{ $dt->title }}</h6>

								<div class="meta-blog mt-3">
									<span class="author">By <a href="{{ url('/blog/'.$dt->slug) }}" title="Posts by ayoub" rel="author">Admin Primakom</a></span>
									<span class="date">{{ $dt->created_at->diffForHumans() }}</span>
								</div>
								<img src="{{ asset('storage/featured_images/'.$dt->featured_images) }}" alt="" class="img-fluid my-3">
								<div class="isiblog mt-3">
									{!! $dt->article !!}
								</div>
						</div>
							@endforeach
                        </div>
                        <div class="flex center mt-5">
							<hr/>
                            <div class="fb-comments" data-href="{{ url()->full() }}" data-numposts="5" data-width="100%"></div>
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
											<div class="h6"><a href="#">{{ Str::limit(strip_tags($data->title), $limit = 50, $end = '...') }}</a></div>
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
                </aside>
            </div>
        </div>
	</div>
	<style>
		.isiblog > p {
			margin-bottom:25px !important;
		}
	</style>
@stop