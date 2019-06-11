<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class="container mx-auto max-w-xl">
		<h1 class="">Products</h1>
		<div class="flex justify-center">
			<div class="shadow w-full h-px my-2 bg-grey-darkest"></div>
		</div>
		<div class="flex justify-center">
			<div class="flex border-grey w-full mx-2 p-5 border">
				<div class="w-1/3">
					<h1>{{$product->title}}</h1>
					<h2 class="text-grey mb-10">{{$product->shortdesc}}</h2>
					<img class="m" src="{{ url('/image/' . $product->id)}}">
				</div>
			<div class="w-2/3 ml-10" >
				<p>{{$product->desc}}</p>
				<p class="mt-2">Status:</p>
				<p class="mb-2 text-green">{{$product->status}}</p>
				<p class="mt-2">Sizes:</p>
				<select class="bg-white border border-black w-1/2">
					<option disabled selected>Select your size</option>
					<option>Small</option>
					<option>Medium</option>
					<option>Large</option>
				</select>
				<p class="mt-2">Toppings:</p>
				<select class="bg-white border border-black w-1/2">
					<option disabled selected>Select your topping</option>
					<option>Chocolate</option>
					<option>Sugar</option>
					<option>Cream</option>
				</select>
				<div class="w-full mt-0 flex justify-end">
					<button class="p-2 border-black border-2 bg-black hover:shadow"><a class="hover:underline text-white" href="{{ url('shoppingcart/add/' . $product->id) }}">+ Add to cart</a></button>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.footer')
</body>
</html>