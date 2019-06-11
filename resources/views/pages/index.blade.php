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
		<div class="flex flex-wrap">
			@foreach($products as $product)
				<div class="border border-grey-light mx-1 p-5 mb-5" style="width: 49%">
					<h1>{{$product->title}}</h1>
					<h2 class="text-grey mb-10">{{$product->shortdesc}}</h2>
					<img src="{{ url('/image/' . $product->id)}}">
					<div class="w-full mt-5 flex justify-end">
						<button class="p-2 border-black border-2 bg-white no-underline hover:shadow"><a class="hover:underline text-black" href="{{ url('view/' . $product->id) }}">Read more</a></button>
					</div>
				</div>
			@endforeach
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