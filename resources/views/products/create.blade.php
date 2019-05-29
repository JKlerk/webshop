<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">

	{{-- Black bar --}}
	<div class="w-full shadow h-px my-2 bg-grey-darkest"></div>
	
	<div class="min-h-screen md:flex">
		<form autocomplete="off" action="POST" enctype="multipart/formdata" class="flex w-full justify-center">
			@csrf
			<div class="antialiased p-5 w-1/4 rounded border shadow mt-4 relative bg-yellow" style="height: 500px;">
				<div class="mt-4">
					<p class="text-trans font-semibold text-base">Titel</p>
					<input name="title" class="font-anton rounded w-full text-5xl mb-2"></input>
				</div>

	            <div class="mt-5">
	            	<p class="text-trans font-semibold text-base">Description</p>
	            	<textarea name="description" class="mt-2 rounded h-24 w-full text-base"></textarea>	
	            </div>
	            <div class="mt-5">
	            	<p class="text-trans font-semibold text-base">Status</p>
	            	<input name="status" class="text-base rounded p-2 mt-2"></input>
	            </div>

	            <div class="mt-3">
	            	<input type="file" name="src">
	            </div>

            	<div class="absolute pin-t pin-r">
            		<a class="btn text-black text-xl w-8" href="{{ URL::previous() }}"><i class="fas fa-arrow-left"></i></a>
            	</div>
            	<div class="absolute pin-b pin-l">
            		<div class="w-12 text-center shadow h-1 my-2 bg-black"></div>
            		<div class="flex">
            			<a class="btn btn-black text-xl w-32" href="#">Add</a>
            		</div>
            	</div>
            </div>
	    </form>	
	</div>
{{-- @include('layouts.footer') --}}
</body>
</html>