@extends('app')
@section('content')

<div class="ringsmain">
	<div class="container">
		<h1>Rings</h1>
		<div class="filter-sort">
			<div class="filter">
				<a href="#" data-toggle="modal" data-target="#filtermodal"><h4><i class="fa fa-filter"></i> Filters</h4></a>
			</div>
			<div class="sort">
				<a href="#"  data-toggle="modal" data-target="#sortmodal"><h4><i class="fa fa-list-ul"></i> Sort</h4></a>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Elegant Style Diamond Ring</h2>
					<h3><span class="cross">₹8999</span><br>
						₹6999
					</h3>
				</div>		
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product2.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product2.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Trio Star Diamond Necklace</h2>
					<h3>₹3999</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Heart Knot Diamond Bracelet</h2>
					<h3>₹5999</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Elegant Style Diamond Ring</h2>
					<h3>₹8999</h3>
				</div>		
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product2.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product2.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Trio Star Diamond Necklace</h2>
					<h3><span class="cross">₹3999</span><br>
						₹1999
					</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Heart Knot Diamond Bracelet</h2>
					<h3>₹5999</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Elegant Style Diamond Ring</h2>
					<h3>₹8999</h3>
				</div>		
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product2.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product2.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Trio Star Diamond Necklace</h2>
					<h3>₹3999</h3>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg">
					</div>
					<div class="flip-card-back">
						<img src="{{ asset('/assets/images/products/product1.jpg') }}" class="prodimg1">
						<div class="flipcta">
							<a href="{{ url('/product') }}">View</a>
							<a href="">Enquire Via WhatsApp</a>
							<a href="">Add to Cart</a>
						</div>

					</div>
				</div>
				<div class="flip-bottom">
					<h2>Heart Knot Diamond Bracelet</h2>
					<h3><span class="cross">₹5999</span> <br>
						₹3999 
					</h3>
				</div>
			</div>
		</div>
		<div class="counter"></div>

		<button class="paginate left pagebtn"><i></i><i></i></button>
		<button class="paginate right pagebtn"><i></i><i></i></button>
	</div>
	@include('footer')
</div>
@endsection