<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class="container mx-auto max-w-xl">
		<h1 class="">Products</h1>
		@if (session()->has('error'))
				            <div class="bg-red text-white font-semibold p-3 leading-normal text-xs m-3">{{ session()->get('error') }}</div>
				        @endif
		<div class="flex justify-center">
			<div class="shadow w-full h-px my-2 bg-grey-darkest"></div>
		</div>
		<form autocomplete="off" method="POST" action="{{ url('/shoppingcart/add/' . $product->id) }}" enctype="multipart/form-data" class="flex w-full justify-center" _lpchecked="1">
			@csrf
			<div class="flex justify-center">
				<div class="flex border-grey w-2/3 mx-2 p-5 border">
					<div class="w-2/3">
						<h1>{{$product->title}}</h1>
						<h2 class="text-grey mb-5">{{$product->shortdesc}}</h2>
						<img class="m" src="{{ url('/image/' . $product->id)}}">
					</div>
				<div class="w-2/3 ml-10 flex justify-end">
					<div class="w-2/3">
						<p>{{$product->desc}}</p>
						<p class="mt-2">Status:</p>
						<p class="mb-2 text-green">{{$product->status}}</p>
						<p class="mt-2">Sizes:</p>
						<select name="size" class="bg-white border border-black w-full">
							<option disabled selected>Select your size</option>
							<option value="Small">Small</option>
							<option value="Medium">Medium</option>
							<option value="Large">Large</option>
						</select>
						<p class="mt-2">Toppings:</p>
						<select name="topping" class="bg-white border border-black w-full">
							<option disabled selected>Select your topping</option>
							<option value="Chocolate">Chocolate</option>
							<option value="Sugar">Sugar</option>
							<option value="Cream">Cream</option>
						</select>
						<div class="w-full mt-4 flex justify-end">
							<button type="submit" class="p-2 border-black border-2 bg-black hover:shadow hover:underline text-white">+ Add to cart</button>
								{{-- <a class="hover:underline text-white" href="{{ url('shoppingcart/add/' . $product->id) }}">+ Add to cart</a> --}}
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@include('layouts.footer')
</body>
</html>