<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class="w-full shadow h-px my-2 bg-grey-darkest"></div>

	<div class="min-h-screen md:flex">
		@include('layouts.sidebar')
		<div class="flex content-start flex-wrap mx-5 mt-1">
			<div style="background-image: url(https://via.placeholder.com/400);" class="design cursor-default bg-white my-5 mx-3 hover:border-grey border-grey border-2 relative rounded shadow">
				<h1 class="font-banger mt-3 text-center">Example</h1>
				<div class="absolute pin-b pin-l">
					<div class="w-12 shadow h-1 my-2 bg-black"></div>
					<a class="btn btn-black text-xl w-32" href="#">Kopen</a></p>
				</div>
			</div>

			<div style="background-image: url(https://via.placeholder.com/400);" class="design cursor-default bg-white my-5 mx-3 hover:border-grey border-grey border-2 relative rounded shadow">
				<h1 class="font-banger mt-3 text-center">Example</h1>
				<div class="absolute pin-b pin-l">
					<div class="w-12 shadow h-1 my-2 bg-black"></div>
					<a class="btn btn-black text-xl w-32" href="#">Kopen</a></p>
				</div>
			</div>

			<div class="test2 bg-white my-5 mx-3 hover:border-grey border-grey border-2 relative rounded shadow">
				<img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
				<h1 class="font-banger mt-3 ml-2">Banner</h1>
				<div class="px-6 py-4">
					<div class="absolute pin-b pin-l">
						<div class="w-12 text-center shadow h-1 my-2 bg-black"></div>
						<a class="btn btn-black text-xl w-32" href="/view">Kopen</a>
					</div>
				</div>
			</div>

			<div class="design cursor-default bg-white my-5 mx-3 hover:border-grey border-grey border-2 relative rounded shadow">
				<h1 class="font-banger mt-3 text-center">Vue</h1>
				<div id="root">
					<input class="border" type="text" name="" v-model="message">

					<p>@{{ message }}</p>
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