@extends('front.master2')
@section('content')
	<!-- Breadcrumb -->
	@include('front.breadcrumb')
	<!-- BreadCrumb -->
       
        <!-- blog-details-area start -->
        <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                           
                            @include('clientarea.menu')
                        
                        </aside>
                    </div>
                        <div class="col-md-10 col-xs-12">
                                @if($TraceServices->isEmpty())
                                    <center><h2>You Have No Active Service At The Moment</h2></center>
                                @else
                                
                                <section id="cart_items">
                                        
                                            
                                            <div class="table-responsive cart_info">
                                                    <table class="table table-condensed">
                                                            <thead>
                                                                <tr class="cart_menu">
                                                                    
                                                                    <td class="description">Description</td>
                                                                    <td class="price">Charges</td>
                                                                    <td class="total">Payment Due In</td>
                                                                
                                                                
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($TraceServices as $TraceServicesData)
                                                                <tr>
                                                                        <td class="cart_price">
                                                                            <p>{{$TraceServicesData->title}}</p>
                                                                        </td>
                                                                    
                                                                        <td class="cart_price">
                                                                            <p>{{$TraceServicesData->price}}/{{$TraceServicesData->frequency}}</p>
                                                                            <br>
                                                                            <a class="btn btn-danger" href="{{url('clientarea/pay')}}/{{$TraceServicesData->invoice}}"><i class="fa fa-dollar"></i> Pay Now</a>
                                                                       
                                                                        </td>
                                                                        
                                                                        <td class="cart_total">
                                                                            <p class="cart_total_price">
                                                                                <div class="timer-client">
                                                                                    <div data-countdown="{{$TraceServicesData->due}}"></div>
                                                                                    <!-- DateFormat yyyy/mm/dd -->
                                                                                </div>
                                                                            </p>
                                                                        </td>
                                                                    
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                    </table>
                                            </div>
                                       
                                </section>
                                
                                @endif
                            
                            
                            
                            </div>
                        </div>
                    
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
    @endsection