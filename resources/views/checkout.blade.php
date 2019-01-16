@extends('layouts.app')
@if (Auth::guest())
@section('title', 'Guest')
@else
@section('title', Auth::user()->name."'s Checkout Page")
@endif
@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<a href="/">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					@if($Cart->count() == 0)
						<div class="col-md-4 text-center col-sm-6 col-xs-6">
						    <div class="thumbnail product-box">	        
						        <div class="caption">
						        	<h3>Empty Cart</h3>	
					        	</div>
						    </div>
						</div>    
						@else	    
						@foreach ($Cart as $Products)
							<div class="row">
								<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
								</div>
								<div class="col-xs-4">
									<h4 class="product-name"><strong>{{$Products->product_name}}</strong></h4><h4><small>{{$Products->product_name}}</small></h4>
								</div>
								<div class="col-xs-6">
									<div class="col-xs-6 text-right">
										<h6><strong>{{$Products->price}} <span class="text-muted">x</span></strong></h6>
									</div>
									<div class="col-xs-4">
										<input type="text" class="form-control input-sm" value="{{$Products->quantity}} Nos" disabled>
									</div>
									<!-- <div class="col-xs-2">
										<a href="{{ url('checkout/delete', $Products->id) }}">
											<button type="button" class="btn btn-link btn-xs">
												<span class="glyphicon glyphicon-trash"> </span>
											</button>
										</a>
									</div> -->
								</div>
							</div>
							@endforeach
						@endif
					<hr>	

					<hr>
					<!-- <div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div> -->
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>{{$Total}}</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Proceed Payment
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
