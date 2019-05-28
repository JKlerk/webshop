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
			<div class="w-full flex">
				<div class="bg-grey-lightest w-full mx-2 p-5">
					<h1>Title</h1>
					<h2 class="text-grey mb-10">Short Desc</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<div class="w-full mt-5 flex justify-end">
						<button class="p-2 bg-blue text-white rounded-full hover:bg-blue-dark hover:shadow">Read more</button>
					</div>
				</div>
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