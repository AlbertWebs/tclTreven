@extends('front.master')
@section('content')
	<!-- Breadcrumb -->
	@include('front.breadcrumb')
	<!-- BreadCrumb -->

        <!-- blog-area start -->
        <section class="blog-area ptb-140 bg-1">
            <div class="container">
            
                <div class="row">
                @if($Blog->isEmpty())
                   <center><h2>Sorry There Are No Blogs For That Category</h2></center>
                @else
                @foreach($Blog as $blog)
                    <div class="col-md-4 portfolio col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="{{url('')}}/uploads/blog/{{$blog->image_one}}" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> {{$blog->author}}</a></li>
										<li><a href="#"><i class="fa fa-comment"></i> <?php $Comments = DB::table('comments')->where('blog_id',$blog->id)->get(); $Count = count($Comments); echo $Count; ?>  Comments</a></li>
										
                                    </ul>
                                </div>
                                <h3><a href="{{url('/blog')}}/{{$blog->id}}">{{$blog->title}}</a></h3>
                                <p>
                                        <?php
											$original_string = $blog->content;
											$num_words = 15;
											$words = array();
											$words = explode(" ", $original_string, $num_words);
											$shown_string = "";
											

											if(count($words) == 15){
											$words[14] = "... ";
											}

											$shown_string = implode(" ", $words);

										?>
								<!-- Elipses -->
							         {!!html_entity_decode($shown_string)!!}
                                </p>
                                <a href="{{url('/blog')}}/{{$blog->title}}" class="btn-style">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                            <?php echo $Blog; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area end -->
@endsection