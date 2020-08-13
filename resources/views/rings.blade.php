@extends('app')
@section('content')

<div class="container ringsmain">
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
						<a href="">Add to Cart</a>
					</div>

				</div>
			</div>
			<div class="flip-bottom">
				<h2>Elegant Style Diamond Ring</h2>
				<h3>₹6999 <span class="cross">₹8999</span></h3>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
						<a href="">Add to Cart</a>
					</div>

				</div>
			</div>
			<div class="flip-bottom">
				<h2>Trio Star Diamond Necklace</h2>
					<h3>₹1999 <span class="cross">₹3999</span></h3>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
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
						<a href="">View</a>
						<a href="">Add to Wish List</a>
						<a href="">Add to Cart</a>
					</div>

				</div>
			</div>
			<div class="flip-bottom">
				<h2>Heart Knot Diamond Bracelet</h2>
				<h3>₹3999 <span class="cross">₹5999</span> 
				</h3>
			</div>
		</div>
	</div>
</div>
<div id="filtermodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      	  <button type="button" class="close" data-dismiss="modal">&times;</button>
       	<h1>Filter PopUp</h1>
      </div>
    </div>

  </div>
</div>
<div id="sortmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      	  <button type="button" class="close" data-dismiss="modal">&times;</button>
       	<h1>Sort PopUp</h1>
      </div>
    </div>

  </div>
</div>
@endsection