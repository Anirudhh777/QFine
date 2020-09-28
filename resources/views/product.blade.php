@extends('app')
@section('content')


<div class="productmain">
	<div class="productinner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 col-sm-12 prodfix">
					<div>
						<div class="prodmoreimg text-center">
							<img class="prodimg prodactive" src="{{ asset('/assets/images/products/product1.jpg') }}">
							<img class="prodimg" src="{{ asset('/assets/images/products/product2.jpg') }}">
							
							<div class="prodplay">
								<img src="{{ asset('/assets/images/play-arrow.png') }}">
							</div>
						</div>
						<div class="prodmainimg">
							<img src="{{ asset('/assets/images/products/product1.jpg') }}">
						</div>
						<div class="prodmoreimgmob">
							<!-- <div class="owl-carousel owl-carousel-product"> -->
							<div>
								<div class="holder text-center">
									<img src="{{ asset('/assets/images/products/product1.jpg') }}">
								</div>
								<!-- <div class="holder">
									<img src="{{ asset('/assets/images/products/product2.jpg') }}">
								</div>
								<div class="holder">
									<div class="prodplay">
										<img src="{{ asset('/assets/images/play-arrow.png') }}">
									</div>
								</div> -->
							</div>
							<div class="prodimgmobtnhold text-center">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product1.jpg') }}">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product2.jpg') }}">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product1.jpg') }}">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product2.jpg') }}">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product1.jpg') }}">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product2.jpg') }}">
								<img class="prodimgmobtn" src="{{ asset('/assets/images/products/product1.jpg') }}">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 prodscroll">
					<div class="prodinfo">
						<h1>Oblong Diamond Ring</h1>
						<p>24kt Gold - "SHORT DESCRIPTION"</p>
						<h2>Price : <span>₹10,000</span> </h2>
						<span class="wishdivide"> / </span>
						<div class="wishlist">
							<a href=""><img src="{{ asset('/assets/images/heart.png') }}">
								<h4>Wishlist</h4></a>
							</div>
							<span class="wishdivide"> / </span>
							<div class="wishlist">
								<a href=""><img src="{{ asset('/assets/images/size.png') }}">
									<h4>Size</h4></a>
								</div>
								<div class="metalcolor">
									<div class="custom-radios">
										<div>
											<input type="radio" id="color-1" name="color" value="color-1" checked>
											<label for="color-1">
												<span>
													<img src="{{ asset('/assets/images/tick.svg') }}">
												</span>
											</label>
										</div>

										<div>
											<input type="radio" id="color-2" name="color" value="color-2">
											<label for="color-2">
												<span>
													<img src="{{ asset('/assets/images/tick.svg') }}">
												</span>
											</label>
										</div>

										<div>
											<input type="radio" id="color-3" name="color" value="color-3">
											<label for="color-3">
												<span>
													<img src="{{ asset('/assets/images/tick.svg') }}">
												</span>
											</label>
										</div>

										<!-- <div>
											<input type="radio" id="color-4" name="color" value="color-4">
											<label for="color-4">
												<span>
													<img src="{{ asset('/assets/images/tick.svg') }}">
												</span>
											</label>
										</div> -->
									</div>
									<h4>Color : <span>Gold</span></h4>
								</div>
								<div class="prodsize">
									<input type="hidden" name="size" class="prod_size">
							           <select class="selectpicker form-control" title="Select Size">
							            <option value="Latest">Size 1</option>
							            <option value="highlow">Size 2</option>
							            <option value="lowhigh">Size 3</option>
							          </select>
								</div>
								<div class="productcta">
									<a href="">Add to Cart</a>
									<!-- <a href="">Purchase Via WhatsApp</a> -->
									<a href="">View at Home</a>
									<a href="">Customize</a>
								</div>
							</div>
							<div class="prodinfobottom">
								<h2>Description</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo ornare lectus facilisis luctus. Aliquam iaculis malesuada leo eu aliquam.</p>
							</div>
							<div class="prodinfobottom">
								<h2>Sizes</h2>
								<p>Our sizes follow etc etc write up. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo ornare lectus facilisis luctus. </p>
								<a href="" class="prodguides">View Size Guide <i class="fa fa-angle-double-right"></i></a>
							</div>
							<div class="prodinfobottom">
								<h2>Specifications</h2>
								<h4>Metal: <span>Gold</span></h4>
								<h4>Gross Weight: <span>30gms</span></h4>
								<h4>Gold Weight: <span>24 Kt</span></h4>
								<h4>Diamond <span> - </span></h4>
								<h4>Color: <span>Rose Gold</span></h4>
								<h4>Code: <span>#23453KVF</span></h4>
							</div>
							<div class="prodinfobottom">
								<h2>Share</h2>
								<ul class="prodsocial">
									<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
							<div class="prodinfobottom">
								<h2>Shipping</h2>
								<p>Brief content about shipping guidlines with a link to the main Shipping Page. </p>
								<a href="" class="prodguides">View Shipping Guidlines <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="deals">
				<div class="container text-center">
					<h1>Related Products</h1>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<img src="{{ asset('assets/images/IMG_0134-min.jpg') }}">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<img src="{{ asset('assets/images/IMG_0134-min.jpg') }}">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<img src="{{ asset('assets/images/IMG_0237-min.jpg') }}">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 demohide">
							<img src="{{ asset('assets/images/IMG_0134-min.jpg') }}">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 demohide">
							<img src="{{ asset('assets/images/IMG_0134-min.jpg') }}">
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 demohide">
							<img src="{{ asset('assets/images/IMG_0237-min.jpg') }}">
						</div>
					</div>
					<a href="#" class="relloadmore">Load More</a>
				</div>    
			</div>
			@include('footer')
		</div>


		@endsection