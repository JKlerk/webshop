<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">

	{{-- Black bar --}}
	<div class="w-full shadow h-px my-2 bg-grey-darkest"></div>
	
	<div class="min-h-screen md:flex">
		@include('layouts.sidebar')
		<div class="flex w-1/2">
			<div style="background-image: url({{ asset('img/batman.jpg') }});" class="w-3/5 bg-center bg-cover"></div>
			<div class="w-2/5 antialiased p-5 rounded border shadow mt-20 relative bg-yellow" style="height: 500px;">
	            <input name="name" value="Batman" class="font-anton bg-yellow w-full text-5xl mb-2"><i class="far fa-edit inline"></i></input>
	            <p class="large font-anton text-xl mb-5">Informatie</p>
	            <p class="text-trans font-semibold text-base">Wat is het?</p>
	            <textarea class="bg-yellow h-24 w-full text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</textarea>
	            <p class="text-trans mt-4 font-semibold text-base">Status</p>
	            <input value="In goede staat" class="bg-yellow text-base mt-2"></input>
            	<div class="absolute pin-t pin-r">
            		<a class="btn text-black text-xl w-8" href="{{ URL::previous() }}"><i class="fas fa-arrow-left"></i></a>
            	</div>
            	<div class="absolute pin-b pin-l">
            		<div class="w-12 text-center shadow h-1 my-2 bg-black"></div>
            		<div class="flex">
            			<a class="btn btn-black text-xl w-32" href="#">Save</a>
            		</div>
            	</div>
	        </div>		
		</div>
	</div>
{{-- @include('layouts.footer') --}}
</body>
</html>