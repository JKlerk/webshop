s<!DOCTYPE html>
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
			<div class="w-full flex">
				@foreach($products as $product)
					<div class="bg-grey-lightest w-full mx-2 p-5">
						<h1>{{$product->title}}</h1>
						<h2 class="text-grey mb-10">{{$product->desc}}</h2>
						<p>{{$product->shortdesc}}</p>

						<div class="w-full mt-5 flex justify-end">
							<button class="p-2 border-black border-2 hover:bg-grey-light hover:shadow"><a href="{{ url('view/' . $product->id) }}">Read more</a></button>
						</div>
					</div>
				@endforeach
				<div class="bg-grey-lightest w-full mx-2">
					<h1>ss</h1>
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