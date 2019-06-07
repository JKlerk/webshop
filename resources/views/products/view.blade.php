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
			<div class="flex bg-grey-lightest w-1/2 mx-2 p-5 border border-black">
			<div class="w-1/2">
				<h1>{{$product->title}}</h1>
				<h2 class="text-grey mb-10">{{$product->shortdesc}}</h2>
			</div>
			<div class="w-1/2">
				<p>{{$product->desc}}</p>
				<select class="bg-white border border-black w-1/2">
					<option disabled selected>Select your size</option>
					<option>Small</option>
					<option>Medium</option>
					<option>Large</option>
				</select>
				<div class="w-full mt-5 flex justify-end">
					<button class="p-2 border-black border-2 bg-white no-underline hover:shadow"><a class="hover:underline text-black" href="{{ url('view/' . $product->id) }}">+ Add to cart</a></button>
				</div>
			</div>

			</div>
		</div>
	</div>


@include('layouts.footer')
<script>

	new Vue({
		el: '#root',

		data: {

			message: 'Hello world'
		}
	})
</script>
</body>
</html>