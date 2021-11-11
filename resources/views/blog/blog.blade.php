@extends('front.master')
@section('content')
	<!-- Breadcrumb -->
	@include('front.breadcrumb')
	<!-- BreadCrumb -->
    <!-- blog-details-area start -->
    <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
					@foreach($Blog as $blog)
                        <div class="blog-details-wrap">
                            <div class="blog-details-img">
							    <img src="{{url('')}}/uploads/blog/{{$blog->image_one}}" alt="" />
                            </div>
                            <div class="blog-details-content">
							{!!html_entity_decode($blog->content)!!}
                                </div>
                            <div class="comment-main">
    							<h3 class="blog-title ">Comment</h3>
    							<ol class="comments">
									<?php $Comments = DB::table('comments')->where('status','1')->where('blog_id',$blog->id)->get(); ?>
									@foreach($Comments as $comment)
    								<li class="comment even thread-even depth-1">
    									<div class="comment-wrap">
    										
    										<div class="comment-main-area">
    											<div class="comment-wrapper">
    												<div class="sewl-comments-meta">
    													<h4>{{$comment->author}} <span class="comments-date">says August 15, 2016 at 11:33</span></h4>
    												</div>
    												<div class="comment-area">
    													<p>{{$comment->content}}</p>
    												
    												</div>
    											</div>
    										</div>
    									</div>
    									
									</li>
									@endforeach
									
									
    							</ol>
    							
    						</div>
    						<div id="respond" class="sewl-comment-form comment-respond">
    							<h3 id="reply-title" class="blog-title">Post Comments</h3>
    							<form novalidate="" method="post" id="commentform" class="comment-form" action="">
    								<div class="row">
    									<div class="col-xs-12">
    										<div class="sewl-form-inputs no-padding-left">
    											<div class="row">
    												
    												<div class="col-sm-6 col-xs-12">
    													<input id="authorComment" required name="authorComment" value="" tabindex="2" placeholder="Name" type="text">
    												</div>
    												<div class="col-sm-6 col-xs-12">
    													<input id="emailComment" required name="emailComment" value="" tabindex="3" placeholder="Email" type="email">
    												</div>
                                                    <div class="col-xs-12">
                										<div class="sewl-form-textarea no-padding-right">
                											<textarea required id="comment" name="comment" tabindex="4" rows="3" cols="30" placeholder="Write Your Comments..."></textarea>
                										</div>
                									</div>
    											</div>
    										</div>
    									</div>
    									<div class="col-xs-12">
    										<div class="form-submit">
												<input name="submit" id="submitComment" value="Post Comment" type="button">
												<div id="submitCommentAjax" class="alert-info"></div>
												<div id="submitedCommentAjax" class="alert-success"></div>
												
    											<input name="comment_post_ID" value="{{$blog->id}}" id="comment_post_ID" type="hidden">
    											<input name="comment_parent" id="comment_parent" value="0" type="hidden">
    										</div>
    									</div>
    								</div>
    							</form>
    						</div>
                        </div>
					</div>
					@endforeach
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                            <div class="search-sidebar mb-30">
                                <form method="post" action="{{url('blog/search_blog')}}">
									<input type="text" name="search" placeholder="Search Here">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" name="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="category-wrap mb-30">
                                <h3 class="sidebar-title">Category</h3>
                                <ul>
									<?php $Category = DB::table('category')->get(); ?>
									@foreach($Category as $CatValue)
									  <li><a href="{{url('/blog/cat')}}/{{$CatValue->cat}}">{{$CatValue->cat}}</a></li>
									@endforeach
                                   
                                </ul>
                            </div>
                            <div class="related-post mb-30">
                                <h3 class="sidebar-title">Related Posts</h3>
                                <ul>
								@foreach($Blog as $blog)
								<?php $Related = DB::table('blog')->where('cat',$blog->cat)->paginate(10); ?>
								@foreach($Related as $related)
                                    <li class="related-post-items">
                                        <div  class="post-img">
										<img width="100" height="100%" src="{{url('')}}/uploads/blog/{{$related->image_one}}" alt="" />
                                        </div>
                                        <div class="post-info">
                                            <a href="{{url('/blog')}}/{{$related->title}}">{{$related->title}}</a>
                                            <!-- <p>20/08/2017</p> -->
                                        </div>
									</li>
								@endforeach
									@endforeach
                                   
                                   
                                </ul>
                            </div>
                            <!-- <div class="archive-wrap mb-30">
                                <h3 class="sidebar-title">archive</h3>
                                <ul>
									<li><a href="#">November 2017 <span class="pull-right">(25)</span></a></li>
									<li><a href="#">August 2017 <span class="pull-right">(25)</span></a></li>
									<li><a href="#">September 2017  <span class="pull-right">(25)</span></a></li>
									<li><a href="#">Octeber 2017 <span class="pull-right">(25)</span></a></li>
									<li><a href="#">December 2017  <span class="pull-right">(25)</span></a></li>
								</ul>
                            </div> -->
                            <!-- <div class="tags-wrap">
                                <h3 class="sidebar-title">Post Tags</h3>
                                <ul>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">css</a></li>
                                    <li><a href="#">javascript</a></li>
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">corporate</a></li>
                                    <li><a href="#">php</a></li>
                                    <li><a href="#">dolor</a></li>
                                    <li><a href="#">amet</a></li>
                                </ul>
                            </div> -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
@endsection