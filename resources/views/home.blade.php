@extends('layouts.app')
@if (Auth::guest())
@section('title', 'Guest')
@else
@section('title', Auth::user()->name.' Shop Cart')
@endif
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">


                   Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off  on purchase of $ 2,000 and above till 24 dec !                
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/1.jpg') }}" alt="img01"><h4>Boots</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/2.jpg') }}" alt="img02"><h4>Oxfords</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/3.jpg') }}" alt="img03"><h4>Loafers</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/4.jpg') }}" alt="img04"><h4>Sneakers</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/5.jpg') }}" alt="img05"><h4>Belts</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/6.jpg') }}" alt="img06"><h4>Hats &amp; Caps</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/7.jpg') }}" alt="img07"><h4>Sunglasses</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/8.jpg') }}" alt="img08"><h4>Scarves</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/9.jpg') }}" alt="img09"><h4>Casual</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/10.jpg') }}" alt="img10"><h4>Luxury</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/11.jpg') }}" alt="img11"><h4>Sport</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/12.jpg') }}" alt="img12"><h4>Carry-Ons</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/13.jpg') }}" alt="img13"><h4>Duffel Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/14.jpg') }}" alt="img14"><h4>Laptop Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="{{ asset('ItemSlider/images/15.jpg') }}" alt="img15"><h4>Briefcases</h4>
                            </a></li>
                        </ul>
                        <nav>
                            <a href="#">Shoes</a>
                            <a href="#">Accessories</a>
                            <a href="#">Watches</a>
                            <a href="#">Bags</a>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        30% off here
                    </div>
                    <div class="thumbnail product-box">
                        <img src="{{ asset('img/dummyimg.png')}}" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>                           
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                        30% off here
                    </div>
                    <div class="thumbnail product-box">
                        <img src="{{ asset('img/dummyimg.png')}}" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                @foreach ($Categories as $category)
                <div>
                    <a href="#" class="list-group-item active">{{$category->category_name}}
                    </a>
                    <ul class="list-group">
                        @foreach ($Categories_SubCategories as $sub_category)
                        @if ($sub_category->category_name==$category->category_name)
                        <a href="">
                        <li class="list-group-item">{{$sub_category->sub_category_name}}
                        <span class="label label-primary pull-right">{{$sub_category->id}}</span>
                        </li>
                        <a>
                        @endif
                        @endforeach                          
                    </ul>
                </div>                
                @endforeach  
                <div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
                        <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                        <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                        <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
                    </ul>
                </div>
                <!-- /.div -->
                <div class="well well-lg offer-box offer-colors">


                    <span class="glyphicon glyphicon-star-empty"></span>25 % off  , GRAB IT                 
              
                   <br />
                    <br />
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                            style="width: 70%">
                            <span class="sr-only">70% Complete (success)</span>
                            2hr 35 mins left
                        </div>
                    </div>
                    <a href="#">click here to know more </a>
                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                @foreach ($Categories as $category)
                <div>
                    <ol class="breadcrumb">                                            
                        @foreach ($Categories_SubCategories as $sub_category)
                        @if ($sub_category->category_name==$category->category_name)
                        <li><a data-toggle="tab" href="#{{$sub_category->id}}">{{$sub_category->sub_category_name}}</a></li>
                        @endif
                        @endforeach
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>1235  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Popularity</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row tab-content">
                    @foreach ($Categories_SubCategories as $sub_category)
                    @if ($sub_category->category_name==$category->category_name)
                    <div id="{{$sub_category->id}}" class="col-md-4 text-center col-sm-6 col-xs-6">
                        @foreach ($Categories_SubCategories_Products as $Products)
                        @if ($Products->sub_category_name==$sub_category->sub_category_name)
                        <div class="thumbnail product-box">
                            <img src="{{asset('img/').'/'.$Products->id.'.jpg'}}" alt="" />
                            <!-- <img src="{{asset('img/').'/'.$Products->id.'.jpg'}}"> -->
                            <div class="caption">
                                <h3><a href="#">{{$Products->product_name}} </a></h3>
                                <p>Price : <strong>$ {{$Products->price}}</strong>  </p>
                               <!--  <p><a href="#">Ptional dismiss button </a></p> -->                               
                                <p><a href="{{ url('cart/add', $Products->id) }}" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @endforeach                   
                </div>
                <!-- /.row -->
                <!-- <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>   -->                          
                    <!-- /.col -->
                 @endforeach 
                </div>                            
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

    </div> -->

    <!--Footer -->
    <div class="col-md-12 footer-box">


        <div class="row small-box ">
            <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> | 
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
         
        </div>
        <div class="row small-box ">
            <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> | 
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
        </div>
        <div class="row small-box ">
            <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> | 
            <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items
            
        </div>
        <div class="row small-box pad-botom ">
            <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> | 
            <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <li><a href="#"><strong>Address: </strong>
                                <div>
                                    4477, Shop Street,<br />
                                    Shop Location, Shop
                                </div>
                            </a></li>

                2019 www.shopcart.com | All Right Reserved
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                <p>
                    
                </p>
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2019 | &nbsp; All Rights Reserved | &nbsp; www.shopcart.com | &nbsp; 24x7 support | &nbsp; Email us: info@shopcart.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
@endsection
