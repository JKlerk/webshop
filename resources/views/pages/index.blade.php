<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">

	<div class="container mx-auto max-w-xl">
		<h1 class="">Pancakes</h1>

		<div class="flex justify-center">
			<div class="shadow w-full h-px my-2 bg-grey-darkest"></div>
		</div>
		<div class="flex flex-wrap">
			@foreach($products as $product)
				<div class="border border-grey-light mx-1 p-5 mb-3" style="width: 32.5%">
					<h1>{{$product->title}}</h1>
					<h2 class="text-grey mb-10">{{$product->shortdesc}}</h2>
					<img src="{{ url('/image/' . $product->id)}}" style="width: 500px; height: 200px;">
					<div class="w-full mt-5 flex justify-end">
						<a class="hover:underline p-2 border-black border-2 text-black no-underline hover:shadow" href="{{ url('view/' . $product->id) }}">Read more</a>
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